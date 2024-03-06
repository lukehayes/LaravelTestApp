
<script setup>
import Layout from './Layout'
import { Head } from '@inertiajs/vue3'

defineProps({ task: Object })
</script>

<template>
  <Layout>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ task.task}}, welcome to your first Inertia app!</p>
  </Layout>
</template>
