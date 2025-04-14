<div class="" wire:init='setLoad'>
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

        <div class="mt-4">
            {{ $articles->links('vendor.pagination.tailwind') }}
        </div>
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

</div>
