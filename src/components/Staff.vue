<template>
    <div>
    <h1>Hello Staff</h1>
    <table class="table table-hover table-inverse table-bordered" >
        <thead>
        <tr >

            <th>Name</th>
            <th>Profesion</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="member in staff">

            <td>{{member.name}}</td>
            <td>{{member.profesion}}</td>
            <td>{{member.phone}}</td>
        </tr>
        </tbody>
    </table>

</template>
</div>
<script>
    export default {
        name: 'staff',
        mounted() {
            var that = this;
            axios.get('/api/staff')
                    .then(function (response) {
                        that.staff = response.data
                    });
        },
        data () {
            return {
                staff: []
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
        color: #42b983;
    }
</style>
