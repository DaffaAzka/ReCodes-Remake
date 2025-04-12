<x-layouts.app>


    <div class="w-full h-[98vh] flex justify-center items-center">

        <div class="md:grid md:grid-cols-2 rounded-xl overflow-hidden shadow-2xl dark:shadow-2xs">

            <div
                class="flex flex-col mx-4 shadow-2xs rounded-xl bg-white dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-8 md:mx-0 md:rounded-none">

                <div class="flex items-center h-[90%]">
                    <div class="space-y-6 md:w-2xs lg:w-xs xl:w-md">
                        <h1 class="text-3xl text-center dark:text-amber-50 font-semibold">Recodes Remake</h1>

                        <p class="dark:text-white">ReCodes is a remake of my previous project - a full-featured social media
                            blogging platform built with modern web technologies. This platform provides users with a
                            complete blogging experience, including content creation, authentication, and interactive
                            features.

                        </p>

                        <a href="{{ route('login') }}"
                            class="w-full py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-purple-600 text-white hover:bg-purple-700 focus:outline-hidden focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition">
                            <span class="text-center w-full">Get Started</span>
                        </a>

                        <a href="https://github.com/DaffaAzka/ReCodes-Remake"
                            class="w-full py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none transition">
                            <span class="text-center w-full">Repository Link</span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="hidden md:block bg-cover bg-center h-[70vh] relative"
                style="background-image: url('{{ asset('storage/pattern.jpg') }}');">

            </div>

        </div>

    </div>





    <x-links-background />

</x-layouts.app>
