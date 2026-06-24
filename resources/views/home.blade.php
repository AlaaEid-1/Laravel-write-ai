<x-layout title="Home" main-class="pt-24 pb-section-gap max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-12
gap-8">

    <x-slot:style>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                vertical-align: middle;
            }

            body {
                background-color: #f9f9f9;
                color: #1a1c1c;
            }
        </style>
    </x-slot:style>

    <!-- Left Sidebar: Navigation & Tags -->
    <aside class="hidden md:block md:col-span-2 space-y-8">
        <div class="space-y-4">
            <h3 class="font-ui-label text-ui-label uppercase tracking-widest text-secondary font-bold">Discover</h3>
            <ul class="space-y-2">
                <li><a class="flex items-center gap-3 text-primary font-bold font-ui-label text-ui-label py-1"
                        href="#"><span class="material-symbols-outlined" data-weight="fill"
                            style="font-variation-settings: 'FILL' 1;">explore</span>Explore</a></li>
                <li><a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors font-ui-label text-ui-label py-1"
                        href="#"><span class="material-symbols-outlined">trending_up</span>Popular</a></li>
                <li><a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors font-ui-label text-ui-label py-1"
                        href="#"><span class="material-symbols-outlined">history</span>Recent</a></li>
            </ul>
        </div>
        <div class="space-y-4">
            <h3 class="font-ui-label text-ui-label uppercase tracking-widest text-secondary font-bold">Your Tags
            </h3>
            <div class="flex flex-wrap gap-2">
                <a class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full font-metadata text-metadata hover:bg-outline-variant transition-colors"
                    href="#">#Development</a>
                <a class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full font-metadata text-metadata hover:bg-outline-variant transition-colors"
                    href="#">#DesignSystems</a>
                <a class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full font-metadata text-metadata hover:bg-outline-variant transition-colors"
                    href="#">#Minimalism</a>
                <a class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full font-metadata text-metadata hover:bg-outline-variant transition-colors"
                    href="#">#Typography</a>
                <a class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full font-metadata text-metadata hover:bg-outline-variant transition-colors"
                    href="#">#Future</a>
            </div>
        </div>
    </aside>
    <!-- Center Feed -->
    <section class="col-span-1 md:col-span-7 space-y-12">
        <!-- Featured Article (Bento Style) -->
        @php
        $featured = $posts->shift();
         @endphp
        <article
            class="group border border-outline-variant rounded-xl overflow-hidden bg-white hover:border-primary transition-colors duration-300">
            <div class="aspect-[16/9] overflow-hidden">
                <img alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    data-alt="A macro photograph of high-quality cream-colored paper with deep black ink strokes, showcasing fine texture and professional calligraphy. The lighting is soft and cinematic, casting gentle shadows that emphasize the physical depth of the ink on the page. The overall aesthetic is minimalist and sophisticated, representing a premium editorial experience with high contrast and clarity."
                    src="{{ asset('storage/' . $featured->cover_image) }}" />
            </div>
            <div class="p-8 space-y-4">
                <div class="flex items-center gap-3 font-metadata text-metadata text-secondary">
                    <span
                        class="bg-primary-container text-on-primary px-2 py-0.5 rounded font-bold uppercase tracking-wider">Featured</span>
                    <span>•</span>
                    <span>May 12, 2024</span>
                    <span>•</span>
                    <span>{{ $featured->read_time }} min read</span>
                </div>
                <h2
                    class="font-headline-md text-headline-md text-on-surface leading-tight group-hover:text-primary transition-colors">
                    {{ $featured->title }}</h2>
                <p class="text-on-surface-variant font-body-md text-body-md line-clamp-3">{{ $featured->excerpt }}</p>
                <div class="flex items-center justify-between pt-4 border-t border-outline-variant">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant overflow-hidden">
                            <img alt="Author" class="w-full h-full object-cover"
                                src="{{ asset('storage/' . $featured->cover_image) }}" />
                        </div>
                        <div>
                            <p class="font-ui-label text-ui-label font-bold text-on-surface">{{ $featured->user->name }}</p>
                            <p class="font-metadata text-metadata text-secondary">{{ $featured->category->name }}</p>
                        </div>
                    </div>
                    <button class="text-primary p-2 rounded-full hover:bg-primary-container/10 transition-colors">
                        <span class="material-symbols-outlined" data-icon="bookmark_add">bookmark_add</span>
                    </button>
                </div>
            </div>
        </article>
        <!-- Grid of Regular Articles -->
        <div class="grid grid-cols-1 gap-12">
            <!-- Article 2 -->
            @foreach($posts as $post)
            <article class="flex flex-col md:flex-row gap-8 group">

                <div
                    class="w-full md:w-1/3 aspect-video md:aspect-square overflow-hidden rounded-lg border border-outline-variant">
                    <img alt=""
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="A close-up shot of a classic fountain pen resting on an open notebook filled with elegant handwriting. The scene is lit by warm, natural afternoon sunlight coming through a nearby window, creating long, soft shadows. The paper has a subtle grain, and the ink appears rich and saturated, embodying an atmosphere of intellectual focus and traditional craftsmanship."
                        src='{{ asset('storage/' . $post->cover_image) }}' />
                </div>

                <div class="w-full md:w-2/3 space-y-3">
                    <div class="flex items-center gap-2 font-metadata text-metadata text-secondary">
                        <span class="text-primary font-bold">{{ $post->category->name }}</span>
                        <span>•</span>
                        <span>{{ $post->created_at->format('M j, Y') }}</span>
                    </div>
                    <h3
                        class="font-headline-md text-[24px] leading-snug text-on-surface group-hover:text-primary transition-colors">
                        {{ $post->title }}</h3>
                    <p class="text-on-surface-variant font-body-md text-body-md line-clamp-2">{{ $post->excerpt }}</p>
                    <div class="flex items-center gap-3 pt-2">
                        <p class="font-ui-label text-ui-label text-on-surface font-medium">{{ $post->user->name }}</p>
                        <span class="text-secondary text-metadata">•</span>
                        <span class="text-secondary font-metadata text-metadata">{{ $post->read_time }} min read </span>
                    </div>
                </div>

            </article>
              @endforeach
        </div>
        <div class="pt-8 flex justify-center">
            <button
                class="px-8 py-3 border border-primary text-primary font-ui-button text-ui-button rounded-lg hover:bg-primary-container/5 transition-all">
                Load More Stories
            </button>
        </div>
    </section>
    <!-- Right Sidebar: Trending & Who to Follow -->
    <aside class="hidden lg:block lg:col-span-3 space-y-12">
        @include('asides.trending')

        <x-recommended-authors title="Top Authors" count="2" />

        <x-widgets.newsletter>
            <p>Enter Your email</p>
            <x-slot:helper>
                <p class="font-metadata text-metadata text-on-primary-container">We care about your privacy. Unsubscribe
                    anytime.</p>
            </x-slot:helper>
        </x-widgets.newsletter>
    </aside>

    @section('nav')
    @parent
    <a class="text-on-surface-variant font-medium font-ui-label text-ui-label hover:text-primary transition-colors duration-200"
        href="#">FAQ</a>

    @endsection

</x-layout>
