{{-- <div> --}}
  @foreach($post->tags as $tag)
    <span class="label label-many"><a href="">#{{ $tag->name }}</a></span>
    {{-- <span class="label label-many"><a href="{{ route('tags.show', $tag) }}">#{{ $tag->name }}</a></span> --}}
  @endforeach
{{-- </div> --}}
{{-- <div class="tags container-flex">
  @foreach($post->tags as $tag)
    <span class="tag c-gray-1 text-capitalize"><a href="{{ route('tags.show', $tag) }}">#{{ $tag->name }}</a></span>
  @endforeach
</div> --}}
