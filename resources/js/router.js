//qui mettiamo tutte le route, è il corrispondete di route di laravel

import { createRouter, createWebHistory } from "vue-router";
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contacts from './pages/Contacts.vue';
import Error404 from './pages/Error404.vue';
import Blog from './pages/Blog.vue';



const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes: [
        {

            path: '/',
            name: 'home',
            component: Home,
        },
        {

            path: '/chi-siamo',
            name: 'about',
            component: About,
        },


        {

            path: '/contatti',
            name: 'contacts',
            component: Contacts,
        },

        {
            path: '/blog',
            name: 'blog',
            component: Blog,
        },
        {

            path: '/:pathMatchch(.*)*',
            component: Error404,
        },



    ]
});

export { router }
