<div class="dark:bg-neutral-950 h-screen pattern-bg bg-cover bg-center">

    <div class="w-full h-[98vh] flex justify-center items-center">

        <div class="md:grid md:grid-cols-2 rounded-xl overflow-hidden shadow-2xl dark:shadow-2xs">

            <div
                class="flex flex-col mx-4 shadow-2xs rounded-xl bg-white dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-8 md:mx-0 md:rounded-none">

                <div class="flex items-center h-[90%]">
                    <form action="" wire:submit.prevent="login" class="space-y-6 md:min-w-2xs lg:min-w-xs xl:min-w-md">
                        <h1 class="text-3xl text-center dark:text-amber-50 font-semibold">Login</h1>

                        <div class="space-y-2">
                            <div class="relative">
                                <input wire:model='email' type="email"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg sm:text-sm focus:border-purple-500 focus:rinpurpleue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Email">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>

                            @error('email')
                                <p class="text-sm text-red-600" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="space-y-2">
                            <div class="relative">
                                <input wire:model='password' type="password"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg sm:text-sm focus:border-purple-500 focus:rinpurpleue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter password">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
                                        <circle cx="16.5" cy="7.5" r=".5"></circle>
                                    </svg>
                                </div>
                            </div>

                            @error('password')
                                <p class="text-sm text-red-600" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-purple-600 text-white hover:bpurpleue-700 focus:outline-hidden focuspurplepurple-700 disabled:opacity-50 disabled:pointer-events-none">
                            <span class="text-center w-full">Submit</span>
                        </button>

                        <p class="text-center dark:text-white"><a href="" class="">Don't have an account?
                                <span class="text-purple-500 animate-pulse">Click here!</span></a></p>

                    </form>
                </div>

            </div>

            <div class="hidden md:block bg-cover bg-center h-[70vh] relative" style="background-image: url('{{ asset('storage/pattern.jpg') }}');">

            </div>

        </div>

    </div>


</div>
