<script setup>
import { Link } from '@inertiajs/vue3'
import Login from '../Pages/Login.vue';
import { ref, Teleport } from 'vue'

const isLoginModalOpen = ref(false);
</script>

<template>
    <header class="flex items-center justify-between py-4 px-5 shadow">
        <nav>
            <Link :href="$route('web.home')" class="text-xl">Laracamp</Link>
        </nav>

        <nav class="font-medium">
            <Link :href="$route('web.home')">Apps</Link>
        </nav>

        <nav class="flex gap-3 font-medium">
            <!-- <Link :href="$route('auth.login')">Login</Link> -->
            <button type="button" @click="isLoginModalOpen = true">Login</button>
            <Link :href="$route('auth.logout')" method="post" as="button" type="button">Logout</Link>
        </nav>
    </header>

    <main class="flex flex-col">
        <slot />
    </main>

    <Teleport to="#modal">
        <div class="fixed top-0 left-0 w-screen h-screen bg-black/10 flex items-center justify-center z-50" v-if="isLoginModalOpen">
            <Login :isLoginModalOpen="isLoginModalOpen"/>
        </div>
    </Teleport>

    <footer class="flex items-center border-t py-4 px-5">
        <h2 class="text-xl">Laracamp Open Source</h2>
    </footer>
</template>