<template>
<div>

    <h1>Hello Products</h1>
    <table class="table table-hover table-inverse table-bordered" >
        <thead>
        <tr >

            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="product in products">

            <td>{{product.name}}</td>
            <td>{{product.price}}.00din</td>
            <td>{{product.categories}}</td>
        </tr>
        </tbody>
    </table>
</div>


</template>

<script>
    export default {
        name: 'products',
        mounted() {
            var that = this;
            axios.get('/api/products')
                    .then(function (response) {
                        that.products = response.data
                    });
        },
        data () {
            return {
                products: []
            }
        },

    }
</script>


<style scoped>



    h1, h2 {
        font-weight: normal;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        display: inline-block;
        margin: 0 10px;
    }

    a {
        color: dodgerblue;
    }
</style>
