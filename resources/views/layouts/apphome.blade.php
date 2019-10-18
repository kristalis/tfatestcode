<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
                body{
                    background-color: rgba(52,144,220,.5);
                }                
    
                .content {
                    text-align: center;
                    padding-top: 10%;
                }
    
                .title {
                    font-size: 84px;
                }
    
                .subtitle {
                    font-size: 24px;
                    color: #636b6f;
                    padding: 0 25px;
                }
    
            
    
                .m-b-md {
                    margin-bottom: 30px;
                }
                .m-t-md {
                    margin-top: 30px;
                }



            </style>
</head>
<body >
    <div id="app">
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
