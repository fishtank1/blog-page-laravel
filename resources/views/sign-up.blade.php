<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500">

    @auth
    

    @else
    <div id="login-form" class="shadow-2xl bg-white w-96 m-auto my-28 rounded-md">
        <h3 class="text-4xl font-bold p-5 text-center">Register</h3>
        <hr>
        <form action="/register" method="POST">
            @csrf
            <div id="mail-pass-container" class="flex-col flex-wrap p-5">
                <div id="user-name-box" class="">
                    <label for="name">Username</label><br> 
                    <input type="text" id="name" name="name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="Example User Name"><br>
                </div>

                <div id="email-box" class="my-3">
                    <label for="email">Email</label><br> 
                    <input type="email" id="email" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com"><br>
                </div>

                <div id="pass-box" class="my-3">
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>

                <div id="login-btn" class="m-auto self-center justify-self-center">
                    <button type="submit" class="shadow-md mt-8 font-medium outline p-2 w-full outline-green-600 rounded-lg text-white bg-green-600 focus:bg-green-500 focus:outline-green-500">Register</button>
                </div>

                <div id="sign-up-section">
                    <p class="text-center text-sm my-10 ">Already a Laravel user? Click Sign in below to login.</p>
                    <a href="/sign-in"><button type="button" class="shadow-md mt-0 font-medium outline p-2 w-full outline-blue-600 rounded-lg text-white bg-blue-600 focus:bg-blue-500 focus:outline-blue-500">Sign in</button></a>
                </div>
            </div>
        </form>
    </div>

    @endauth

</body>
</html>