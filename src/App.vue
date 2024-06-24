<script setup>
import { ref } from 'vue'
import { RouterView } from 'vue-router'
</script>

<template>
  <div class="common-layout">
    <div class="capsule">
      <main>
        <div class="logo">
          <div>
          </div>
        </div>
        <RouterView v-on:loading="update" />
      </main>
    </div>
  </div>
  <div class="bg-video">
    <video autoplay muted loop>
      <source src="@/assets/img/wall.mp4" type="video/mp4">
    </video>
  </div>
</template>

<style lang="scss" scoped>
@import '@/assets/styles/main';

</style>