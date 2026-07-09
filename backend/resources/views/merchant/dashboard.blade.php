<x-layouts.merchant title="Dashboard">

    <div class="space-y-6">

        <h1 class="text-3xl font-bold">

            Welcome back,
            {{ auth()->user()->first_name }}

        </h1>

        <p class="text-gray-600">

            Your logistics operations overview will appear here.

        </p>

    </div>

</x-layouts.merchant>