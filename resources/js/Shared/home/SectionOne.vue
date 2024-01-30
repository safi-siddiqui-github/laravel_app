<script setup>

// $page.props
</script>
<template>
    <div class="lg:p-5 xl:p-10">
        <div
            class="flex flex-col lg:flex-row items-center gap-5 lg:gap-10 px-5 py-5 md:py-10 md:px-10 lg:py-10 lg:border lg:border-blue-500 lg:rounded-3xl bg-white lg:shadow-lg transition-all duration-100 ease-in-out lg:hover:shadow-xl lg:hover:border-2">

            <div
                class="bg-blue-500 flex flex-col w-full h-full xl:max-h-[700px] items-center justify-center rounded-xl lg:rounded-3xl lg:shadow-xl md:p-10 overflow-hidden">
                <img src="storage/landing/hero-security.gif" alt="Hero Cloud"
                    class="object-contain w-full h-full">
            </div>

            <div class="flex flex-col gap-4 md:gap-5 lg:gap-7">
                <div class="flex flex-col gap-1 lg:gap-2">
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-medium">
                        Laracamp
                    </h2>
                    <h3 class="tracking-tight text-lg lg:text-xl xl:text-2xl">
                        Open Source Laravel Solution
                    </h3>
                </div>

                <div class="flex flex-wrap gap-2 lg:gap-4 tracking-tight">

                    <button class="flex items-center gap-1 group">
                        <img src="storage/icons/laravel.svg" alt="laravel Icon"
                            class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Laravel</span>
                    </button>

                    <button class="flex items-center gap-1 group">
                        <img src="storage/icons/tailwind.svg" alt="tailwind Icon"
                            class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Tailwind</span>
                    </button>

                    <button class="flex items-center gap-1 group">
                        <img src="storage/icons/livewire.svg" alt="livewire Icon"
                            class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Livewire</span>
                    </button>

                </div>

                <div class="flex flex-col gap-2 lg:gap-4 tracking-tight xl:text-lg">
                    <p class="">
                        Laracamp Team Proudly present to You! a great Laravel Application that is completey open source for
                        laravel community.
                    </p>

                    <p class="">
                        Our aim is to provide a complete Laravel App that is capable of building simple app to complex
                        structures.
                    </p>
                </div>

                <div class="flex flex-col">

                    <a href="https://github.com/safi-siddiqui-github/laravel_app" target="_blank"
                        class="border hover:border-blue-500 rounded font-medium px-5 py-2 flex items-center justify-center gap-4">
                        <span>Laracamp Github</span>
                        <img src="storage/icons/new-tab.svg" alt="New Page Icon" class="w-6 inline-block">
                    </a>
                </div>

            </div>
        </div>

    </div>
</template>