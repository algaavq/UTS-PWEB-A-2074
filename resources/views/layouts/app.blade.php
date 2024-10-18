<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-[100vh] w-[100vw] bg-[#7677a3] flex justify-center items-center  overflow-x-hidden">
        @yield('content')
    </div>
</body>
</html>