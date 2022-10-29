<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title', config('app.name', 'new page') )</title>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">

        <style type="text/css">
            .bd-callout {
                padding: 1.25rem;
                margin-top: 1.25rem;
                margin-bottom: 1.25rem;
                border: 1px solid #eee;
                border-left-width: .25rem;
                border-radius: .25rem
            }

            .bd-callout h4 {
                margin-top: 0;
                margin-bottom: .25rem
            }

            .bd-callout p:last-child {
                margin-bottom: 0
            }

            .bd-callout code {
                border-radius: .25rem
            }

            .bd-callout+.bd-callout {
                margin-top: -.25rem
            }

            .bd-callout-info {
                border-left-color: #5bc0de
            }

            .bd-callout-info h4 {
                color: #5bc0de
            }

            .bd-callout-warning {
                border-left-color: #f0ad4e
            }

            .bd-callout-warning h4 {
                color: #f0ad4e
            }

            .bd-callout-danger {
                border-left-color: #d9534f
            }

            .bd-callout-danger h4 {
                color: #d9534f
            }

            .bd-callout-primary{
                border-left-color: #007bff
            }

            .bd-callout-primaryh4 {
                color: #007bff
            }

            .bd-callout-success{
                border-left-color: #28a745
            }

            .bd-callout-successh4 {
                color: #28a745
            }

            .bd-callout-default{
                border-left-color: #6c757d
            }

            .bd-callout-defaulth4 {
                color: #6c757d
            }
        </style>
    </head>
    <body>
        <div id="app">
