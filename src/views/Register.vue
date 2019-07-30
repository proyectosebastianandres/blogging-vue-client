<template>
  <BCard class="login">
    <div class="login-header">
      <div class="logo">
        <img src="logo.svg" alt="">
      </div>
      <div class="login__actions">
        <router-link to="/login" >Login</router-link>
        <a href="#" class="login__actions--current">Singup</a>
      </div>
    </div>
    <form name="register" @submit.prevent="register">
      <BInput
        placeholder="Name"
        name="name"
        id="name"
        v-model="user.name"
        :hint="messages.name"
        :hasError="!!messages.name"
      />
      <BInput
        placeholder="Email"
        name="email"
        id="email"
        v-model="user.email"
        :hint="messages.email"
        type="email"
        :hasError="!!messages.email"
      />
      <BInput
        placeholder="Password"
        name="password"
        id="password"
        v-model="user.password"
        :hint="messages.password"
        type="password"
        :hasError="!!messages.password"
      />
      <BAlert
        v-if="!!messages.error"
        type="error"
        :message="messages.error"
      />
      <BButton :disabled="loading" primary fullWidth type="submit">Register</BButton>
    </form>
  </BCard>
</template>

<script>
import BInput from '@/components/BInput'
import BButton from '@/components/BButton'
import BCard from '@/components/BCard'
import BAlert from '@/components/BAlert'

export default {
  name: 'Register',
  components: {
    BInput,
    BButton,
    BCard,
    BAlert
  },
  data () {
    return {
      user: {
        email: '',
        password: '',
        name: ''
      },
      messages: {
        email: '',
        password: '',
        name: '',
        error: ''
      },
      loading: false
    }
  },
  methods: {
    register () {
      if (this.validateForm()) {
        this.loading = true
        fetch('http://localhost:3000/register.php?delay=2', {
          method: 'post',
          body: JSON.stringify(this.user)
        })
          .then(res => res.json())
          .then(response => {
            if (response.status !== 200) {
              this.messages.error = response.message
              this.loading = false
            } else {
              this.$router.push('/posts')
            }
          })
      }
    },
    validateForm () {
      if (this.user.name === '') {
        this.messages.name = 'Write a name'
        return false
      } else {
        this.messages.name = ''
      }

      if (this.user.email === '') {
        this.messages.email = 'Write an email'
        return false
      } else {
        this.messages.email = ''
      }

      if (this.user.password === '') {
        this.messages.password = 'Write a password'
        return false
      } else {
        this.messages.email = ''
      }

      return true
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
