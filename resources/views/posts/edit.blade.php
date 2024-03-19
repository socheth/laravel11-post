<x-adminlayout>
    <div class="py-12">
        <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="post" action="{{ route('post.update', $post) }}">
            @csrf
            @method('PUT')
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-900/10 p-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Edit Post</h2>
                    <label for="title"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Title</label>
                    <div class="mt-2">

                        <input type="text" name="title" id="title" value="{{ $post->title }}"
                            class="block w-full dark:text-white bg-transparent rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                    </div>
                    <label for="body"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Body</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="3"
                            class="block w-full dark:text-white bg-transparent rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $post->body }}</textarea>
                    </div>

                </div>
                <div class="m-6 flex items-center justify-center gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 dark:text-white">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </form>
    </div>
</x-adminlayout>
