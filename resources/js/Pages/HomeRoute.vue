<script>
import axios from "axios";
import { ref } from "vue";
import "../bootstrap.js";
import './style.css'

</script>

<template>


  <nav class="navbar navbar-dark bg-dark">
       <a class="navbar-brand mx-2" href="/tasks">Task Manager <span role="img" aria-label="Memo">📝</span></a>
       
       <a class="navbar-brand mx-2" href="/inspire">Inspiration
  

    </a>
  </nav>

  <div class="container">
    <div style="margin-top: 80px;" class="jumbotron text-center">
      <h1 class="display-4">Task Manager<span role="img" aria-label="Memo">📝</span></h1>
      <h4 class="mt-4">Manage tasks with VueJS</h4>
    <router-link to="/tasks" class="btn btn-secondary btn-lg mt-4" > Let's manage some tasks </router-link>
    </div>
  </div>

</template>