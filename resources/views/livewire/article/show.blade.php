<div class="">

    <div class="{{ $article->image ? '' : 'bg-neutral-950' }} p-4 h-[70vh] w-full relative">

        @if ($article->image)
        <div class="absolute inset-0 bg-black/10 bg-cover bg-center"
             style="background-image: url({{ asset('storage/image/article/'.$article->image) }})">
        </div>
        @endif

        <div class="absolute bottom-0 left-0 p-6 md:p-12 lg:p-40 space-y-4">
            <h1 class="font-semibold text-3xl text-amber-50">{{ $article->title }}</h1>
            <p class="font-medium text-md text-amber-50">{{ $article->description }}</p>

            <div class="inline-flex flex-warp gap-2">
                <div class="inline-flex flex-nowrap items-center bg-white border border-gray-200 rounded-full p-1.5 pe-3 dark:bg-neutral-900 dark:border-neutral-700">
                    <img class="me-1.5 inline-block size-6 rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Avatar">
                    <div class="whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">
                      Christina
                    </div>
                  </div>
            </div>
        </div>

    </div>


    <div class="container md:mx-auto py-4 space-y-6">



    </div>

</div>
