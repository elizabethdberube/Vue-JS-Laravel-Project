<script>
import axios from 'axios';

export default {
  name: 'App',
  data() {
    return {
      user: null,  // This will store the user info if authenticated
    };
  },
  async mounted() {
    try {
      const response = await axios.get('/api/user');
      this.user = response.data;
      // Redirect to home if authenticated and not already there
      if (this.$route.path !== '/') {
        this.$router.push('/');
      }
    } catch (error) {
      // Redirect to login if unauthenticated and not on login or register page
      if (this.$route.path !== '/login' && this.$route.path !== '/register') {
        this.$router.push('/login');
      }
    }
  },
};
</script>

<template>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>
</template>