<script setup lang="ts"></script>

<template>
  <nav class="flex justify-between items-center p-4 bg-white rounded shadow">
    <RouterLink to="/" class="text-2xl font-bold text-gray-800">Vuesplash</RouterLink>
    <div class="flex justify-between items-center space-x-4">
      <div>
        <button class="py-1 px-2 text-gray-500 rounded border border-gray-500">
          Submit a photo
        </button>
      </div>
      <span class="text-gray-500">username</span>
      <div>
        <RouterLink to="/login" class="text-gray-500">Login / Register</RouterLink>
      </div>
    </div>
  </nav>
</template>
