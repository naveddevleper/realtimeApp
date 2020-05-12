<template>
  <v-toolbar color="indigo" dark>
    <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
    <v-toolbar-title>
      <router-link class="white--text" to="/">Title</router-link>
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">

      <router-link 
      v-for="item in items"
      :key="item.title"
      :to="item.to"
       v-if="item.show">
        <v-btn text large>{{item.title}}</v-btn>
      </router-link>

    </div>
  </v-toolbar>
</template>

<script>

export default {
  data() {
    return {
     // loggedIn: User.loggedIn(),
      items: [
        { title: "Forum", to: "/forum", show: true },
        { title: "Ask Question", to: "/ask", show: User.loggedIn() },
        { title: "Category", to: "/category", show: User.loggedIn() },
        { title: "Login", to: "/login", show: !User.loggedIn() },
        { title: "Logout", to: "/logout", show: User.loggedIn() }
      ]
    };
  },
  created() {
    EventBus.$on("logout", () => {
      User.logout();
    });
  }
};
</script>

<style>
</style>