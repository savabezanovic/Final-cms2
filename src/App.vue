<template>


    <nav class="navbar-fixed-top-center new-margin">

        <ul class="nav nav-pills new-margin-categories">

            <li role="presentation" class="active"><a href="/#/">Home</a></li>

          <li role="presentation"><a href="/#/staff">Staff</a></li>
          <li role="presentation"><a href="/#/products">Products</a></li>
          <li role="presentation"><a href="/#/categories">Category</a></li>
            <li role="presentation" class="admin-login"><a href="/admin/login">Admin login</a></li>
        </ul>
      <router-view></router-view>
      </nav>



</template>

<script>
  export default {
    name: 'app'

  }
</script>

<style>

    .new-margin{
        margin-top: 10px;
    }

    .new-margin-categories{
        margin-bottom: 20px;
    }

</style>
