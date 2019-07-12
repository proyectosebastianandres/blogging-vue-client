<template>
  <component :is="tag" @click="onClick" :class="classes">
    <slot></slot>
  </component>
</template>

<script>
export default {
  name: 'BButton',
  props: {
    tag: {
      type: String,
      default: 'button'
    },
    primary: Boolean,
    secondary: Boolean
  },
  computed: {
    classes () {
      return {
        'btn': true,
        'primary': this.primary,
        'secondary': this.secondary
      }
    }
  },
  methods: {
    onClick (e) {
      // Prevent persistent focus on click
      this.$el.blur()

      this.$emit('click', e)
    }
  }
}
</script>

<style>
.btn {
  background-color: #ccc;
  border: 1px solid transparent;
  border-radius: 5px;
  display: inline-block;
  cursor: pointer;
  font-family: var(--sans-font);
  font-size: 1rem;
  padding: .5rem 1rem;
  margin: .5rem 0;
  text-align: center;
  text-decoration: none;
  transition: background-color .2s ease;
}

.btn:focus {
  box-shadow: 0px 0px 0px 2px #aaa;
}

.btn.primary {
  background-color: var(--primary);
  color: #fff;
}

.btn.primary:hover {
  background-color: var(--primary-dark);
}

.btn.primary:focus {
  box-shadow: 0px 0px 0px 2px var(--primary-dark);
}

.btn.secondary {
  background-color: var(--secondary);
  color: #fff;
}

.btn.secondary:hover {
  background-color: var(--secondary-dark);
}
.btn.secondary:focus {
  box-shadow: 0px 0px 0px 2px var(--secondary-dark);
}

.btn:active,
.btn.primary:active,
.btn.secondary:active {
  transform: translateY(1px);
  box-shadow: none;
}

</style>
