<template>
    <div class="clearfix">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2><i class="fa fa-bars"></i>Juan Dela Cruz</h2>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#profile-tab" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#images-tab" role="tab" data-toggle="tab" aria-expanded="false">Images</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#evaluation-tests-analysis" role="tab" data-toggle="tab" aria-expanded="false">Evaluation, Tests & Analysis</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#payment-tab" role="tab" data-toggle="tab" aria-expanded="false">Payment</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <!-- profile -->
                            <div role="tabpanel" class="tab-pane fade active in" id="profile-tab" aria-labelledby="home-tab">	                
                                <Profile></Profile>
                            </div>

                             <!-- Medial lists -->
                            <div role="tabpanel" class="tab-pane fade" id="images-tab" aria-labelledby="profile-tab">
                                <Media></Media>
                            </div>

                            <!-- Test & Analysis -->
                            <div role="tabpanel" class="tab-pane fade" id="evaluation-tests-analysis" aria-labelledby="profile-tab">
                                <Evaluation></Evaluation>
                            </div>

                            <!-- Payment Tab-->
                            <div role="tabpanel" class="tab-pane fade" id="payment-tab" aria-labelledby="profile-tab">
                                <p>Payment tab</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">

    import Profile from '../Patient/Profile';
    import Evaluation from '../Patient/Evaluation';
    import Media from '../Patient/Media';
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    import { Toaster } from '../../helpers/Toaster';

    const PatientRepository = RepositoryFactory.get('patients');

    
    export default {
    
        components: {
            Profile,
            Evaluation,
            Media
        },

        methods: {
            async fetch() {

                // const fetch = await PatientRepository.view(this.$route.params.id);

                // console.log(fetch.data.patients);
                //this.patients = fetch.data.patients;
            }
        },

        created() {
            //this.fetch(); 
        }

       

    }
</script>