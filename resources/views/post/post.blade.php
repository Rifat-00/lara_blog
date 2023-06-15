


@extends("welcome")
@section('content')

   

    <div class="w-4/6 items-center m-auto">
        
        

        <div class="dark:bg-gray-800 dark:text-gray-300 p-6 rounded-sm ">

            <h5 class="text-xl font-bold pb-3">{{ $post->title }}</h5>
            <p class="text-lg dark:text-gray-500">{{ $post->author }}</p>
            <p class="text-xs dark:text-gray-500">{{ $post->created_at }}</p>
            <p class="text-lg pt-3">{{ $post->content}}</p>
            <p class="pt-3"><a href="/homepage">go back&rarr;</a></p>
        </div>

        
        
    </div>

@endsection