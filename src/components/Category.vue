<template>
    <div>

        <categories></categories>


        <table class="table table-hover table-inverse table-bordered" >
            <thead>
            <tr >
                <!--<th>id</th>-->
                <th>Name</th>
                <th>Price</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products">
                <!--<th>{{member.id}}</th>-->
                <td>{{product.name}}</td>
                <td>{{product.price}}.00 din</td>

            </tr>
            </tbody>
        </table>




    </div>
</template>

<script>
    import Categories from './Categories.vue'
    export default {
        name: 'category',
        components: {
            Categories
        },
        mounted() {
            var that = this;
            axios.get('/api/products/?id=' + that.$route.params.id)
                    .then(function (response) {
                        that.products = response.data
                        console.log(response.data)
                    });

            Events.$on('category-changed', function(){
                that.refresh();
            })
        },
        methods: {
          refresh() {
              var that = this;
              axios.get('/api/products/?id=' + that.$route.params.id)
                      .then(function (response) {
                          that.products = response.data
                          console.log(response.data)
                      });
          }
        },

        data () {
            return {
                products: [],

            }
        },

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

    .table{
        margin-top: 5px;
    }

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
    color: #42b983;
    }
</style>
