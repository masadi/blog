<template>
  <div class="_container">
    <div class="admin-page-title">Edit Category</div>
  
    <span v-if="successful" class="label label-success">
      <h4>Updated!</h4>
      <small>(Kategori berhasil diperbaharui!)</small>
    </span>

      <div class="_wrap-form">
        <form class="_bg-form">         
          <div class="form-group">
            <span v-if="errors.name" class="badge badge-danger">{{errors.name[0]}}</span>
            <input type="text" class="form-control" ref="name" id="name" placeholder="Name">
          </div>   
          <button type="submit" @click.prevent="updateCategory" class="btn btn-primary">
            Submit
          </button>  
           <router-link :to="{name: 'allcategories'}">
            <button type="button" class="btn btn-success"> Back </button>   
          </router-link>    
        </form><br><br><br>
      </div>
    </div>
</template>

<script>
export default {
    props:{
      categoryId:{
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
    created: function(){
      this.getCategory(); 
    },
    methods:{
      updateCategory(){
        let name = this.$refs.name.value;
        axios.put('/api/categories/' + this.categoryId, {name} )
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
      }, 
      getCategory(){
        axios.get("/api/categories/" + this.categoryId + "/edit")
          .then(response => {
            console.log(response.data);
            this.$refs.name.value = response.data.name;
        })
      }
    }
}
</script>