<template>

        <div>
        <h1>Index</h1>
    </div>
    <Link href="/home">Show Page</Link>
    <h4><div>{{ message }}</div></h4>

</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        message: String
    })
</script>


