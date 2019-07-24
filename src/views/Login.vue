<template>
  <BCard class="login">
    <div class="login-header">
      <div class="logo">
        <img src="logo.svg" alt="">
      </div>
      <div class="login__actions">
        <a href="#" class="login__actions--current">Login</a>
        <a href="/register">Singup</a>
      </div>
    </div>
    <form name="login">
      <BInput
        placeholder="Email"
        v-model="user.email"
        :hint="messages.email"
        type="email"
      />
      <BInput
        placeholder="Password"
        v-model="user.password"
        :hint="messages.password"
        type="password"
      />
      <BButton primary fullWidth type="submit">Login</BButton>
    </form>
  </BCard>
</template>

<script>
import BInput from '@/components/BInput'
import BButton from '@/components/BButton'
import BCard from '@/components/BCard'

export default {
  name: 'Login',
  components: {
    BInput,
    BButton,
    BCard
  },
  data () {
    return {
      user: {
        email: '',
        password: ''
      },
      messages: {
        email: '',
        password: ''
      }
    }
  }
}
</script>

<style>
body {
  background-color: #fafafa;
}

.login {
  max-width: 420px;
  margin: auto;
  margin-top: 120px;
}

.login-header {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 2rem 0 1.5rem;
}

.login__actions a {
  font-family: var(--sans-font);
  text-decoration: none;
  font-size: 1rem;
  font-weight: bold;
  color: var(--neutral-light);
  padding: .5rem;
}

a.login__actions--current {
  color: var(--primary);
  pointer-events: none;
}
</style>
