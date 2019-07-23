<template>
  <input :class="classes" :type="type" @input="onInput">
</template>

<script>
export default {
  name: 'BInput',
  props: {
    type: {
      type: String,
      default: 'text'
    },
    small: Boolean,
    large: Boolean,
    hasError: Boolean
  },
  computed: {
    classes () {
      return {
        'input': true,
        'small': this.small,
        'large': this.large,
        'has-error': this.hasError
      }
    }
  },
  methods: {
    onInput (e) {
      this.$emit('input', e.target.value)
    }
  }
}
</script>

<style scoped>
.input {
  border-radius: 5px;
  border: 1px solid #ccc;
  font-family: var(--sans-font);
  font-size: 1rem;
  padding: 8px 16px;
}

.input:invalid,
.input.has-error {
  border: 2px solid var(--on-error);
  box-shadow: none;
}
</style>
