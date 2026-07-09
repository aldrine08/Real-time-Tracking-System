<aside class="w-72 bg-gray-900 text-white min-h-screen flex flex-col">

    <div class="p-6 border-b border-gray-800">
        <h1 class="text-2xl font-bold text-blue-500">
            RealTrack
        </h1>

        <p class="text-sm text-gray-400">
            Powered by WRLD SOLUTIONS
        </p>
    </div>

    @if(auth()->user()->role->name === \App\Enums\RoleType::SUPER_ADMIN->value)
    <!-- Administration Links -->
@endif

    <nav class="flex-1 overflow-y-auto px-4 py-6">

        <!-- Dashboard -->
        <a href="#"
           class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-gray-800">

            Dashboard

        </a>

        <!-- Operations -->

        <!-- Fleet -->

        <!-- Warehouse -->

        <!-- Reports -->

    </nav>

</aside>