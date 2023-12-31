<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>
    <!-- Links  css and js files -->
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Header section  -->
   
    @include('partials._nav')

    <!-- Main section  -->
    <main class="antialiased w-full min-h-screen bg-white/80 px-6 py-8">
        {{ $slot }}
    </main>

    <!-- Footer section  -->
  
    @include('partials._footer')

    <!-- Flash message -->
    <x-flash />
</body>

</html>