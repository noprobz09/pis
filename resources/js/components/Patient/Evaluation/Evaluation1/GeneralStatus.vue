<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>General Health Status</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Rate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="radio">
                                <label>
                                <input type="radio" checked="" value="1" name="general_health_status" v-model="generalStatus.general_health_status" @input="change"> Excellent
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" value="2" name="general_health_status" v-model="generalStatus.general_health_status" @input="change"> Good
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" value="3" name="general_health_status" v-model="generalStatus.general_health_status" @input="change"> Fair
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" value="4" name="general_health_status" v-model="generalStatus.general_health_status" @input="change"> Poor
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Had any major life changes during the past year? <br><small>(eg. New baby, job change, death of family member)</small></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="radio">
                                <label>
                                <input type="radio" checked="" value="0" name="major_life_changes_past_year" v-model="generalStatus.major_life_changes_past_year" @input="change"> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" value="1" name="major_life_changes_past_year" v-model="generalStatus.major_life_changes_past_year" @input="change"> No
                                </label>
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

        props:['generalStatus'],

        methods: {
            
            change() {
                this.$emit('input', this.generalStatus)
            }

        }
        
    }
</script>
