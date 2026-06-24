<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Role Management - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&amp;family=Instrument+Serif:ital@0;1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6200EE", // Electric Violet equivalent
                        "on-primary": "#FFFFFF",
                        secondary: "#03DAC6",
                        surface: "#FFFFFF",
                        "on-surface": "#1C1B1F",
                        "on-surface-variant": "#49454F",
                        "outline-variant": "#CAC4D0",
                        "primary-container": "#EADDFF",
                        "on-primary-container": "#21005D",
                        "inverse-on-surface": "#F4EFF4",
                        background: "#FAFAFA",
                        "on-background": "#1C1B1F"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        headline: ["Instrument Serif", "serif"],
                        display: ["Public Sans", "sans-serif"],
                        body: ["Public Sans", "sans-serif"],
                        label: ["Public Sans", "sans-serif"]
                    },
                    spacing: {
                        'gutter': '1.5rem',
                        'container-max': '1280px',
                        'section-gap': '4rem'
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .serif-heading {
            font-family: 'Instrument Serif', serif;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .role-card:hover .action-btns {
            opacity: 1;
            transform: translateY(0);
        }

        .action-btns {
            opacity: 0;
            transform: translateY(4px);
            transition: all 0.2s ease;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body antialiased">
    <!-- TopNavBar (Shared Component JSON Mapping) -->
    <header class="bg-surface border-b border-outline-variant fixed top-0 w-full z-50">
        <nav class="flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-16">
            <div class="flex items-center gap-8">
                <span class="font-display text-2xl font-bold text-on-surface tracking-tighter">Ink &amp; Paper</span>
                <div class="hidden md:flex items-center gap-6">
                    <a>Dashboard</a>
                    <a>Users</a>
                    <a class="text-primary font-bold border-b-2 border-primary pb-1">
                        Roles
                    </a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-on-surface-variant hover:bg-black/5 rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="p-2 text-on-surface-variant hover:bg-black/5 rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="bookmark">bookmark</span>
                </button>
                <div
                    class="h-8 w-8 rounded-full bg-primary-container flex items-center justify-center overflow-hidden ml-2 border border-outline-variant">
                    <img class="w-full h-full object-cover"
                        data-alt="A professional studio portrait of a modern digital administrator in a minimalist setting. Soft natural lighting, clean aesthetic, blurred background with hints of a high-end office environment. High resolution and sophisticated corporate photography style."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGaFykIIuB32z5pKkA7sKBLh4_xLbFgOaKQAoNRPjxai_TkXUTaKAo81J_27z0w3739oYSnwo5b0hPY3PNnpxsSo47YsBjgtm0KOpboRgzD8SOIEG19EoYXajLvDj2V3FMN0L7S0-b7xlorNgYXgGe4iXzuOHakTlWBYwVmBBe9s39WE5CokdnmXBaN5Ya_aWGIJqu8_qSIIUTIXo-7uSkMwS7k8YM-zXw4PKjWxO8HyT9mwCx-au0yRB78vF9jfCo-H6h4HtOVm0v" />
                </div>
            </div>
        </nav>
    </header>
    <main class="pt-24 pb-16 px-gutter max-w-container-max mx-auto min-h-screen">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <div>
                <nav class="flex text-sm text-on-surface-variant mb-4 gap-2 items-center">
                    <span>Dashboard</span>
                    <span class="material-symbols-outlined text-xs" data-icon="chevron_right">chevron_right</span>
                    <span class="text-primary font-medium">Role Management</span>
                </nav>
                <h1 class="serif-heading text-5xl md:text-7xl font-light text-on-surface tracking-tight">Role Management
                </h1>
                <p class="text-on-surface-variant mt-4 max-w-xl text-lg">Manage roles and permissions for system users.
                </p>
            </div>
            <a href="{{ route('roles.index') }}"
                class="bg-primary text-white px-8 py-4 rounded-full font-bold flex items-center gap-2 shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all">

                <span class="material-symbols-outlined">add</span>
                Create Role
            </a>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Roles Grid (Left Column) -->
            <div class="lg:col-span-7 space-y-4">

                @foreach ($roles as $role)
                    <div class="role-card group glass-panel p-6 rounded-2xl flex flex-col gap-4 hover:shadow-xl">

                        <div class="flex justify-between items-start">

                            <div class="flex items-center gap-4">
                                <div class="p-3 bg-primary/10 text-primary rounded-xl">
                                    <span class="material-symbols-outlined">
                                        verified_user
                                    </span>
                                </div>

                                <div>
                                    <h3 class="text-xl font-bold">
                                        {{ $role->name }}
                                    </h3>

                                    <span class="text-xs uppercase">
                                        {{ count($role->abilities ?? []) }} Permissions
                                    </span>
                                </div>
                            </div>

                            <div class="action-btns flex gap-2">

                                <!-- Edit -->
                               <a href="{{ route('roles.index', ['edit' => $role->id]) }}"
   class="p-2 hover:bg-black/5 rounded-lg text-on-surface-variant transition-colors">

    <span class="material-symbols-outlined">
        edit
    </span>

</a>

                                <!-- Delete -->
                                <form action="{{ route('roles.destroy', $role) }}" method="POST"
                                    onsubmit="return confirm('Delete this role?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="p-2 hover:bg-red-50 rounded-lg text-red-500 transition-colors">

                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>

                                    </button>

                                </form>

                            </div>

                        </div>

                        <div class="flex flex-wrap gap-2 mt-2">
                            @forelse($role->abilities ?? [] as $ability)
                                <span class="px-3 py-1 bg-surface border rounded-full text-xs">
                                    {{ config('abilities')[$ability] ?? $ability }}
                                </span>
                            @empty
                                <span class="text-red-500 text-xs">No Permissions</span>
                            @endforelse
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="lg:col-span-5">

                <div class="glass-panel sticky top-24 rounded-3xl p-8 shadow-2xl">

                    <h2 class="text-2xl font-bold mb-6">Create Role</h2>

                    <form method="POST"
                        action="{{ $editRole ? route('roles.update', $editRole) : route('roles.store') }}"
                        class="space-y-5">
                        @csrf
                        @if ($editRole)
                            @method('PUT')
                        @endif

                        <input type="text" name="name" value="{{ $editRole->name ?? '' }}"
                            class="w-full mt-2 px-4 py-3 rounded-xl border" placeholder="Enter role name">
                        <label class="block mb-2 font-bold">Abilities</label>

                        @foreach (config('abilities') as $key => $label)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="abilities[]" value="{{ $key }}"
                                    @checked($editRole && in_array($key, $editRole->abilities ?? []))>

                                <span>{{ $label }}</span>
                            </label>
                        @endforeach

                       <button class="w-full bg-primary text-white py-3 rounded-xl font-bold">
    {{ $editRole ? 'Update Role' : 'Create Role' }}
</button>

                    </form>

                </div>

            </div>


        </div>
        <!-- Permission Editor (Right Column / Simulated Modal Panel) -->
        </div>
    </main>
    <!-- Footer (Shared Component JSON Mapping) -->
    <footer class="bg-surface border-t border-outline-variant">
        <div
            class="w-full py-section-gap px-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex flex-col items-center md:items-start gap-4">
                <span class="text-2xl font-headline font-bold text-on-surface">Ink &amp; Paper</span>
                <p class="text-secondary font-metadata text-sm text-center md:text-left max-w-xs">© 2024 Ink &amp;
                    Paper Platform. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                <a class="text-secondary font-medium hover:text-on-surface underline transition-all"
                    href="#">About</a>
                <a class="text-secondary font-medium hover:text-on-surface underline transition-all"
                    href="#">Privacy</a>
                <a class="text-secondary font-medium hover:text-on-surface underline transition-all"
                    href="#">Terms</a>
                <a class="text-secondary font-medium hover:text-on-surface underline transition-all"
                    href="#">API</a>
                <a class="text-secondary font-medium hover:text-on-surface underline transition-all"
                    href="#">Help</a>
            </div>
            <div class="flex gap-4">
                <button
                    class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-white transition-all group">
                    <span class="material-symbols-outlined text-sm" data-icon="share">share</span>
                </button>
                <button
                    class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                    <span class="material-symbols-outlined text-sm" data-icon="language">language</span>
                </button>
            </div>
        </div>
    </footer>
    <!-- Micro-interactions Script -->
    <script>
        // Smoothly handle role card focus state logic
        const roleCards = document.querySelectorAll('.role-card');
        const editorHeading = document.querySelector('.lg\\:col-span-5 .text-primary');
        const roleInput = document.querySelector('input[type="text"][value="Editor"]');

        roleCards.forEach(card => {
            card.addEventListener('click', () => {
                // Visual feedback for selection
                roleCards.forEach(c => {
                    c.classList.remove('border-primary', 'shadow-sm');
                    c.classList.add('glass-panel');
                });
                card.classList.remove('glass-panel');
                card.classList.add('border-primary', 'shadow-sm');

                // Update simulated editor state
                const roleName = card.querySelector('h3').innerText;
                editorHeading.innerText = `ROLE: ${roleName.toUpperCase()}`;
                roleInput.value = roleName;

                // Animate entry of panel content
                const panel = document.querySelector('.lg\\:col-span-5 > div');
                panel.style.transform = 'scale(0.98)';
                setTimeout(() => panel.style.transform = 'scale(1)', 100);
            });
        });
    </script>
</body>

</html>
