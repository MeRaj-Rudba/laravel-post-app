<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/f5fe0fd8cf.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class=" w-full">
        <div class="row my-2">
            <div class=" flex justify-between p-5 px-10 align-items-center mx-auto border-b ">
                <div class=" px-5">
                    <h2 class="text-cyan-600 text-2xl font-bold">@yield('heading')</h2>
                </div>
                <div class="">
                    <a href="@yield('link')"
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">@yield('link_text')</a>
                </div>

            </div>
        </div>



        @yield('content')


    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>

</html>
