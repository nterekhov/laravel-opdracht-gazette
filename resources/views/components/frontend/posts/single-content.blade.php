@props(['post'])

<div class="gazette-single-post-details">
    <div class="blog-post-thumbnail mb-50">
        @if($post->media)
            <img src="{{ $post->media->url() }}" alt="{{ $post->title }}">
        @endif
    </div>

    <div class="single-post-content">
        <div class="gazette-post-tag mt-3">
            @foreach($post->categories as $category)
                <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            @endforeach
        </div>
        <h2 class="font-pt mb-30">{{ $post->title }}</h2>
        <p class="gazette-post-date">
            <span>Door: {{ $post->user->name }}</span> | <span>{{ optional($post->published_at)->format('F d, Y') }}</span>
        </p>

        <div class="post-body single-post-text">
            {!! $post->body !!}
        </div>
    </div>
</div>
