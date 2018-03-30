<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
        protected $fillable = [
            'title', 'address', 'body', 'published_at', 'email', 'phone', 'category_id', 'salary', 'days', 'user_id'
        ];

        // protected $guarded = [];

        protected $dates = ['published_at'];

        protected static function boot()
        {
          parent::boot();

          static::deleting(function($post){

            $post->tags()->detach();
            $post->photos->each->delete();

          });
        }

        public function getRouteKeyName()
        {

            return 'url';

        }

        public function category()
        {

            return $this->belongsTo(Category::class);

        }

        public function tags()
        {

            return $this->belongsToMany(Tag::class);

        }

        public function photos()
        {

            return $this->hasMany(Photo::class);

        }

        public function owner()
        {
          return $this->belongsTo(User::class, 'user_id');
        }


// public static function cleanUp(Builder $query) : Builder
// {
//
//    return $query->where(function ($q) {
//        $q->where('lasting_id', '1')
//            ->where('created_at', '<', Carbon::now()->subDays(1));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '2')
//            ->where('created_at', '<', Carbon::now()->subDays(2));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '3')
//            ->where('created_at', '<', Carbon::now()->subDays(3));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '4')
//            ->where('created_at', '<', Carbon::now()->subDays(4));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '5')
//            ->where('created_at', '<', Carbon::now()->subDays(5));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '6')
//            ->where('created_at', '<', Carbon::now()->subDays(6));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '7')
//            ->where('created_at', '<', Carbon::now()->subDays(7));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '8')
//            ->where('created_at', '<', Carbon::now()->subDays(8));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '9')
//            ->where('created_at', '<', Carbon::now()->subDays(9));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '10')
//            ->where('created_at', '<', Carbon::now()->subDays(10));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '11')
//            ->where('created_at', '<', Carbon::now()->subDays(11));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '12')
//            ->where('created_at', '<', Carbon::now()->subDays(12));
//    })->orWhere(function($q) {
//        $q->where('lasting_id', '13')
//            ->where('created_at', '<', Carbon::now()->subDays(13));
//    })->orWhere(function($q) {
//         $q->where('lasting_id', '14')
//            ->where('created_at', '<', Carbon::now()->subDays(14));
//
//    });
//
// }


        public function scopePublished($query)
        {
          // dd($query->first()->days);
          // $query->whereNotNull('published_at')
          //       ->where('published_at', '<=', Carbon::now())
          //       ->latest('published_at');
          $query->whereNotNull('published_at')
                ->where('published_at', '<=', Carbon::now())
                ->where('published_at', '>=', Carbon::now()->subDays(intval($query->first()->days)))
                ->latest('published_at');

        }

        public function scopeAllowed($query)
        {
          if (auth()->user()->can('view', $this))
          {
            // $posts = Post::all();
            return $query;
          }

          return $query->where('user_id', auth()->id());
        }

        public function isPublished()
        {
          return ! is_null($this->published_at) && $this->published_at < today();
        }

        public static function create(array $attributes = [])
        {
          $attributes['user_id'] = auth()->id();

          $post = static::query()->create($attributes);

          $post->generateUrl();

          return $post;
        }

        public function generateUrl()
        {
          $url = str_slug($this->title);

          if ($this->whereUrl($url)->exists())
          {
            $url = "{$url}-{$this->id}";
          }

          $this->url = $url;

          $this->save();
        }

        public function setPublishedAtAttribute($published_at)
        {
          $this->attributes['published_at'] = $published_at
                ? Carbon::parse($published_at)
                : null;
        }

        public function setCategoryIdAttribute($category)
        {
          $this->attributes['category_id'] =Category::find($category)
                              ? $category
                              : Category::create(['name' => $category])->id;
        }

        public function syncTags($tags)
        {
          $tagIds = collect($tags)->map(function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
          });

          $this->tags()->sync($tagIds);

        }

        public function viewType($home = '')
        {
          if ($this->photos->count() === 1):
            return 'posts.photo';

          elseif ($this->photos->count() > 1):
            return $home === 'home' ? 'posts.carousel-preview' : 'posts.carousel';

          elseif ($this->iframe):
            return 'posts.iframe';
          else:
            return 'posts.text';
          endif;
        }

}
