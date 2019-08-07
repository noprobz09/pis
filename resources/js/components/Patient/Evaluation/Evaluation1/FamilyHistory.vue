<template>
    <div class="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Family History</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="clearfix form-horizontal form-label-left">
                    <h3>Disease 1</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disease</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease1_history" placeholder="Disease 1" v-model="familyHistory.fh_disease1_history" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Paternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease1_paternal" placeholder="Paternal" v-model="familyHistory.fh_disease1_paternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Maternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease1_maternal" placeholder="Maternal" v-model="familyHistory.fh_disease1_maternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fraternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease1_fraternal" placeholder="Fraternal" v-model="familyHistory.fh_disease1_fraternal" @input="change"></textarea>
                        </div>
                    </div>
                    <hr>
                    <h3>Disease 2</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disease</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease2_history" placeholder="Disease 2" v-model="familyHistory.fh_disease2_history" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Paternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease2_paternal" placeholder="Paternal" v-model="familyHistory.fh_disease2_paternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Maternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease2_maternal" placeholder="Maternal" v-model="familyHistory.fh_disease2_maternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fraternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease2_fraternal" placeholder="Fraternal" v-model="familyHistory.fh_disease2_fraternal" @input="change"></textarea>
                        </div>
                    </div>
                    <hr>
                    <h3>Disease 3</h3>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disease</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease3_history" placeholder="Disease 3" v-model="familyHistory.fh_disease3_history" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Paternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease3_paternal" placeholder="Paternal" v-model="familyHistory.fh_disease3_paternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Maternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease3_maternal" placeholder="Maternal" v-model="familyHistory.fh_disease3_maternal" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fraternal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_disease3_fraternal" placeholder="Fraternal" v-model="familyHistory.fh_disease3_fraternal" @input="change"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Findings</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_findings" placeholder="Findings" v-model="familyHistory.fh_findings" @input="change"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Significance</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="fh_significance" placeholder="Significance" v-model="familyHistory.fh_significance" @input="change"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['familyHistory'],

        methods: {
            
            change() {
                this.$emit('input', this.familyHistory)
            }

        }

    }
</script>
