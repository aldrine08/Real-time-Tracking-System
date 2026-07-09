<header class="bg-white shadow-sm">

    <div class="flex items-center justify-between px-6 py-4">

        <div>

            <h2 class="text-xl font-semibold">
                {{ $title ?? 'Dashboard' }}
            </h2>

        </div>

        <div class="flex items-center gap-4">

            <!-- Search -->

            <!-- Notifications -->

            <!-- User -->

        </div>

    </div>

    <div class="relative">

    <button class="relative">

        🔔

        <span
            class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1">
            0
        </span>

    </button>

</div>

<div class="flex items-center gap-3">

    <div class="text-right">

        <p class="font-medium">
            {{ auth()->user()->full_name }}
        </p>

        <p class="text-sm text-gray-500">
            {{ auth()->user()->role->name }}
        </p>

    </div>

</div>

</header>