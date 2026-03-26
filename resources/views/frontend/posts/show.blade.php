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
            <div class="row">
                <div class="col-12 col-lg-9">
                    <x-frontend.posts.single-content :post="$post" />

                    <x-frontend.posts.discussion-area :post="$post" />
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <div class="sidebar-area">
                        <div class="breaking-news-widget">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>

                            @forelse($categories as $sidebarCategory)
                                <div class="single-breaking-news-widget">
                                    <a href="{{ route('categories.show', $sidebarCategory) }}" class="font-pt">{{ $sidebarCategory->name }}</a>
                                    <span>{{ $sidebarCategory->posts_count }} post(s)</span>
                                </div>
                            @empty
                                <p>Geen categorieën beschikbaar.</p>
                            @endforelse
                        </div>

                        <div class="donnot-miss-widget">
                            <div class="widget-title">
                                <h5>Advert</h5>
                            </div>

                            <div class="single-dont-miss-post-thumb">
                                <img src="{{ asset('frontend/gazette/img/bg-img/add.png') }}" alt="advertentie">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.shell>
