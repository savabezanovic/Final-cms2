<template>
<div>


         <div class="col-md-2">
            <nav class="menu-left">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="/#/"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                            <li class="active"><a href="/#/staff"><span class="glyphicon glyphicon-user"></span> STAFF</a></li>
                            <li class="active"><a href="/#/products"><span class="glyphicon glyphicon-apple"></span> PRODUCTS</a></li>
                            <li class="active"><a href="/#/categories"><span class="glyphicon glyphicon-th-list"></span> CATEGORY</a></li>
                            <li class="active"><a href="/admin/login"><span class="glyphicon glyphicon-book"></span> ADMIN LOGIN</a></li>
                        </ul>
            </nav>
    </div>

        <div class="col-md-9">
            <router-view></router-view>
        </div>

</div>



</template>

<script>
  export default {
    name: 'app',

  }


</script>

<style >

</style>