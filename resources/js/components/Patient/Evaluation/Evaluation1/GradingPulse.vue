<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Numnerical Scale for Grading Pulse Quality (Strength)</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Grade</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="gpq_grade" placeholder="Grade" v-model="gradingPulse.gpq_grade" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pulse</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="gpq_pulse" placeholder="Pulse" v-model="gradingPulse.gpq_pulse" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="gpq_desc" placeholder="Description" v-model="gradingPulse.gpq_desc" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['gradingPulse'],

        methods: {
            
            change() {
                this.$emit('input', this.gradingPulse)
            }

        }

    }
</script>