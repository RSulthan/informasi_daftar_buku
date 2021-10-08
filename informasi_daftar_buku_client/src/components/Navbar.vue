<template>
  <div><nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Informasi Buku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
         <li class="nav-item">
          <router-link :to="{ name: 'about'}"
        class="nav-link">Halaman About</router-link>
        </li>
        <li class="nav-item" v-if="authStatus">
          <router-link :to="{ name: 'informasi_buku.index'}"
        class="nav-link">Daftar Buku</router-link>
        </li>
        <li class="nav-item dropdown" v-if="authStatus">
           <a href="#" class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">{{ user.name }}</a>
           <ul class="dropdown-menu" area-labelledby="dropdown01">
             <li><a class="dropdown-item" href="#" @click.prevent="logout">Logout</a></li>
           </ul>
        </li>
        <li class="nav-item" v-if="!authStatus">
          <router-link :to="{ name: 'login'}"
        class="nav-link">Login</router-link>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <p>{{authStatus}}</p> -->
</div>
</template>

<script>
import authStore from '../store/auth'
import { computed } from '@vue/reactivity'
import { useRouter } from 'vue-router';

export default {
  setup() {
    const router = useRouter()
    const authStatus = computed(() => authStore.state.authStatus)
    const user = computed(() => authStore.state.user)

    let logout = async () => {
      await authStore.dispatch('logout')
      router.replace({
        name: 'about'
      })
    }

    return { authStatus, user, router, logout }
  }
}
</script>

<style>

</style>
