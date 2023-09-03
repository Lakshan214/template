<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Argon Dashboard 2 PRO by Creative Tim
    </title>


    @include('libraries.styles')

</head>

<body class="g-sidenav-show   bg-gray-100">



    @include('components.saidbar')


    @include('components.navbar')


    {{ $content ?? ''}}


    @include('components.footer')

    @include('components.configurator')

    @include('libraries.script')

</body>

</html>
