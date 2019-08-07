<template>
    <div>
        <div class="container body">
          <div class="main_container">

              <!-- side navigation -->
              <div class="col-md-3 left_col">
                  <side-nav></side-nav>
              </div>

              <!-- top navigation -->
              <div class="top_nav">
                  <top-nav></top-nav>
              </div>
              <!-- /top navigation -->

              <!-- page content -->
              <div class="right_col" role="main">

                  <router-view></router-view>

              </div>
          </div>
        </div>
    </div>


    
</template>
<script>
    import SideNav from './Common/SideNav.vue';
    import TopNav from './Common/TopNav.vue';

    export default {
       
       components: {
            SideNav,
            TopNav
        }

    }
</script>