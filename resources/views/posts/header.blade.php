<header class="container-flex space-between">
  <div class="date">
    <span class="c-gray-1">{{ optional($post->updated_at)->format('d M Y') }}
                            {{-- {{ $post->published_at->format('M d') }} --}}
                          {{-- / {{ $post->owner->name }}
                          / {{ $post->days }}
                          / {{ $post->hide_at }} --}}
    </span>
  </div>
            {{--format('d M Y')--}}
  <div class="post-category">
    <span class="category">	 {{--text-capitalize--}}
      <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
    </span>
  </div>
</header>
