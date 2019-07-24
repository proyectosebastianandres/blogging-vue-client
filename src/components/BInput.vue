<template>
  <div :class="classes">
    <label class="b-input__label" v-if="hasLabel" for="">{{label}}</label>
    <input :type="type" :placeholder="placeholder" @input="onInput">
    <span class="b-input__hint" v-if="hasHint">{{hint}}</span>
  </div>
</template>

<script>
export default {
  name: 'BInput',
  props: {
    type: {
      type: String,
      default: 'text'
    },
    label: String,
    placeholder: String,
    hint: String,
    hasError: Boolean
  },
  computed: {
    hasLabel () {
      return !!this.label
    },
    hasHint () {
      return !!this.hint
    },
    classes () {
      return {
        'b-input': true,
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
.b-input {
  margin-bottom: 16px;
}

.b-input__label {
  color: var(--neutral-dark);
  font-family: var(--sans-font);
  font-size: 16px;
  display: block;
  margin-bottom: .3rem;
}

.b-input input {
  color: var(--neutral-dark);
  border-radius: 5px;
  border: 1px solid #E8E8E8;
  font-family: var(--sans-font);
  font-size: 1rem;
  padding: 14px 20px;
  width: 100%;
}

.b-input input:focus {
  border-color: var(--neutral-dark);
}

.b-input input:invalid,
.b-input .has-error input {
  border: 1px solid var(--on-error);
  box-shadow: none;
}

.b-input__hint {
  font-family: var(--sans-font);
  color: var(--neutral-dark);
  margin-left: 15px;
  font-size: 13px;
}

.has-error .b-input__hint {
  color: var(--on-error);
}
</style>
