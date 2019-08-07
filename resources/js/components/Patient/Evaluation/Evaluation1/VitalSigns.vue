<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Vital Signs</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">a BP (mmHg)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_abp" placeholder="a BP (mmHg)" v-model="vitalSigns.vs_abp" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">p BP (mmHg)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_pbp" placeholder="p BP (mmHg)" v-model="vitalSigns.vs_pbp" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PR (bpm)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_pr" placeholder="PR (bpm)" v-model="vitalSigns.vs_pr" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RR (cpm)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_rr" placeholder="RR (cpm)" v-model="vitalSigns.vs_rr" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">T° (Celsius)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_t" placeholder="T° (Celsius" v-model="vitalSigns.vs_t" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">O2 Saturation (%)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_O2_saturation" placeholder="O2 Saturation (%)" v-model="vitalSigns.vs_O2_saturation" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Brachial Artery</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_branchial_artery" placeholder="Brachial Artery" v-model="vitalSigns.vs_branchial_artery" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Radial Artery</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_radial_artery" placeholder="Radial Artery" v-model="vitalSigns.vs_radial_artery" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Diaphragmatic</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_diaphragmatic" placeholder="diaphragmatic" v-model="vitalSigns.vs_diaphragmatic" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Axilla</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="vs_axilla" placeholder="Axilla" v-model="vitalSigns.vs_axilla" @input="change">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['vitalSigns'],

        methods: {
            
            change() {
                this.$emit('input', this.vitalSigns)
            }
            
        }

    }
</script>
