<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ancillary Service</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <h3>X-Ray</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Radiographic Studies:APL</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="xray_apl" placeholder="Radiographic Studies:APL" v-model="ancillaryService.xray_apl" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Results</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="xray_results" placeholder="Results" v-model="ancillaryService.xray_results" @input="change">
                        </div>
                    </div>
                    <hr>
                    <h3>CT Scan</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Computed Tomography</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="ct" placeholder="Computed Tomography" v-model="ancillaryService.ct" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Results</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="ctscan_results" placeholder="Results" v-model="ancillaryService.ctscan_results" @input="change">
                        </div>
                    </div>
                    <hr>
                    <h3>Magnetic Resonance Imaging</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">T1-weighted</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="mri_t1" placeholder="T1-weighted" v-model="ancillaryService.mri_t1" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">T2-weighted</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="mri_t2" placeholder="T2-weighted" v-model="ancillaryService.mri_t2" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">FLAIR</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="mri_flair" placeholder="FLAIR" v-model="ancillaryService.mri_flair" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Spin Echo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="mri_spin_echo" placeholder="Spin Echo" v-model="ancillaryService.mri_spin_echo" @input="change">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Results</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="mri_results" placeholder="Results" v-model="ancillaryService.mri_results" @input="change">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['ancillaryService'],

        methods: {
            
            change() {
                this.$emit('input', this.ancillaryService)
            }

        }

    }
</script>