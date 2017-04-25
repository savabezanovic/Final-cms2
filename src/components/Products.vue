<template>
<div>

    <h1>Hello Products</h1>
    <table class="table table-hover table-inverse table-bordered" >
        <thead>
        <tr >
            <!--<th>id</th>-->
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="product in products">
            <!--<th>{{product.id}}</th>-->
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

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

    /*h1 {*/
        /*margin-top: 100px;*/
    /*}*/
    /*table{*/
        /*margin-top: 50px;*/
        /*background-color: ;*/
    /*}*/

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
