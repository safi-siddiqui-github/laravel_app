<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <header class="flex items-center justify-between py-2 px-5 border-b">
        <nav>
            <Link :href="$route('web.home')" class="text-xl">Laracamp</Link>
        </nav>

        <nav class="font-medium">
            <Link :href="$route('web.home')">Apps</Link>
        </nav>

        <nav class="flex gap-3 font-medium">
            <Link :href="$route('auth.login')">Login</Link>
            <Link :href="$route('auth.logout')" method="post" as="button" type="button">Logout</Link>
        </nav>
    </header>

    <main class="flex flex-col">
        <slot />
    </main>

    <footer class="flex items-center border-t py-2 px-5">

        <h2 class="text-xl">Laracamp Open Source</h2>
    </footer>
</template>