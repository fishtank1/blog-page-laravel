<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500">

@auth

    <div class="mt-20">
        <form action="/create-post" method="POST" class="md:container bg-white m-auto p-10 text-center">
            @csrf
            <p class="text-center text-2xl font-bold">Create a New Post</p>
            <hr class="my-5">
            <div class="mt-10">
                <label for="title" class="text-sm font-bold">Title</label><br>
                <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-1/2 rounded-sm sm:text-sm focus:ring-1" placeholder="My Blog Title">
            </div>
            <div class="mt-5">
                <label for="body" class="text-sm font-bold">Content</label><br>
                <textarea class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-1/2 rounded-sm sm:text-sm focus:ring-1" name="body" id="body" cols="130" rows="10" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."></textarea>
            </div>
            <button class="shadow-md mt-8 font-medium outline p-2 w-1/2 outline-green-600 rounded-lg text-white bg-green-600 focus:bg-green-500 focus:outline-green-500">Save Post</button>
        </form>
    </div>

    <div class="mt-20 md:container bg-white m-auto p-10">
    <p class="text-center text-2xl font-bold">All posts.</p>
    @foreach($posts as $post)
    <div class="mt-5 md:container bg-white m-auto p-10 border-2">
        <h3 class="text-left text-2xl font-bold">{{$post['title']}}<span class="text-sm font-light font italic"> by {{$post->user->name}}</span></h3>
        <hr>
        <div class="block mt-2">
            {{$post['body']}}
        </div>
        <div>
            <a href="/edit-post/{{$post->id}}"><button class="inline-block mr-2 shadow-md mt-8 font-medium outline p-2 w-16 outline-blue-600 rounded-lg text-white bg-blue-600 focus:bg-blue-500 focus:outline-blue-500">Edit</button></a>
            <form class="inline-block" action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="shadow-md mt-8 font-medium outline p-2 w-16 outline-red-600 rounded-lg text-white bg-red-600 focus:bg-red-500 focus:outline-red-500">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    </div>

    <div class="mx-auto w-fit mt-20">
        <form action="/logout" method="POST">
            @csrf
            <button class="shadow-md mt-0 font-medium outline p-2 outline-red-600 rounded-lg text-white bg-red-600 focus:bg-red-500 focus:outline-red-500">Logout</button>
        </form>
    </div>

@else
    <div id="login-form" class="shadow-2xl bg-white w-96 m-auto my-28 rounded-md">
        <h3 class="text-4xl font-bold p-5 text-center">Login</h3>
        <hr>
        <form action="/login" method="POST">
        @csrf
            <div id="mail-pass-container" class="flex-col flex-wrap p-5">
                <div id="user-name-box" class="">
                    <label for="loginname">Username</label><br> 
                    <input type="text" id="loginname" name="loginname" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="Example User Name"><br>
                </div>

                <div id="email-box" class="my-3">
                    <label for="loginemail">Email</label><br> 
                    <input type="email" id="loginemail" name="loginemail" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com"><br>
                </div>

                <div id="pass-box" class="my-3">
                    <label for="loginpassword">Password</label><br>
                    <input type="password" id="loginpassword" name="loginpassword" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-full rounded-md sm:text-sm focus:ring-1" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>

                <div class="flex justify-between">
                    <div class="mt-3">
                        <input type="checkbox" id="remember-pass" name="remember-pass">
                        <label for="remember-pass">Remember me</label><br>
                    </div>
                    <div class="mt-3">
                        <p class="text-red-600 font-medium cursor-pointer">Forgot password?</p>
                    </div>
                </div>

                <div id="login-btn" class="m-auto self-center justify-self-center">
                    <button type="submit" class="shadow-md mt-8 font-medium outline p-2 w-full outline-green-600 rounded-lg text-white bg-green-600 focus:bg-green-500 focus:outline-green-500">Login</button>
                </div>

                <div id="sign-up-section">
                    <p class="text-center text-sm my-10">New to Laravel? Click Sign up below to register.</p>
                    <a href="/sign-up"><button type="button" class="shadow-md mt-0 font-medium outline p-2 w-full outline-blue-600 rounded-lg text-white bg-blue-600 focus:bg-blue-500 focus:outline-blue-500">Sign up</button></a>
                </div>
            </div>
        </form>
    </div>

@endauth
    
</body>
</html>