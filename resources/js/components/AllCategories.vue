<template>
  <div>
    <div class="_container">
      <div class="admin-page-title">All Categories</div>
      <span v-if="successful" class="label label-danger"><h4>deleted!</h4><p>(kategori berhasil dihapus.)</p></span>
        <div class="h_wrap">
          <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>  
              <th>Name</th>   
              <th>Actions</th>
            </tr>
          </thead>
           <tbody v-for="cateogry in categories">
                <tr >
                    <td>{{ cateogry.id }}</td>  
                    <td style="width:600px">{{ cateogry.name }}</td>   
                    <td>
                        <router-link :to="{ name: 'editcategory', params: { categoryId: cateogry.id } }">
                            <button type="button" class="btn btn-primary">
                                Edit 
                            </button>
                        </router-link>
                        <button type="button" @click="deleteCategory(cateogry.id)" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
         </table>
         <pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="getCategories()"></pagination>
      </div>
    </div>
  </div>
</div> 
</template>

<script>
import pagination from './Pagination.vue';
export default {
  components: {
      pagination
  },
    data:function() {
        return { 
            categories: [],
            successful: false,
            pagination: {
            'current_page': 1
      },
        }
    },
    created: function () {
        this.getCategories();
    },
    methods: {
        getCategories() {
            //axios.get('/api/categories')
            axios.get('/api/categories?page=' + this.pagination.current_page)
            .then(response => {
                console.log(response.data);
                    this.categories = response.data.data.data;
                    this.pagination = response.data.pagination;
                })
            .catch(error => {
                    console.log(error.response.data);
            });
        },
        deleteCategory(id) {
            axios.delete("/api/categories/" + id)
            .then(response => {
                console.log('deleted!');
                this.getCategories();
                this.successful = true;
            });
        },
    }
};
</script>