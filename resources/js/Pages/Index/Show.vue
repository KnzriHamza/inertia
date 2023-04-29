<template>

        <div>
            <h1>Show</h1>
        </div>
        <Link href="/">home Page</Link>
        <h4><div>{{ message }}</div></h4>

</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps(['message'])
</script>



