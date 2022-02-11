<script setup lang="ts">
import NavigationBar from './components/NavigationBar.vue'
import PageFooter from './components/PageFooter.vue'
</script>
<template>
  <div>
    <header>
      <NavigationBar />
    </header>
    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
    <PageFooter />
  </div>
</template>
