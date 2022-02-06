<script setup lang="ts">
import { ref } from 'vue'
import TestComponent from './TestComponent.vue'

defineProps<{ msg: string }>()

const count = ref(0)
</script>

<template>
  <h1 class="font-bold bg-pink-400">
    {{ msg }}
  </h1>
  <p><slot /></p>
  <button type="button" @click="count++">count is: {{ count }}</button>
  <TestComponent />
</template>
