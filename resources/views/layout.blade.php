<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>@yield('title','No Title')</title>
    <style>
        .dark {
            color: red;
        }

        .light {
            color: blue;
        }
    </style>
</head>

<body class="{{$theme}}" style='height:400px;'>

    @include('components.header')
    @yield('content')


    @if($footer)
    @include('components.footer')
    @endif

</body>

</html>