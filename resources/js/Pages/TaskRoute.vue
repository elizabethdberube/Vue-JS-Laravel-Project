<script setup>
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
</script>
<script>
import './style.css'
import "../bootstrap.js";
import { ref, onMounted } from "vue";
import axios from 'axios';
import vueCustomScrollbar from 'vue-custom-scrollbar';



export default {
  data() {
    return {
      items: ref([]),
     response: ref({}),
     showElement: false
    };
  },
 async  mounted() {
 await this.getResults();
  },

 // methods go in here
  methods: {

async toggleitemvisiblity(item){
if(this.showElement == item.id){

this.showElement = null;

}else{

this.showElement = item.id;

}
},

// get tasks
async getResults(page = 1) {
  try {
    const response = await fetch(`/api/tasks?page=${page}`);
    
    // Check if the response is okay (status 200-299)
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    
    this.response = await response.json();
    this.items.value = this.response.data;

  } catch (error) {
    console.error('Error fetching tasks:', error);

  }
},

    // save new tasks method
  async saveTask() {
    const task = { 
      id: this.id, 
      title: this.title, 
      description: this.description, 
      status: this.status,

    };

  try {
    const response = await axios.post('/api/tasks', task, {
      headers: {
        'Content-Type': 'application/json',
      },
    });
    
// If the response contains the newly created task 
    const newTask = response.data; 

// Clear the form fields 
    this.id = null; 
    this.title = ''; 
    this.description = ''; 
    this.status = '';

await this.getResults();

// Ensure reactivity is triggered 
    this.$forceUpdate();

  } catch (error) {
    console.error('Error creating tasks:', error);

  }},

// update task method
  async updateTask(item){

   const task = { 
      id: item.id, 
      title: item.title, 
      description: item.description, 
      status: item.status,

    };

  let id = task.id;
  let url = `/api/tasks/${id}`
  
  try {
    const response = await axios.put(url, task, {
      headers: {
        'Content-Type': 'application/json',
      },
    });

   await this.getResults();
  } catch (error) {
    console.error('Error fetching tasks:', error);
    alert('An error occurred while fetching tasks. Please try again later.');
  }},

// logout method
  async logout() {
  try { await axios.post('/logout'); 
  location.reload();
  } 
  catch (error) { console.error('Error logging out:', error); }
      }, 

// delete task method
 async deleteTask(item) {

    let id = item.id;
    let url = `/api/tasks/${id}`
  
    try {
      const response = await axios.delete(url, {
        headers: {
          'Content-Type': 'application/json',
        },
      });

     await this.getResults();

  } catch (error) {
    console.error('Error deleting tasks:', error);
    alert('An error occurred while deleting tasks. Please try again later.');
  }}
  }
  };

</script>
<template>

 <form v-on:submit.prevent="logout"> 
   <nav class="navbar navbar-dark bg-dark">

       <a class="navbar-brand mx-2" href="/">Home</a>
 
       <a class="navbar-brand mx-2" href="/inspire">Inspiration</a>

      <button type="submit" class="navbar-brand mx-2">Logout</button> 
  
   </nav>
  </form> 


  <div class="container-fluid">
    <div class="row">

      <div class="col-4 listcontainer" ref="listcontainer">
        <div class="card ">
        
        <!-- list of tasks -->
        <nav aria-label="Page navigation example">
          <ul class="list-group pagination">
          <li v-for="item in items.value"  class="list-group-item page-item" >
            <form v-on:submit.prevent="updateTask(item)">
                    <div class="mb-2">
                     <p class="card-text"><b>Title:</b> {{item.title}}</p>
                     <p class="card-text"><b>Description:</b> {{item.description}}</p>
                     <p class="card-text"><b>Status:</b>  {{ item.status ? 'Completed' : 'Not Completed' }}</p>
                     </div>
                          
                <button @click="toggleitemvisiblity(item)" class="btn btn-secondary m-2">Edit</button>
                <button class="btn btn-secondary m-2 " @click="deleteTask(item)">Delete Task</button>
                    <div v-if="item.id == showElement " >
                      <label class="card-title" for="title"><h5>Title:</h5></label>
                      <input type="hidden" class="form-control" id="title" v-model="item.id">
                      <input type="text" class="form-control" id="title" v-model="item.title">
                      <label class="custom-control-label" for="description">Description:</label>
                      <input type="text" class="form-control" id="description" v-model="item.description" >
                    
                        <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input"  v-model="item.status" true-value=1 false-value=0>
                        <label class="custom-control-label" for="customCheck1">&nbsp;Completed</label>
                        </div>

                  <button type="submit" class="btn btn-secondary btn-sm mx-2" >Update Task</button>
                  <div>
              </div>
              </div>
            </form>
          </li>
          </ul>
        </nav>
                 <Bootstrap5Pagination
        :data="response"
        @pagination-change-page="getResults"/>
        
       
        </div>
      </div>

      <!-- new task form -->
      <div class="col-8">
      <form v-on:submit.prevent="saveTask">
        <input required class="form-control tasktitle" v-model="title" ref="tasktitle" placeholder="Task Title" maxlength="28" type="text" />
        <br>
        <textarea  class="tasktextarea"   v-model="description" placeholder="Task Description"></textarea>

          <div class="custom-control custom-checkbox mb-2">
          <input type="checkbox" class="custom-control-input"  v-model="status" >
          <label class="custom-control-label" for="customCheck1">&nbsp;Completed</label>
          </div>
          
        <button type="submit" class="btn btn-secondary" >Save Task</button>
      </form>
      </div>
    
    </div>
  </div>
</template>