<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9usAa3IW2lEnf3lGY6i7IjLaIkgydECvWBvyI+3A6rjrUycLvaZ4KApJJsdp6rvVqQgtKaLLAV1z/38Li7l+09g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    @include('components.landing.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.landing.footer')






</body>

</html>