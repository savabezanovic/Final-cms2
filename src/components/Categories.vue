<template>
    <div>
        <h1>Hello Categories</h1>
        <nav class="navbar-fixed-top-center new-margin" >
            <ul class="nav nav-pills" >
                <li role="presentation" class="active" v-for="category in categories">
                    <a  v-bind:href="'/#/categories/' + category.id" @click="clicked">
                    {{category.name}}
                    </a>
                </li>
            </ul>
        </nav>




    </div>
</template>

<script>
    export default {
        name: 'categories',
        mounted() {
            var that = this;
            axios.get('/api/categories')
                    .then(function (response) {
                        that.categories = response.data

                    });


        },

        methods: {
          clicked() {
              Events.$emit('category-changed')
          }
        },
        data () {
            return {
                categories: []
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
        margin-top: ;
    }

    li {
        display: inline-block;
        margin: 10px 10px 0 0 ;
    }

    a {
        color: #42b983;
    }
</style>
