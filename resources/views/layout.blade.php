<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewprot" content="width=device-width, intial-scale=1">
        <title>Todo App</title>
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex h-screen" id="app">
            <div class="w-1/4
                border-r-2 border-gray-600 bg-gray-100 text-gray-800
                p-5">
                <h6 class="font-bold text-3xl">
                    Todo Application
                </h6>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/project">Project</a>
                    </li>
                    <li>
                        <a href="/task">Task</a>
                    </li>
                    <li>
                        <a href="/reminder">Reminder</a>
                    </li>
                </ul>
            </div>
            <div class="w-3/4 p-5">
                @yield('content')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
