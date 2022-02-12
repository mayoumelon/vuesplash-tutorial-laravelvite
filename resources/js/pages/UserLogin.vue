<script setup lang="ts">
import { reactive, ref } from 'vue'

interface LoginForm {
  email: string
  password: string
}

const tab = ref(1)
const loginForm = reactive<LoginForm>({
  email: '',
  password: '',
})

const login = (): void => {
  console.log(loginForm)
}
</script>

<template>
  <div class="mx-auto max-w-screen-sm">
    <ul class="flex space-x-4 text-gray-400">
      <li
        :class="{ 'text-gray-800 border-gray-800': tab === 1 }"
        class="py-2 px-4 border-b-2"
        @click="tab = 1"
      >
        Login
      </li>
      <li
        :class="{ 'text-gray-800 border-gray-800': tab === 2 }"
        class="py-2 px-4 border-b-2"
        @click="tab = 2"
      >
        Register
      </li>
    </ul>
    <div v-show="tab === 1" class="p-8 mt-4 border">
      <form class="" @submit.prevent="login">
        <div class="">
          <label for="login-email" class="block mb-2">Email</label>
          <input
            id="login-email"
            v-model="loginForm.email"
            type="text"
            class="py-1 px-2 w-full rounded border border-gray-300 focus:border-indigo-500 focus:outline-none focus:ring-indigo-50 appearance-none"
          />
        </div>
        <div class="mt-4">
          <label for="login-password" class="block mb-2">Password</label>
          <input
            id="login-password"
            v-model="loginForm.password"
            type="password"
            class="py-1 px-2 w-full rounded border border-gray-300 focus:border-indigo-500 focus:outline-none focus:ring-indigo-50 appearance-none"
          />
        </div>
        <div class="flex justify-end mt-4">
          <button type="submit" class="py-1 px-4 text-white bg-gray-800 rounded">login</button>
        </div>
      </form>
    </div>
    <div v-show="tab === 2">Register Form</div>
  </div>
</template>
