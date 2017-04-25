import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home.vue'
import Staff from '../components/Staff.vue'
import Products from '../components/Products.vue'
import Categories from '../components/Categories.vue'
import Category from '../components/Category.vue'


Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/staff',
            name: 'Staff',
            component: Staff
        },
        {
            path: '/products',
            name: 'Products',
            component: Products
        },
        {
            path: '/categories',
            name: 'Categories',
            component: Categories
        },
        {
            path: '/categories/:id',
            name: 'Category',
            component: Category
        },

    ]
})
