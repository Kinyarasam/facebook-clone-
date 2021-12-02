<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>facebook - login or Sign up</title>
    </head>
    <body>        
        <div class="bg-gray-300 min-h-screen w-full">
            {{-- <div id="content">
                <router-view></router-view>
            </div> --}}

        </div>
        <script src="{{asset('js/app.js')}}" ></script>
   </body>
</html>
