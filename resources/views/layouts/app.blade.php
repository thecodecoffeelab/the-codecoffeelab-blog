<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'TheCodeCoffeeLab Blog' }}</title>
    <meta name="author" content="TheCodeCoffeeLab">
    <meta name="description" content="{{ $metaDescription }}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="icon" href="https://www.thecodecoffeelab.com/./img/favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        pre {
            padding: 1rem;
            background-color: #1a202c;
            color: white;
            border-radius: 0.5rem;
            margin-bottom:1rem;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 font-family-karla">
    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-gray-900 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
  <style>
  #dec{
    text-decoration:none;
    color: #d7caca;
    font-weight:bold;
    font-size:18px;
  }
</style>
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a id="dec" class="hover:text-gray-200 hover:underline px-4" href="/"">Home</a></li>
                    <li><a id="dec" class="hover:text-gray-200 hover:underline px-4" href="https://thecodecoffeelab-videos-channel.netlify.app/" taget="_blank">SUBSCRIBE</a></li>
                    <li><a id="dec" class="hover:text-gray-200 hover:underline px-4" href="https://thecodecoffeelab-chat.netlify.app/" taget="_blank">Chat Discord Community</a></li>
                    <li><a id="dec" class="hover:text-gray-200 hover:underline px-4" href="https://thecodecoffeelab-chatgpt3-ai.vercel.app/" taget="_blank">Chat GPT-3</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="https://www.facebook.com/thecodecoffeelab" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="https://www.instagram.com/thecodecoffeelab/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="https://twitter.com/codecoffeelab_" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="https://www.linkedin.com/in/thecodecoffeelab/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-6">
        <img src="https://www.thecodecoffeelab.com/img/logo-white.png" width="100" height="100" alt="logo"/>
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-3xl love" href="{{route('home')}}">
             The Code Coffee Lab Blog
            </a>
            <p class="text-lg text-gray-600">
            by Mohamed NDIAYE | Software Engineer <i class="fa-solid fa-laptop fa-beat text-[20px] text-grey-600"></i>
            </p>
            <p class="text-md text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header') }}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-300" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <style>
            .hov{
                color:#b92b27;
            }
        </style>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="{{route('home')}}" class="hov hover:text-black rounded py-2 px-4 mx-2">Home</a>
                @foreach($categories as $category)
                    <a href="{{route('by-category', $category)}}" class="hov hover:text-black rounded py-2 px-4 mx-2">{{$category->title}}</a>
                @endforeach
                <a href="{{route('about-us')}}" class="hov hover:text-black rounded py-2 px-4 mx-2">About Me</a>
            </div>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}

    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <style>
                .love{
                   color:#b92b27;
                   font-weight: bold;
                  }
            </style>
            <div class="uppercase">&copy; 2023 <a href="https://www.thecodecoffeelab.com" class="love" target="_blank"> <i class="fa-solid fa-heart fa-beat text-[20px] text-rose-600"></i> THE CODE COFFEE LAB</a>. All rights reserved.</div>
        </div>
    </footer>

</body>
</html>
