<x-layout title="Notifications">

    <main class="pt-24 max-w-article-max mx-auto px-margin-mobile md:px-0 mt-12 mb-section-gap">
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="font-headline-md text-headline-md text-on-surface mb-2">Notifications</h1>
                <p class="font-metadata text-metadata text-secondary">Stay updated with your latest interactions and
                    community activity.</p>
            </div>
            <form method="POST" action="{{ route('dashboard.notifications.markAllRead') }}">
                @csrf
                @method('PATCH')

                <button
                    class="font-ui-label text-ui-label text-primary hover:underline underline-offset-4 flex items-center gap-2">
                    Mark all as read
                </button>
            </form>
              <form method="POST" action="{{ route('dashboard.notifications.markAllUnRead') }}">
                @csrf
                @method('PATCH')

                <button
                    class="font-ui-label text-ui-label text-primary hover:underline underline-offset-4 flex items-center gap-2">
                    Mark all as un read
                </button>
            </form>
        </div>
        <!-- Filter Tabs -->
        <div class="flex items-center gap-6 border-b border-outline-variant mb-10 overflow-x-auto no-scrollbar">
            <button
                class="font-ui-label text-ui-label pb-4 border-b-2 border-primary text-primary font-bold whitespace-nowrap">
                All
            </button>
            <button
                class="font-ui-label text-ui-label pb-4 text-secondary hover:text-on-surface transition-colors whitespace-nowrap">
                Responses
            </button>
            <button
                class="font-ui-label text-ui-label pb-4 text-secondary hover:text-on-surface transition-colors whitespace-nowrap">
                Mentions
            </button>
            <button
                class="font-ui-label text-ui-label pb-4 text-secondary hover:text-on-surface transition-colors whitespace-nowrap">
                Stats
            </button>
        </div>
        <!-- Notification Groups -->
        <div class="space-y-12">
            <!-- Today -->
            <section>
                <h2 class="font-ui-label text-ui-label text-secondary uppercase tracking-widest mb-6">Today</h2>
                <div class="space-y-0.5">
                    @foreach ($notifications as $notification)
                        <div
                            class="group relative flex items-start gap-4 p-4 -mx-4 rounded-lg hover:bg-surface-container-lowest transition-all cursor-pointer">

                            <!-- Avatar -->
                            <div class="relative">
                                <img class="w-10 h-10 rounded-full object-cover"
                                    src="{{ $notification->data['meta']['follower_avatar'] ?? asset('images/default-avatar.png') }}" />

                                <div
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-white rounded-full flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[14px] text-primary"
                                        style="font-variation-settings: 'FILL' 1;">
                                        favorite
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 min-w-0">
                                <p class="font-body-md text-on-surface leading-tight">
                                    {{ $notification->data['body'] }}
                                </p>

                                <span class="font-metadata text-metadata text-secondary mt-1 block">
                                    {{ $notification->created_at->diffForHumans() }}
                                </span>

                                <!-- ACTIONS -->
                                <div class="flex items-center gap-3 mt-2">

                                    <!-- MARK AS READ -->
                                    @if ($notification->unread())
                                        <form method="POST"
                                            action="{{ route('dashboard.notifications.read', $notification->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button class="text-green-500 text-sm hover:underline">
                                                Mark as read
                                            </button>
                                        </form>
                                    @endif

                                    <!-- MARK AS UNREAD -->
                                    @if ($notification->read_at)
                                        <form method="POST"
                                            action="{{ route('dashboard.notifications.unread', $notification->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button class="text-blue-500 text-sm hover:underline">
                                                Mark as unread
                                            </button>
                                        </form>
                                    @endif

                                    <!-- DELETE -->
                                    <form method="POST"
                                        action="{{ route('dashboard.notifications.destroy', $notification->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 text-sm hover:underline">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </div>

                            <!-- UNREAD DOT -->
                            <div class="pt-2">
                                @if ($notification->unread())
                                    <div class="active-dot"></div>
                                @endif
                            </div>

                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <!-- Loading Indicator / End of feed -->
        <div class="mt-16 flex flex-col items-center justify-center py-8 border-t border-outline-variant border-dashed">
            <span class="material-symbols-outlined text-secondary mb-2" data-icon="history_edu">history_edu</span>
            <p class="font-metadata text-metadata text-secondary">You're all caught up for the week.</p>
        </div>
    </main>

</x-layout>
