<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Laboratory Results</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Past Medical History</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="lr_past_medical_history" placeholder="Past Medical History" v-model="laboratoryResults.lr_past_medical_history" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Personal and Social History</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="lr_personal_social_history" placeholder="Personal and Social History" v-model="laboratoryResults.lr_personal_social_history" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Functional History</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="lr_functional_history" placeholder="Functional History" v-model="laboratoryResults.lr_functional_history" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['laboratoryResults'],

        methods: {
            
            change() {
                this.$emit('input', this.laboratoryResults)
            }
            
        }

    }
</script>
