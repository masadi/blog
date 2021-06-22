<template>
  <div>
    <div class="menu">
      <ul>
        <li>
          <router-link :to="{ name: 'dashboard' }">
            <i class="fa fa-home"></i>
            <span class="text"> DASHBOARD </span>
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'allposts', params: { userId } }"
            ><i class="fa fa-pencil-square-o" />
            <span class="text"> ALL POST </span></router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'createpost', params: { userId } }"
            ><i class="fa fa-pencil-square-o" />
            <span class="text"> NEW POST </span></router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'allcategories' }"
            ><i class="fa fa-list" />
            <span class="text"> ALL CATEGORIES </span></router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'createcategory', params: { userId } }"
            ><i class="fa fa-pencil-square-o" />
            <span class="text"> NEW CATEGORY </span></router-link
          >
        </li>
      </ul>
      </div>
  </div>
</template>

<script>
export default {
  props: {
    userId: {},
  },
  mounted() {
    console.log("menu Component mounted.");
  },
};
</script>
