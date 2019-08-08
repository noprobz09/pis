<template>
    <div claass="clearfix">
        <div class="x_panel">
            <div class="x_title">
                <h2>Images</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="clearfix">
                    <button type="button" class="btn btn-sm btn-success" data-target="#upload-images-modal" data-toggle="modal" data-backdrop="static">Add <i class="fa fa-plus"></i></button>
                </div>
                
                <div class="row">
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" :src="URL.asset.images + '/sample-diagnosis.jpg'" alt="image">
                                <div class="mask">
                                <p>Your Text</p>
                                <div class="tools tools-bottom">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Diagnosis 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" :src="URL.asset.images + '/sample-diagnosis.jpg'" alt="image">
                                <div class="mask">
                                <p>Your Text</p>
                                <div class="tools tools-bottom">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Diagnosis 2</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="upload-images-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Images</h4>
                        </div>
                        <div class="modal-body">
                            <div class="clearfix">
                                <label>Image(s)</label>
                                <input type="file" name="images" multiple />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>

</template>
<script>
export default {

    computed: {
        URL() {
            return URL;
        }
    }
    
}
</script>
