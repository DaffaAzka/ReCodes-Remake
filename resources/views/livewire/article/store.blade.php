<div class="flex justify-center">

    <form class="w-full p-4 md:max-w-7xl space-y-4" wire:submit.prevent='store'>


        <h1 class="text-2xl text-center dark:text-white font-semibold">Create Article</h1>

        <x-utilities.success />

        <div class="space-y-2">
            <input type="text" id="title" wire:model='title'
                class="block w-full p-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white"
                placeholder="Write article title" />
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <livewire:utilities.tooltip-editor />

        <div class="flex items-center justify-end">
            <button type="submit" wire:target='store'
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 dark:bg-purple-800 dark:hover:bg-purple-700 dark:focus:ring-purple-500">
                Create
            </button>
        </div>
    </form>

    <div wire:loading wire:target='store'
        class="fixed inset-0 z-50 bg-gray-200/50 dark:bg-neutral-900/50 backdrop-blur-sm transition-all duration-200">
        <div class="w-full h-full flex items-center justify-center">
            <div class="animate-spin inline-block size-10 border-3 border-current border-t-transparent text-purple-600 rounded-full dark:text-purple-500"
                role="status" aria-label="loading">
            </div>
        </div>
    </div>

</div>
