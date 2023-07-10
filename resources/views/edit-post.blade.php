<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-left text-2xl font-bold w-fit m-auto mt-20">Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST" class="w-fit m-auto">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="text-sm font-bold block my-1 mt-5">Title</label>
            <input type="text" name="title" value="{{$post->title}}" type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 w-1/2 rounded-sm sm:text-sm focus:ring-1">
        </div>
        <div>
            <label for="body" class="text-sm font-bold block my-1 mt-5">Content</label>
            <textarea name="body" id="body" cols="130" rows="10" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 rounded-sm sm:text-sm focus:ring-1">
                {{$post->body}}
            </textarea>
        </div>
        <button class="shadow-md mt-8 font-medium outline p-2 w-fit outline-green-600 rounded-lg text-white bg-green-600 focus:bg-green-500 focus:outline-green-500">Save Changes</button>
    </form>
</body>
</html>