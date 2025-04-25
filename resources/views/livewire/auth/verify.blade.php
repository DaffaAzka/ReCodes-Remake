<div class="dark:bg-neutral-950 min-h-screen pattern-bg bg-cover bg-center">

    <div class="w-full min-h-[98vh] flex justify-center items-center p-4 sm:p-6">

        <div class="w-full max-w-4xl md:grid md:grid-cols-2 rounded-xl overflow-hidden shadow-2xl dark:shadow-2xs">

            <!-- Form Section -->
            <div
                class="flex flex-col shadow-2xs rounded-xl bg-white dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-6 sm:p-8 md:rounded-none md:h-full">
                <div class="flex flex-col justify-center h-full">
                    <form action="" wire:submit.prevent="login" class="space-y-6 w-full">
                        @csrf
                        <div class="space-y-2">
                            <h1 class="text-2xl sm:text-3xl text-center dark:text-amber-50 font-semibold">
                                Verification account</h1>
                            <p class="text-center text-gray-500 dark:text-neutral-400 text-sm sm:text-base">
                                We've sent a verification code to your email. The code will expire in 15 minutes.
                            </p>
                        </div>

                        <div class="space-y-2">
                            <div class="relative">
                                <input wire:model='code' type="text"
                                    class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg text-sm sm:text-base focus:border-purple-500 focus:ring-purple-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Verification Code">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <x-lucide-scan-barcode
                                        class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" />
                                </div>
                            </div>

                            @error('code')
                                <p class="text-sm text-red-600" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-purple-600 text-white hover:bg-purple-700 focus:outline-hidden focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition">
                            <span class="text-center w-full">Submit</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Image Section -->
            <div class="hidden md:block bg-cover bg-center min-h-[50vh] md:min-h-[70vh] relative"
                style="background-image: url('{{ asset('storage/pattern.jpg') }}');">
            </div>
        </div>
    </div>

    <x-utilities.loading />
    <x-links-background />
</div>
