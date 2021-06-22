<template>
  <div class="_container">
    <div class="admin-page-title">Create New Category</div>
  
    <span v-if="successful" class="label label-success">
      <h4>Saved Successfully!</h4>
      <small>(Kategori baru berhasil dibuat!)</small>
    </span>

    <div class="_wrap-form">
      <form class="_bg-form">         
        <div class="form-group">
          <span v-if="errors.name" class="badge badge-danger">{{errors.name[0]}}</span>
          <input type="text" class="form-control" ref="name" id="name" placeholder="Name">
        </div>    
   
          <button type="submit" @click.prevent="createCategory" class="btn btn-primary">
            Submit
          </button>   
        </form><br><br><br>
      </div>
    </div>
</template>

<script>
  export default {
    props:{
      userId:{
        type: Number,
        required : true
      }
    },
    data:function(){
      return{
        successful: false,
        errors:[], 
      }
    }, 
    methods:{
      createCategory(){
        const formData = new FormData();
        formData.append('name', this.$refs.name.value); 
        formData.append('user_id', this.userId); 

        axios.post('/api/categories', formData)
          .then(response => {
            console.log(response.data);
            this.successful = true; 
            this.errors = false;
          })
          .catch(error => {
            if((error.response.status = 422 )){
            console.log(error.response.data);
            this.errors = error.response.data.errors;
            this.successful = false;
            }
          });
          this.$refs.name.value = ""; 
      }, 
    }

  }
</script>