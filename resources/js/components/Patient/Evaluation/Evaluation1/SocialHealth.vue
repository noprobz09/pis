<template>
    <div class="x_panel">
        <div class="x_title">
            <h2>Social/Health Habits</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="clearfix form-horizontal form-label-left">
                <h3>Smoking</h3>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Currently smoke tobacco?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="radio">
                            <label>
                            <input type="radio" checked="" value="1" name="currently_smoke_tobacco" v-model="socialHealth.currently_smoke_tobacco" @input="change"> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" value="0" name="currently_smoke_tobacco" v-model="socialHealth.currently_smoke_tobacco" @input="change"> No
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Smoked in past?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="radio">
                            <label>
                            <input type="radio" checked="" value="0" name="smoked_in_past" v-model="socialHealth.smoked_in_past" @input="change"> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" value="1" name="smoked_in_past" v-model="socialHealth.smoked_in_past" @input="change"> No
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <h3>Alcohol</h3>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                    How many days per week do you drink beer, wine, or other alcoholic beverages, on average?
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" name="days_alcohol_consume" placeholder="Number of days alcohol consume" v-model="socialHealth.days_alcohol_consume" @input="change">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                    If one beer, or glass of wine, or one cocktail equals one drink, how many drinks do you have, on an average day?
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" name="drink_average_day" placeholder="Number of drinks on average day" v-model="socialHealth.drink_average_day" @input="change">
                    </div>
                </div>
                <hr>
                <h3>Exercise</h3>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Do you exercise beyond normal daily activities and chores?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="radio">
                            <label>
                            <input type="radio" checked="" value="0" name="exercise_beyond_normal_activities" v-model="socialHealth.exercise_beyond_normal_activities" @input="change"> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" value="1" name="exercise_beyond_normal_activities" v-model="socialHealth.exercise_beyond_normal_activities" @input="change"> No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['socialHealth'],

        methods: {
            
            change() {
                this.$emit('input', this.socialHealth)
            }
            
        }

    }
</script>
