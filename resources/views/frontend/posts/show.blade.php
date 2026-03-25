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
                    <x-frontend.posts.single-content :post="$post" />

                    <x-frontend.posts.discussion-area :post="$post" />
                </div>
            </div>
        </div>
    </section>
</x-frontend.shell>
