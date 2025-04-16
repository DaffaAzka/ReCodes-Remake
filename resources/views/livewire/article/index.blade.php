<div class="space-y-6" wire:init='setLoad'>
    @if ($load)

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach ($articles as $article)
                <div
                    class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white line-clamp-1">
                        {{ $article->title }}
                    </h3>
                    <p class="mt-1 text-xs font-medium uppercase text-gray-500 dark:text-neutral-500">
                        {{ $article->created_at->diffForHumans() }}
                    </p>
                    <p class="min-h-[3em] mt-2 text-gray-500 dark:text-neutral-400 line-clamp-2">
                        {{ strip_tags($article->content) }}
                    </p>
                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-purple-600 decoration-2 hover:text-purple-700 hover:underline focus:underline focus:outline-hidden focus:text-purple-700 disabled:opacity-50 disabled:pointer-events-none dark:text-purple-500 dark:hover:text-purple-600 dark:focus:text-purple-600"
                        href="{{ route('article.content', $article->slug) }}">
                        View Content
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </div>
            @endforeach

        </div>

        @if ($pages <= $sizes)
            <button wire:click='addPages' 
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border hover:text-white hover:bg-purple-600 border-purple-600 text-purple-600 hover:border-purple-500 focus:outline-hidden focus:border-purple-500 focus:text-purple-500 disabled:opacity-50 disabled:pointer-events-none dark:border-purple-500 dark:text-purple-500 dark:hover:text-white dark:hover:border-purple-400">Load
                More</button>
        @endif


        {{-- <div class="mt-4">
            {{ $articles->links('vendor.pagination.tailwind') }}
        </div> --}}
    @else
        <div class="animate-pulse">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach (range(1, 3) as $i)
                    <div
                        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">


                        <p class="h-4 bg-gray-200 rounded-full dark:bg-neutral-700" style="width: 40%;"></p>

                        <ul class="mt-5 space-y-3">
                            <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-neutral-700"></li>
                            <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-neutral-700"></li>
                            <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-neutral-700"></li>
                            <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-neutral-700"></li>
                        </ul>

                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- <x-utilities.loading /> --}}

    <div wire:loading wire:target='addPages'
        class="fixed inset-0 z-50 bg-gray-200/50 dark:bg-neutral-900/50 backdrop-blur-sm transition-all duration-200">
        <div class="w-full h-full flex items-center justify-center">
            <div class="animate-spin inline-block size-10 border-3 border-current border-t-transparent text-purple-600 rounded-full dark:text-purple-500"
                role="status" aria-label="loading">
            </div>
        </div>
    </div>
</div>
