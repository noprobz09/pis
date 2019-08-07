<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Findings</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Findings</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="inital_evaluation_findings1" placeholder="Description" v-model="findingsOne.inital_evaluation_findings1" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['findingsOne'],

        methods: {
            
            change() {
                this.$emit('input', this.findingsOne)
            }

        }

    }
</script>