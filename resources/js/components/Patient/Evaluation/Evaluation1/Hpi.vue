<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>HPI: Medications</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">C/C - Concurrent Conditions</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="concurrent_condition" placeholder="Concurrent Conditions" v-model="hpi.concurrent_condition" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Onset Date of Problem</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="onset_date_problem" placeholder="Onset Date of Problem" v-model="hpi.onset_date_problem" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">What happened?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="what_happen" placeholder="What happened?" v-model="hpi.what_happen" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Where it happened?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="where_happen" placeholder="Where it happened?" v-model="hpi.where_happen" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Why it happened?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="why_happen" placeholder="Why it happened?" v-model="hpi.why_happen" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">How it happened?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="how_happen" placeholder="How it happened?" v-model="hpi.how_happen" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Intervention Applied(Before)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="intervention_before" placeholder="Intervention Applied(Before)" v-model="hpi.intervention_before" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Intervention Applied(Now)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="intervention_now" placeholder="Intervention Applied(Now)" v-model="hpi.intervention_now" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Effect of the Intervention Applied</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="intervention_effect" placeholder="Effect of the Intervention Applied" v-model="hpi.intervention_effect" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dosage</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="dosage" placeholder="Dosage" v-model="hpi.dosage" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Frequency</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="frequency" placeholder="Frequency" v-model="hpi.frequency" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Drug Classification</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="drug_classification" placeholder="Drug Classification" v-model="hpi.drug_classification" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Indication</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="indication" placeholder="Indication" v-model="hpi.indication" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adverse Effects</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="adverse_effect" placeholder="Adverse Effects" v-model="hpi.adverse_effect" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['hpi'],

        methods: {
            
            change() {
                this.$emit('input', this.hpi)
            }

        },

        created() {
            console.log(this.hpi);
        }

    }
</script>