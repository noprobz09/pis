<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Home Situation</h2>
                <div class="clearfix"></div>
            </div>
           
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of House</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="type_house" placeholder="Type of House" v-model="homeSituation.type_house" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Stairs</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="stairs" placeholder="Stairs" v-model="homeSituation.stairs" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Flooring</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="type_floor" placeholder="Type of Flooring" v-model="homeSituation.type_floor" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fixtures or Barriers</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fixtures_barriers" placeholder="Fixtures or Barriers" v-model="homeSituation.fixtures_barriers" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Patient's Room</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="patient_room" placeholder="Patient's Room" v-model="homeSituation.patient_room" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['homeSituation'],

        methods: {
            
            change() {
                this.$emit('input', this.homeSituation)
            }

        }

    }
</script>


                    