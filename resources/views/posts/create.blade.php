<x-adminlayout>
    <div class="py-12">
        <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="post" action="{{ route('post.store') }}">
            @csrf

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="border-b border-gray-900/10 p-6">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Create New Post</h2>
                    <label for="title"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Title</label>
                    <div class="mt-2">

                        <input type="text" name="title" id="title"
                            class="block w-full dark:text-white bg-transparent rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                    </div>
                    <label for="body"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Body</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="3"
                            class="block w-full dark:text-white bg-transparent rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>

                </div>
                <div class="m-6 flex items-center justify-center gap-x-6">
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button class="m-4">{{ __('Save') }}</x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-adminlayout>
