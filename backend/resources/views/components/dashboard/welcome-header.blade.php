@php
    $hour = now()->format('H');

    if ($hour < 12) {
        $greeting = 'Good Morning';
    } elseif ($hour < 17) {
        $greeting = 'Good Afternoon';
    } else {
        $greeting = 'Good Evening';
    }

    $user = auth()->user();

    $userName = $user
        ? trim(($user->first_name ?? '') . ' ' . ($user->last_name ?? ''))
        : 'Guest';

    if (empty(trim($userName))) {
        $userName = $user->name ?? 'Guest';
    }

    $companyName = $user?->company?->name ?? 'RealTrack Logistics';

    $today = now()->format('l, d F Y');
@endphp

<div
    class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8">

    <div
        class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

        <div>

            <p class="text-sm uppercase tracking-wider text-blue-600 font-semibold">
                Merchant Dashboard
            </p>

            <h1 class="mt-2 text-3xl font-bold text-gray-900">
                {{ $greeting }}, {{ $userName }}
            </h1>

            <p class="mt-3 text-gray-600 max-w-2xl">
                Welcome back to <strong>RealTrack</strong>.
                Here's an overview of today's logistics operations for your company.
            </p>

        </div>

        <div
            class="bg-gray-50 rounded-xl border border-gray-200 px-6 py-4 min-w-[260px]">

            <div class="space-y-3">

                <div>

                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Company
                    </p>

                    <p class="font-semibold text-gray-800">
                        {{ $companyName }}
                    </p>

                </div>

                <div>

                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Today
                    </p>

                    <p class="font-semibold text-gray-800">
                        {{ $today }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>