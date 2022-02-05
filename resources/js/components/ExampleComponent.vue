<script setup lang="ts">
import { ref } from 'vue'
import TestComponent from './TestComponent.vue'

defineProps<{ msg: string }>()

const count = ref(0)
</script>

<template>
  <h1 class="bg-pink-400 font-bold">{{ msg }}</h1>
  <p><slot></slot></p>
  <button type="button" @click="count++">count is: {{ count }}</button>
  <TestComponent></TestComponent>
</template>
