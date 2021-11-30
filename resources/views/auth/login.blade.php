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
    <div class="p-20 h-screen w-screen flex flex-col md:flex-row items-center justify-center bg-gray-100 ">
        <div class="content text-3xl text-center md:text-left lg:mx-48">
            <h1 class="font-bold text-blue-500 text-5xl">Facebook</h1>
            <p class="text-black text-2xl">facebook helps you conect and share with the people in your life</p>
    
        </div>
            <div class="container mx-auto flex flex-col items-center">
                <form class="bg-white w-96 mx-auto rounded-lg my-20 px-4 py-4 shadow-xl ">
                    <input type='text' placeholder="Email or Phone Number"
                        class="w-full mb-3 px-4 py-3 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" />
                    <input type='text' placeholder="Password"
                        class="w-full mb-3 px-4 py-3 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" />
                    <button class="text-white py-3 rounded-lg font-bold text-xl tracking-wider w-full"
                        style="background-color:#1977f2;">Log In</button>
                    <div class="flex justify-center my-4">
                        <a class="text-blue-500 text-sm" href="#">Forgotten password?</a>
                    </div>
                    <hr />
                    <div class="flex justify-center my-6">
                        <button class="text-white h-12 rounded px-6 font-bold" style="background-color:#54b72b">Create
                            new Account </button>
                    </div>
                </form>
                <p class="text-center text-sm">
                    <span class="font-semibold text-center w-full">Create a Page</span> for a celebrity, band or business
                </p>
            </div>
        </div>
    </div>
</body>
</html>