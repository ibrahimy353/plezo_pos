<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href= "/css/app.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-slate-800">

    <header class="bg-stone-200 shadow-lg space-x-4">
        <nav>
            <a href="" class="nav-link text-slate-900 ">Home</a>


            @auth
                <div class="relative grid place-items-center" x-data="{ open: false }">
                    {{-- Dropdown menu button --}}
                    <button @click="open = !open" type="button" class="round-btn">
                        <img src="https://picsum.photo/200" alt="">
                    </button>

                    {{-- Dropdown Menu --}}

                </div>
            @endauth

            @guest
                <div class>


                    <div class="flex items-center gap-4  justify-end">
                        <a href=" " class="nav-link  text-slate-900 ">Features</a>
                        <a href=" " class="nav-link  text-slate-900">Case Studies</a>
                        <a href=" " class="nav-link text-slate-900">Pricing</a>
                        <a href=" " class="nav-link text-slate-900">About Us</a>
                        <a href=" " class="nav-link text-slate-900">Contact Us</a>
                        <button class="border-solid border-2 px-2 border-violet-800  rounded-lg hover:bg-slate-100"><a
                                href=" " clss="nav-link">Book a
                                Free Demo</a></button>
                        <button class="bg-violet-800 px-3 rounded-lg  text-inherit hover:bg-slate-100"><a href=" "
                                clss="nav-link">Sign
                                Up</a></button>
                    </div>
                </div>
            @endguest
        </nav>
    </header>

    <main class="py-8 px-4 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>


</html>
