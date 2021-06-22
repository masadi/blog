<template>
<div>
  <div class="_container">
    <div class="admin-page-title">All Posts</div>
    <span v-if="successful" class="badge badge-danger"><h4>deleted!</h4><p>(Pos berhasil dihapus.)</p></span>
      <div class="h_wrap">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Title</th>
              <th>Image</th>
              <th>Categories</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody v-for="post in posts">
            <tr>
                <td style="width:500px"><h5>{{ post.title }}</h5></td>
                <td style="width:100px" v-if="post.image"><img :src="'/images/' + post.image"/></td>
                <td v-else>-</td>
                <td>{{ (post.category) ? post.category.name : '-' }}</td>
                <td> 
                <router-link :to="{ name: 'editpost', params: { postId : post.id } }">
                    <button type="button" class="btn btn-primary">Edit</button>
                </router-link>
                <button type="button" @click="deletePost(post.id)" class="btn btn-danger">Delete</button>
                </td> 
            </tr>
            </tbody>
        </table>
        <pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="getPosts()"></pagination>
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
      posts: [],
      successful: false,
      pagination: {
       'current_page': 1
    },
    }
  },
  created: function () {
    this.getPosts();
  },
  methods: {
    getPosts() {
      //axios.get('/api/posts')
      axios.get('/api/posts?page=' + this.pagination.current_page)
        .then(response => {
            console.log(response.data.data.data);
            this.posts = response.data.data.data; 
            this.pagination = response.data.pagination;
        })
        .catch(error => {
            //
        });
     },
     deletePost(id) {
        axios.delete("/api/posts/" + id)
            .then(response => {
                this.getPosts(); 
                this.successful = true;
                console.log('deleted!');
            });
        }
    }
  };
</script>