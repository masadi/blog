/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router'
import VueMeta from 'vue-meta'
Vue.use(VueRouter)
Vue.use(VueMeta)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import WelcomeAdmin from './components/WelcomeAdmin'
import Menuadmin from './components/Menuadmin'
import Menuheader from './components/Menuheader'
import CreatePost from './components/CreatePost'
import AllPosts from './components/AllPosts'
import EditPost from './components/EditPost'
import AllCategories from './components/AllCategories'
import EditCategory from './components/EditCategory'
import CreateCategory from './components/CreateCategory'
import HomepagePosts from './components/HomepagePosts'
import ReadPost from './components/ReadPost'
import Menuhomepage from './components/Menuhomepage'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin/dashboard',
            name: 'dashboard',
            component: WelcomeAdmin,
        },
        {
            path: '/admin/createpost',
            name: 'createpost',
            component: CreatePost,
            props: true,
        },
        {
            path: '/admin/allposts',
            name: 'allposts',
            component: AllPosts,
            props: true,
        },
        {
            path: '/admin/editpost/:postId/edit',
            name: 'editpost',
            component: EditPost,
            props: true,
        },
        {
            path: '/admin/allcategories',
            name: 'allcategories',
            component: AllCategories,
            props: true,
        },
        {
            path: '/admin/editcategory/:categoryId/edit',
            name: 'editcategory',
            component: EditCategory,
            props: true,
        },
        {
            path: '/admin/createcategory',
            name: 'createcategory',
            component: CreateCategory,
            props: true,
        },
        {
            path: '/',
            name: 'homepageposts',
            component: HomepagePosts,
            props: true,
        },
        {
            path: '/read/:slug',
            name: 'readpost',
            component: ReadPost,
            props: true,
        },
    ],
});
const app = new Vue({
    el: '#app',
    router,
    components: {
        Menuadmin, Menuheader, Menuhomepage
    },
});
