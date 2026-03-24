<x-frontend.shell
    :title="$post->title"
    :meta-description="$post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->body), 160)"
>
    <x-frontend.breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
    </x-frontend.breadcrumb>

    <section class="single-post-area section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="gazette-single-post-details">
                        <div class="blog-post-thumbnail mb-50">
                            @if($post->media)
                                <img src="{{ $post->media->url() }}" alt="{{ $post->title }}">
                            @endif
                        </div>

                        <div class="single-post-content">
                            <div class="gazette-post-tag">
                                @foreach($post->categories as $category)
                                    <a href="#">{{ $category->name }}</a>
                                @endforeach
                            </div>
                            <h2 class="font-pt mb-30">{{ $post->title }}</h2>
                            <p class="gazette-post-date">{{ optional($post->published_at)->format('F d, Y') }}</p>

                            <div class="post-body">
                                {!! $post->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.shell>
