<template>

    <div class="clearfix">
        <form @submit.prevent="submit">
            
            <!-- form -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Personal Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="clearfix form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" 
                                    class="form-control" 
                                    :class="{ 'hasError': $v.form.first_name.$error }" 
                                    name="first_name" 
                                    placeholder="First Name" 
                                    v-model="form.first_name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.last_name.$error }" name="last_name" placeholder="Last Name" v-model="form.last_name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.middle_name.$error }" name="middle_name" placeholder="Middle Name" v-model="form.middle_name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Suffix</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="suffix_name" placeholder="Suffix Name" v-model="form.suffix_name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Street</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.street.$error }" name="street" placeholder="Street" v-model="form.street" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Barangay</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.barangay.$error }" name="barangay" placeholder="Barangay" v-model="form.barangay" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Town/City</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.town_city.$error }" name="town_city" placeholder="Town/City" v-model="form.town_city" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Province</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.province.$error }" name="province" placeholder="Province" v-model="form.province" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.dob.$error }" name="dob" placeholder="Date of Birth" v-model="form.dob" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.age.$error }" name="age" placeholder="Age" v-model="form.age" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sex</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="sex" :class="{ 'hasError': $v.form.sex.$error }" class="form-control" v-model="form.sex" >
                                    <option value="">Please select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="civil_status" class="form-control" :class="{ 'hasError': $v.form.civil_status.$error }" v-model="form.civil_status" >
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
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.nationality.$error }" name="nationality" placeholder="Nationality" v-model="form.nationality" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.religion.$error }" name="religion" placeholder="Religion" v-model="form.religion" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Handednes</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="handednes" class="form-control" :class="{ 'hasError': $v.form.handednes.$error }" v-model="form.handednes" >
                                    <option value="">Please select</option>
                                    <option value="1">Right Handed</option>
                                    <option value="2">Left Handed</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Education</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.education.$error }" name="education" placeholder="Education" v-model="form.education" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employment/Work</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.employment.$error }" name="employment" placeholder="Employment/Work" v-model="form.employment" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Referring Physician</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.referring_physician.$error }" name="referring_physician" placeholder="Referring Physician" v-model="form.referring_physician" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Medical Diagnosis</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea  class="form-control" :class="{ 'hasError': $v.form.medical_diagnosis.$error }" name="medical_diagnosis" placeholder="Medical Diagnosis"  v-model="form.medical_diagnosis" ></textarea>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Reasons for Referral</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea  class="form-control" :class="{ 'hasError': $v.form.reasons_for_referral.$error }" name="reasons_for_referral" placeholder="Reasons for Referral"  v-model="form.reasons_for_referral" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Initial Evaluation</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.date_initial_evaluation.$error }" name="date_initial_evaluation" placeholder="Date of Initial Evaluation"  v-model="form.date_initial_evaluation" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Informants and Reliability</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea  class="form-control" :class="{ 'hasError': $v.form.informants_reliability.$error }" name="informants_reliability" placeholder="Informants and Reliability"  v-model="form.informants_reliability" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" :class="{ 'hasError': $v.form.contact_number.$error }" name="contact_number" placeholder="Contact Number"  v-model="form.contact_number" />
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


            <!-- action -->
            <div class="action text-right">
                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
                <button class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
            </div>
        </form>
    </div>
</template>

<script type="text/javascript">

    import { required, email, minLength } from "vuelidate/lib/validators";    
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    import { Toaster } from '../../helpers/Toaster';

    const PatientRepository = RepositoryFactory.get('patients');

    
    export default {
    
        data() {
            return {

                form: {
                    first_name: "",
                    last_name: "",
                    middle_name: "",
                    suffix_name: "",
                    street: "",
                    barangay: "",
                    town_city: "",
                    province: "",
                    age: "",
                    dob: "",
                    sex: "",
                    civil_status: "",
                    nationality: "",
                    religion: "",
                    handednes: "",
                    education: "",
                    employment: "",
                    referring_physician: "",
                    medical_diagnosis: "",
                    reasons_for_referral: "",
                    date_initial_evaluation: "",
                    informants_reliability: "",
                    contact_number: "",
                }

            }
        },

        validations: {
            form: {
                first_name: { required },
                last_name: { required },
                middle_name: { required },
                suffix_name: {required },
                street: { required },
                barangay: { required },
                town_city: { required },
                province: { required },
                age: { required },
                dob: { required },
                sex: { required },
                civil_status: { required },
                nationality: { required },
                religion: { required },
                handednes: { required },
                education: { required },
                employment: { required },
                referring_physician: { required },
                medical_diagnosis: { required },
                reasons_for_referral: { required },
                date_initial_evaluation:{ required },
                informants_reliability: { required },
                contact_number: { required }
            }
        },


        methods: {
            submit() {

                this.$v.form.$touch();
                
                //return errors if found
                if(this.$v.form.$error) return
                
                // to form submit after this
                this.create();
            
            },


            async create() {

                const create = await PatientRepository.create(this.form);

                Toaster.notification(create.data);

            }


        }

    }
</script>