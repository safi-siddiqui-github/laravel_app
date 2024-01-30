<script setup>
import Layout from '../Shared/Layout.vue'
import { Head, Link } from '@inertiajs/vue3'
import { WorkAnimateImage, LaracampLogoImage } from '../Shared/constant.js'

defineOptions({ layout: Layout })
</script>

<template>
    <Head>
        <title>Login</title>
        <meta name="description" content="Laracamp's Login Page">
    </Head>

    <section class="flex flex-col lg:flex-row md:items-center lg:gap-5 ">

        <div
            class="hidden lg:flex flex-col items-center justify-center lg:w-1/2 xl:w-2/3 lg:h-[690px] xl:h-[800px] bg-amber-100">
            <img :src="WorkAnimateImage" alt="Login Side" class="object-contain w-full lg:h-[400px] xl:h-[500px]" />
        </div>

        <div class="flex flex-col px-5 py-5 md:py-10 lg:px-7 gap-10 bg-white md:w-[600px] lg:w-1/2 xl:w-1/3">

            <div class="flex flex-col items-center justify-center gap-2">
                <img :src="LaracampLogoImage" alt="Laracamp Logo" class="w-44 rounded-xl">
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col items-center gap-1 md:gap-2">
                    <h2 class="text-2xl md:text-4xl font-serif">
                        Welcome Back
                    </h2>
                    <p class="tracking-tight text-xs md:text-sm">
                        Enter your email and password to access your account
                    </p>
                </div>

                <div class="flex flex-col md:gap-4 gap-2 font-medium">
                    <Link :href="$route('auth.login_post')" method="post" as="button" type="button" class="bg-black p-2 rounded-md text-white">
                        Continue as Guest
                    </Link>

                    <Link :href="$route('auth.google.redirect')" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                        <img src="/storage/icons/google.svg" alt="google Logo" class="w-7">
                        <span>Sign in with Google</span>
                    </Link>

                    <Link :href="$route('auth.github.redirect')"
                        class="flex border rounded-md p-2 justify-center gap-5 items-center">
                    <img src="/storage/icons/github.svg" alt="github Logo" class="w-7">
                    <span>Sign in with Github</span>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>