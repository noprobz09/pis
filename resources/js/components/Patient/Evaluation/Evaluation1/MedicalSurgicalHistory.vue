<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>MEDICAL/SURGICAL HISTORY</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Problem</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="msh_problem" placeholder="Problem" v-model="surgicalHistory.msh_problem" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Symptoms had within the past year</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="msh_symptoms_past_year" placeholder="Symptoms had within the past year" v-model="surgicalHistory.msh_symptoms_past_year" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Have ever had surgery? [Yes/No]</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="" value="1" name="msh_had_surgery" v-model="surgicalHistory.msh_had_surgery" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="msh_had_surgery" v-model="surgicalHistory.msh_had_surgery" @input="change"> No
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix" style="display:none">
                                <div class="clearfix">
                                    <input type="text" class="form-control" name="msh_surgery_a" placeholder="Surgery" v-model="surgicalHistory.msh_surgery_a" @input="change">
                                </div>
                                <div class="clearfix">
                                    <input type="text" class="form-control" name="msh_date" placeholder="Date" v-model="surgicalHistory.msh_date" @input="change">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>For men only</h3>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Diagnose with prostate cancer?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_diagnose_prostate_cancer" v-model="surgicalHistory.msh_diagnose_prostate_cancer" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_prostate_cancer" v-model="surgicalHistory.msh_prostate_cancer" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>For women only</h3>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Diagnosed with Pelvic inflammatory disease?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_pelvic_inflammatory_disease" v-model="surgicalHistory.msh_pelvic_inflammatory_disease" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_pelvic_inflammatory_disease" v-model="surgicalHistory.msh_pelvic_inflammatory_disease" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Endometriosis?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_endometriosis" v-model="surgicalHistory.msh_endometriosis" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_endometriosis" v-model="surgicalHistory.msh_endometriosis" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Trouble with period?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_trouble_period" v-model="surgicalHistory.msh_trouble_period" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_trouble_period" v-model="surgicalHistory.msh_trouble_period" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Complicated pregnancies or deliveries?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_complicated_pregnancy" v-model="surgicalHistory.msh_complicated_pregnancy" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_complicated_pregnancy" v-model="surgicalHistory.msh_complicated_pregnancy" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Pregnant, or think might be pregnant?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                    <input type="radio" checked="" value="1" name="msh_pregnant" v-model="surgicalHistory.msh_pregnant" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="0" name="msh_pregnant" v-model="surgicalHistory.msh_pregnant" @input="change"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Other gynecological  or obstetrical difficulties?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="clearfix">
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="" value="1" name="msh_gynecological_problem" v-model="surgicalHistory.msh_gynecological_problem" @input="change"> Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="msh_gynecological_problem" v-model="surgicalHistory.msh_gynecological_problem" @input="change"> No
                                    </label>
                                </div>
                                <div class="clearfix" style="display:none">
                                    <div class="clearfix">
                                        <textarea type="text" class="form-control" name="msh_gynecological_problem_desc" placeholder="Description" v-model="surgicalHistory.msh_gynecological_problem_desc" @input="change"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['surgicalHistory'],

        methods: {
            
            change() {
                this.$emit('input', this.surgicalHistory)
            }
            
        }

    }
</script>
