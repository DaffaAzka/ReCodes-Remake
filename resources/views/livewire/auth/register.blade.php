<div class="dark:bg-neutral-950 h-screen pattern-bg bg-cover bg-center">

    <div class="w-full h-[98vh] flex justify-center items-center">

        <div class="md:grid md:grid-cols-2 rounded-xl overflow-hidden shadow-2xl dark:shadow-2xs">

            <div
                class="flex flex-col mx-4 shadow-2xs rounded-xl bg-white dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-8 md:mx-0 md:rounded-none">

                <div class="flex items-center h-[90%]">
                    <form wire:submit.prevent="register" class="space-y-6 md:min-w-2xs lg:min-w-xs xl:min-w-md">
                        @csrf
                        <h1 class="text-3xl text-center dark:text-amber-50 font-semibold">Register</h1>

                        <div class="space-y-2">
                            <div class="relative">
                                <input wire:model='name' type="text"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg sm:text-sm focus:border-purple-500 focus:rinpurpleue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Name">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <x-lucide-user class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" />
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
                                <input wire:model='email' type="email"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg sm:text-sm focus:border-purple-500 focus:rinpurpleue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Email">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <x-lucide-mail class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" />
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
                                    <x-lucide-lock class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" />
                                </div>
                            </div>

                            @error('password')
                                <p class="text-sm text-red-600" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <div class="relative">
                                <input wire:model='repassword' type="password"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg sm:text-sm focus:border-purple-500 focus:rinpurpleue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Retry password">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <x-lucide-rotate-cw class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" />
                                </div>
                            </div>

                            @error('repassword')
                                <p class="text-sm text-red-600" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-purple-600 text-white hover:bg-purple-700 focus:outline-hidden focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition">
                            <span class="text-center w-full">Submit</span>
                        </button>

                        <p class="text-center dark:text-white"><a href="{{ route('login') }}" class="">Have an
                                account?
                                <span class="text-purple-500 animate-pulse">Click here!</span></a></p>

                    </form>
                </div>

            </div>

            <div class="hidden md:block bg-cover bg-center h-[70vh] relative"
                style="background-image: url('{{ asset('storage/pattern.jpg') }}');">

            </div>

        </div>

    </div>

    <x-utilities.loading />

    <x-links-background />

</div>
