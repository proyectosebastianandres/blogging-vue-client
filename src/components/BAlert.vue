<template>
  <div :class="classes">
    <img class="b-alert__icon" :src="getIcon()" />
    <p class="b-alert__text">{{message}}</p>
  </div>
</template>

<script>
export default {
  name: 'BAlert',
  props: {
    type: {
      type: String,
      default: 'info'
    },
    message: {
      required: true,
      type: String
    }
  },
  methods: {
    getIcon () {
      return require(`../assets/icons/icon-${this.type}.svg`)
    }
  },
  computed: {
    classes () {
      return {
        'b-alert': true,
        ['b-alert--' + this.type]: true
      }
    }
  }
}
</script>

<style>
.b-alert {
  font-family: var(--sans-font);
  border-radius: 5px;
  padding: 1rem;
  margin-bottom: 16px;
  color: #fff;
  display: flex;
  align-items: center;
}

.b-alert__icon {
  margin-right: 8px;
  height: 32px;
  width: 32px;
}

.b-alert__text {
  margin: 0;
}

.b-alert--info {
  background-color: var(--on-info);
}

.b-alert--success {
  background-color: var(--on-success);
}

.b-alert--warning {
  background-color: var(--on-warning);
}

.b-alert--error {
  background-color: var(--on-error);
}
</style>
