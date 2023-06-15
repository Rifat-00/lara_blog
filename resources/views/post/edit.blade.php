<x-app-layout>
<div class="p-10 w-4/6 m-auto">
    <p class="text-xl pb-3">Update a post</p>
    <form method="POST" action="/post" >
        @csrf
        
        <!-- Post Title -->
        <div>
            <x-input-label class="dark:text-gray-400" for="title" value="Title"/>
            <x-text-input value="{{ $post->title }}" id="title" class="block mt-1 w-full" type="text" name="title"
                 required autofocus/>
        </div>

        <!-- Author -->
        <div class="pt-3">
            <x-input-label class="dark:text-gray-400" for="author" value="Author"/>
            <x-text-input value="{{ $post->author }}" id="author" class="block mt-1 w-full" type="text" name="author"
                 required autofocus  autocomplete="username"/>
        </div>

        <!-- Content -->
        <div class="pt-3">
            <x-input-label class="dark:text-gray-400" for="content" value="Content"/>
            <x-text-input value="{{ $post->content }}" id="author" class="block mt-1 w-full" type="text" name="content"
                 required autofocus  autocomplete="username"/>
        </div>

       
       

        

            <x-primary-button class=" mt-3 dark:bg-gray-700">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-app-layout>