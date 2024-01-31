<script setup>
import { Link } from '@inertiajs/vue3'
import { CloseIconImage, GithubIconImage, GoogleIconImage, LaracampLogoImage } from '../Shared/constant';

const props = defineProps('isLoginModalOpen')

</script>

<template>
    <div class="flex flex-col px-5 py-5 md:py-10 lg:px-7 bg-white md:w-[600px] shadow relative">
        
        <div class="flex self-end cursor-pointer" @click="isLoginModalOpen =false">
            <img :src="CloseIconImage" alt="close" class="w-7">
        </div>

        
        <div class="flex flex-col gap-10">
            
            <div class="flex justify-center">
                <img :src="LaracampLogoImage" alt="Laracamp Logo" class="w-44 rounded-xl">
            </div>
            
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
                    <img :src="GoogleIconImage" alt="google Logo" class="w-7">
                    <span>Sign in with Google</span>
                </Link>

                <Link :href="$route('auth.github.redirect')" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                    <img :src="GithubIconImage" alt="github Logo" class="w-7">
                    <span>Sign in with Github</span>
                </Link>
            </div>
        </div>
    </div>
        
</template>