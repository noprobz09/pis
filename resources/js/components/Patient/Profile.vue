<template>
    <form name="patient-add" @submit.prevent="submit">
        <div class="x_panel">
            <div class="x_title">
            <h2>Personal Informations</h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.fname" name="first_name" placeholder="First Name" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.lname" name="last_name" placeholder="Last Name"  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.mname" name="middle_name" placeholder="Middle Name"  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Suffix</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.suffix" name="suffix_name" placeholder="Suffix Name">
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Street</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" name="street" v-model="patient.street" placeholder="Street" required="">
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Barangay</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.brgy" name="barangay" placeholder="Barangay" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Town/City</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.town" name="town_city" placeholder="Town/City"  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Province</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.province" name="province" placeholder="Province" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.dob" name="dob" placeholder="Date of Birth" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.age" name="age" placeholder="Age" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sex</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select v-model="patient.sex" name="sex" class="form-control" required="">
                                <option value="">Please select</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select v-model="patient.civil_status" name="civil_status" class="form-control" required="">
                                <option value="">Please select</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Widowed</option>
                                <option value="4">Separated</option>
                                <option value="5">Divorced</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nationality</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.nationality" name="nationality" placeholder="Nationality" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.religion" name="religion" placeholder="Religion" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Handednes</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select v-model="patient.handednes" name="handednes" class="form-control" required="">
                                <option value="">Please select</option>
                                <option value="1">Right Handed</option>
                                <option value="2">Left Handed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Education</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.educ" name="education" placeholder="Education" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employment/Work</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.work" name="employment" placeholder="Employment/Work" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Referring Physician</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.ref_physician" name="referring_physician" placeholder="Referring Physician" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Medical Diagnosis</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" v-model="patient.med_diagnosis" name="medical_diagnosis" placeholder="Medical Diagnosis" required=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Reasons for Referral</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" v-model="patient.ref_reasons" name="reasons_for_referral" placeholder="Reasons for Referral" required=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Initial Evaluation</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.date_evaluation" name="date_initial_evaluation" placeholder="Date of Initial Evaluation" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Informants and Reliability</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" v-model="patient.informants_reliability" name="informants_reliability" placeholder="Informants and Reliability" required=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" v-model="patient.contact_no" name="contact_number" placeholder="Contact Number">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="action text-right">
            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update</button>
            <button class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
        </div>
    </form>
</template>

<script type="text/javascript">

    import VueRouter from 'vue-router';
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    import { Toaster } from '../../helpers/Toaster';

    const PatientRepository = RepositoryFactory.get('patients');

    
    export default {
    
        data() {
            return {
                patient: {}
            }
        },

        methods: {

            submit() {

                console.log('test');return false;

                //this.$v.form.$touch();
                
                //return errors if found
                //if(this.$v.form.$error) return
                
                // to form submit after this
                this.update();
            
            },


            async update() {

                const create = await PatientRepository.create(this.form);

                Toaster.notification(create.data);

            },

            async view() {

                //console.log(this.patient);

                const fetch = await PatientRepository.view(this.$route.params.id);

                this.patient = fetch.data;

                //console.log(this.patient);
            }

        },
        

        created() {
            this.view();
        }

    }
</script>
