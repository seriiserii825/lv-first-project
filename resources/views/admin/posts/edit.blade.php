<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PUT')
                <div>
                    <label class="block font-medium text-sm text-gray-700">Title:</label>
                    <input type="text" name="title" class="w-9/12" value="{{ $post->title }}"  autofocus />
                </div>
                <div>
                    <label class="block font-medium text-sm text-gray-700">Content:</label>
                    <textarea name="post_text" >{{ $post->post_text }}</textarea>
                </div>
                <div>
                    <label class="block font-medium text-sm text-gray-700">Category:</label>
                    <select name="category_id" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id === $post->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items center justify-between mt-4">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update</button>
                    <a href="{{ route('posts.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">Back</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
