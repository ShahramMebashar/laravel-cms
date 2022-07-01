<script setup lang="ts">
import route from '@/utils/route';
import { Head, Link, usePage } from '@inertiajs/inertia-vue3';
const user  = (usePage().props.value as any)?.auth?.user;
defineProps<{
    canLogin: boolean
    canRegister: boolean
    laravelVersion: string
    phpVersion: string
}>()
</script>

<template>
    <Head title="Welcome" />
    <p>Test</p>
</template>