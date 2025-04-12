<div class="container md:mx-auto py-4 space-y-6">

    <div class="px-4 space-y-6">
        <h1 class="text-3xl font-medium text-center dark:text-amber-50">Articles</h1>


        <div
            class="p-4 border border-gray-200 bg-white dark:border-neutral-500 dark:bg-neutral-800 dark:text-white text-center rounded-lg">
            <blockquote class="relative mx-6 my-2">
                <svg class="absolute -top-6 -start-8 size-16 text-gray-200 dark:text-neutral-700" width="16"
                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                        fill="currentColor"></path>
                </svg>

                <div class="relative z-10">
                    <p class="text-gray-800 sm:text-xl dark:text-white"><em>
                            Free speech is not just about the right to speak—it’s about the right to listen,
                            question, and think.</em></p>
                </div>
            </blockquote>
        </div>

    </div>

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
                        <p class="mt-2 text-gray-500 dark:text-neutral-400 line-clamp-2">
                            {{ $article->description }}
                        </p>
                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-purple-600 decoration-2 hover:text-purple-700 hover:underline focus:underline focus:outline-hidden focus:text-purple-700 disabled:opacity-50 disabled:pointer-events-none dark:text-purple-500 dark:hover:text-purple-600 dark:focus:text-purple-600"
                            href="{{ route('article.content', $article->slug) }}">
                            View Content
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
</div>
