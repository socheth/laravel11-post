<x-adminlayout>
    <div class="flex justify-center items-center min-h-screen">
        <form class="" method="post" action="{{ route('post.update', $post) }}">
            @csrf
            @method('PUT')

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Edit Post</h2>
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                        <input type="text" name="title" id="title" value="{{ $post->title }}"
                            class="block w-full dark:text-white border-0 bg-transparent py-1.5 pl-1 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                <div class="mt-2">
                    <textarea id="body" name="body" rows="3"
                        class="block w-full dark:text-white bg-transparent rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $post->body }}</textarea>
                </div>

            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

</x-adminlayout>
