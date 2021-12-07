<!doctype html>

<title>Blog by Joel Dettinger</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/blog">
                    <img src="./images/logo_transparent.png" alt="Joel Dettinger Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        @admin
                        <x-dropdown-item href="/blog/admin/posts" :active="request()->is('admin/posts')">
                            Dashboard
                        </x-dropdown-item>

                        <x-dropdown-item href="/blog/admin/posts/create" :active="request()->is('admin/posts/create')">
                            New Post
                        </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/blog/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/blog/register"
                        class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                        Register
                    </a>

                    <a href="/blog/login"
                        class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                        Log In
                    </a>
                @endauth

            </div>
        </nav>

        {{ $slot }}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">

            <div class="mt-10">
                <p class="font-bold text-3xl">
                    Github Repository
                </p>
                <div class="relative inline-block mx-auto ">
                        <a href="https://github.com/dettinjo/laravel-blog">
                            <img src="./images/github-logo.png" alt="Github Logo" width="50" height="50" >
                        </a>
                </div>
                <p class="font-bold mt-10">
                    Joel Dettinger - B00484071
                </p>
            </div>
        </footer>
    </section>
    <x-flash />
</body>
