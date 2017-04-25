<template>
<div>


         <div class="col-md-2">
            <nav class="menu-left">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="/#/">HOME</a></li>
                            <li class="active"><a href="/#/staff">STAFF</a></li>
                            <li class="active"><a href="/#/products">PRODUCTS</a></li>
                            <li class="active"><a href="/#/categories">CATEGORY</a></li>
                            <li class="active"><a href="/admin/login">ADMIN LOGIN</a></li>
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