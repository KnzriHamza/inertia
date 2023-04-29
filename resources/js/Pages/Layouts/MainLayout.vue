<template>
     <Link href="/">Hme Page</Link>&nbsp;
     <Link href="/home">Main Page</Link>
     <div>Timer : {{ timer }}</div>
    <slot></slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import {ref} from 'vue';

    const timer = ref(0 );
    setInterval(() => timer.value++, 1000);
</script>
