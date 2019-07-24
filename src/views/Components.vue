<template>
  <div class="container">
    <section>
      <h1>Butons</h1>
      <div class="show-box">
        <BButton>Button</BButton>
        <BButton primary>Button</BButton>
        <BButton secondary>Button</BButton>
      </div>
    </section>

    <section>
      <h1>Inputs</h1>
      <div class="show-box">
        <BInput
          label="Usename"
          v-model="hello"
          hint="Lorem ipsum dolor."
        />
        <BInput
          :hasError="true"
          placeholder="password"
          type="number"
          hint="Lorem ipsum dolor sit."
        />
        <BInput type="email" />
      </div>
    </section>
  </div>
</template>

<script>
import BButton from '@/components/BButton'
import BInput from '@/components/BInput'

export default {
  name: 'Components',
  components: {
    BButton,
    BInput
  },
  data () {
    return {
      hello: 'hola'
    }
  }
}
</script>

<style scoped>
.container {
  font-family: var(--serif-font);
  max-width: 1200px;
  margin: auto;
}

.show-box {
  padding: 2rem;
  border: 1px solid gray;
  border-radius: 5px;
}
</style>
