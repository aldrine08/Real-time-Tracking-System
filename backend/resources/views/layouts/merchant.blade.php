<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'RealTrack' }}</title>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <x-navigation.sidebar />

        <div class="flex-1">

            <x-navigation.navbar />

            <main class="p-6">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>
</html>