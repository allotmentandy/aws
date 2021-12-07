<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel using allotmentandy docker file</title>

        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="flex flex-col min-h-screen">

    <header class="bg-blue-400">
    <div class="container text-white mx-auto">
        <div class="">
            <h3>Allotmentandy</h3>
        </div>
    </div>
    </header>

    <div class="container p-2 mx-auto">
    <div class="flex flex-row flex-wrap py-4">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 p-4 bg-yellow-100 rounded-xl w-full">
                <p class="p-0 m-0">
                Tech Stack:

                Laravel
                PHP 
                Apache

                </p>
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            <h1 class="text-2xl" id="home">Main Content</h1>
            <p>Let's look at the base Tailwind classes that are used for this layout. There are 2 columns. The left sidebar (aside), and the main content area on the right. </p>
            <p class="pt-4"> The flexbox (parent) container: </p>
            <ul>
                <li><span class="text-purple-700">flex</span> - for <code>dislay:flex</code></li>
                <li>flex-row - for <code>flex-direction: row</code></li>
                <li>flex-wrap - for <code>flex-wrap: wrap</code></li>
                <li>py-4 - for <code>padding-(top|bottom): 1rem</code></li>
            </ul>
            <p class="pt-4"> The aside (left) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 33% width on sm and larger</li>
                <li>md:w-1/4 - for 25% width on md and larger</li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <p class="pt-4"> The main (right) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 66% width on sm and larger</li>
                <li>md:w-1/4 - for 75% width on md and larger</li>
                <li>pt-1 - for <code>padding-top: .25rem</code></li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <hr class="my-5">
            <p class="pt-4"> The flexbox (parent) container: </p>
            <ul>
                <li><span class="text-purple-700">flex</span> - for <code>dislay:flex</code></li>
                <li>flex-row - for <code>flex-direction: row</code></li>
                <li>flex-wrap - for <code>flex-wrap: wrap</code></li>
                <li>py-4 - for <code>padding-(top|bottom): 1rem</code></li>
            </ul>
            <p class="pt-4"> The aside (left) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 33% width on sm and larger</li>
                <li>md:w-1/4 - for 25% width on md and larger</li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <p class="pt-4"> The main (right) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 66% width on sm and larger</li>
                <li>md:w-1/4 - for 75% width on md and larger</li>
                <li>pt-1 - for <code>padding-top: .25rem</code></li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <hr class="my-5">
            <p class="pt-4"> The flexbox (parent) container: </p>
            <ul>
                <li><span class="text-purple-700">flex</span> - for <code>dislay:flex</code></li>
                <li>flex-row - for <code>flex-direction: row</code></li>
                <li>flex-wrap - for <code>flex-wrap: wrap</code></li>
                <li>py-4 - for <code>padding-(top|bottom): 1rem</code></li>
            </ul>
            <p class="pt-4"> The aside (left) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 33% width on sm and larger</li>
                <li>md:w-1/4 - for 25% width on md and larger</li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <p class="pt-4"> The main (right) column: </p>
            <ul>
                <li>w-full - for 100% width</li>
                <li>sm:w-1/3 - for 66% width on sm and larger</li>
                <li>md:w-1/4 - for 75% width on md and larger</li>
                <li>pt-1 - for <code>padding-top: .25rem</code></li>
                <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
            </ul>
            <hr class="my-5">
        </main>
    </div>
</div>
<footer class="bg-blue-400 mt-auto">
    <div class="container p-4 text-white mx-auto">
        <div class="p-4">
            <a href="">&copy;2021 Allotmentandy </a>
        </div>
    </div>
</footer>

    </body>
</html>
