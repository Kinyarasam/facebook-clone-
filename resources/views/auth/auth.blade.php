<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>facebook - login or Sign up</title>
</head>
<body>
    <div id="app">
        <router-view></router-view>
        <div >
            <p>
                <button class="p-2 m-24 mt-2 mb-2 rounded shadow-lg text-white w-24 bg-gray-500">
                    <router-link to="/login">Login</router-link>
                </button>
            </p>
            Hey there
        </div>

    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

