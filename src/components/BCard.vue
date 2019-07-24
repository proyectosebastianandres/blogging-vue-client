<template>
  <div :class="classes">
    <slot></slot>
  </div>
</template>

<script>
export default {
  name: 'BCard',
  computed: {
    classes () {
      return {
        'b-card': true
      }
    }
  }
}
</script>

<style>
.b-card {
  border-radius: 5px;
  padding: 1rem;
  background-color: #fff;
  box-shadow: 0px 4px 16px rgba(211, 211, 211, 0.24);
}
</style>
