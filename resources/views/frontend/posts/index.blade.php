<x-frontend.shell
    title="Posts {{ $q ? '- Zoekresultaten voor: ' . $q : (isset($category) ? '- Categorie: ' . $category->name : '') }}"
    meta-description="Bekijk al onze posts{{ $q ? ' over ' . $q : (isset($category) ? ' in de categorie ' . $category->name : '') }}."
>

    <x-frontend.breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        @if($q)
            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Zoeken: {{ $q }}</li>
        @elseif(isset($category))
            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categorie: {{ $category->name }}</li>
        @else
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        @endif
    </x-frontend.breadcrumb>

    <section class="gazette-news-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    @if(isset($category))
                        <div class="category-header mb-50">
                            <h2 class="font-pt mb-2">{{ $category->name }}</h2>
                            @if($category->description)
                                <p class="mb-0">{{ $category->description }}</p>
                            @endif
                        </div>
                    @elseif($q)
                        <div class="search-header mb-50">
                            <h2 class="font-pt">Zoekresultaten voor: {{ $q }}</h2>
                        </div>
                    @endif

                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-12 col-md-6">
                                <div class="gazette-single-catagory-post d-flex flex-wrap mb-30">
                                    @if($post->media)
                                        <div class="single-catagory-post-thumb">
                                            <a href="{{ route('posts.show', $post) }}">
                                                <img src="{{ $post->media->url() }}" alt="{{ $post->title }}">
                                            </a>
                                        </div>
                                    @endif

                                    <div class="single-catagory-post-content">
                                        <div class="gazette-post-tag mt-3">
                                            @foreach($post->categories as $postCategory)
                                                <a href="{{ route('categories.show', $postCategory) }}">{{ $postCategory->name }}</a>
                                            @endforeach
                                        </div>

                                        <h5>
                                            <a href="{{ route('posts.show', $post) }}" class="font-pt">{{ $post->title }}</a>
                                        </h5>

                                        <span class="gazette-post-date">
                                            {{ optional($post->published_at)->format('F d, Y') }}
                                        </span>

                                        <p>
                                            {{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->body), 110) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info">
                                    Geen posts gevonden @if($q) voor "{{ $q }}" @elseif(isset($category)) in categorie "{{ $category->name }}" @endif.
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-12 mt-4">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
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
