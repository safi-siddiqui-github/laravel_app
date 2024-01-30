<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from '../Shared/Layout.vue'
import SectionOne from '../Shared/home/SectionOne.vue'
import SectionTwo from '../Shared/home/SectionTwo.vue'
import SectionThree from '../Shared/home/SectionThree.vue'

defineOptions({ layout: Layout })
</script>

<template>
  <Head>
    <title>Home</title>
    <meta name="description" content="Laracamp's Home Page">
  </Head>
  <SectionOne />
  <SectionTwo />
  <SectionThree />
</template>