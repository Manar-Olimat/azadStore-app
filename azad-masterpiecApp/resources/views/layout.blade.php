<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    @include('includes.head')
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')

@yield('content')

    @include('includes.footer')

</body>
</html>