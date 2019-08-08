<template>
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="#" class="site_title"><i class="fa fa-user-md"></i> <span>Patient Info System!</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu prile quick info -->
            <div class="profile">
                <div class="profile_pic">
                    <img :src="URL.asset.images + '/img.jpg'" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>John</h2>
                </div>
            </div>
            <!-- /menu prile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">

                    <!-- nav links -->
                    <h3>&nbsp;</h3>
                    
                    <ul class="nav side-menu">
                        <li><a href="javascript:void(0);" @click.prevent="toggleNavbar(1)"><i class="fa fa-medkit"></i> Patient <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu hide" v-bind:class="{ show: show && current == 1, hide: !show  && current == 1 }">
                                <li><router-link :to="{ name: 'patientAdd' }"><i class="fa fa-plus"></i> Add</router-link></li>
                                <li><router-link :to="{ name: 'patientLists' }"><i class="fa fa-plus"></i> Lists</router-link></li>
                            </ul>
                        </li>    

                        <li><a href="javascript:void(0);" @click.prevent="toggleNavbar(2)"><i class="fa fa-bar-chart-o"></i> Analytics <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu hide" v-bind:class="{ show: show  && current == 2, hide: !show  && current == 2 }">
                                <li><a href="#">Patient's Per Month</a>
                                </li>
                                <li><a href="#">Patient's Location</a>
                                </li>
                                <li><a href="#">Patient's Age</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- /sidebar menu -->

        </div>
        
    
</template>

<script>
    
    export default {

        data() {
            return {
                show: false,
                current: 0
            }
        },
        methods: {

            toggleNavbar(current) {
                this.show = !this.show;
                this.current = current;
            }
            
        },

        computed: {
            URL() {
                return URL;
            }
        }
    }   
    
</script>

