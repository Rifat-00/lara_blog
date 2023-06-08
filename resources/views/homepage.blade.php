
@use Illuminate\Support\Str;

@extends("welcome")
@section('content')

   

    <div class="grid grid-cols-3 gap-4">
        
        
        @foreach ($posts as $post)

        <div class="dark:bg-gray-800 dark:text-gray-300 p-6 rounded-sm">

            <h5 class="text-xl font-bold pb-3">{{ $post->title }}</h5>
            <p class="text-lg dark:text-gray-500">{{ $post->author }}</p>
            <p class="text-xs dark:text-gray-500">{{ $post->created_at }}</p>
            <p class="text-lg pt-3">{{ Str::words($post->content, $words = 20, $end = '...') }}
            </p>
            <p class="pt-3"><a href="post/{{ $post->id }}">read more&rarr;</a></p>
        </div>

        @endforeach
        
    </div>

@endsection