<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        {{--<h4 class="modal-title">(IMAGE SIZE 1920 x 1080)</h4>--}}
    </div>
    <div class="modal-body">
        <div class="modal-body">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Update Category</h3>
            </div>
            <div class="box box-primary">

                <div class="box-body">
                    <form action="{{route('updateSubCategory')}}" method="POST" class="formImage" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="upload-demo3" style="width:350px; position: relative;">
                                    <input type="file"  id="file" class="input-file  upload2"
                                           data-image="imageVarietyUpdate">
                                    <label for="file" class="btn btn-tertiary js-labelFile">
                                        <i class="icon fa fa-check"></i>
                                        <span class="js-fileName">Change a Image</span>
                                    </label>
                                    <span class="span_reset_file"><i class="fa fa-times"
                                                                     aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h3>Old Image</h3>
                                <img src="{{asset('images/subCategory/'.$product->image_name)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>Հայերեն</label>
                                    <input type="text" name="hy_name" class="form-control" placeholder="Հայերեն"
                                           value="{{$product->translate('hy')->name}}" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>English</label>
                                    <input type="text" name="en_name" class="form-control" placeholder="English"
                                           value="{{$product->translate('en')->name}}" required>

                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>Русский</label>
                                    <input type="text" name="ru_name" class="form-control" placeholder="Русский"
                                           value="{{$product->translate('ru')->name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <input type="hidden" name="prod" value="{{$product->link}}">
                        <input type="hidden" name="image">
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<script>
    $uploadCrop = $(".upload-demo3").croppie({
        enableExif: true,
        viewport: {
            width: 370,
            height: 300
        },
        boundary: {
            width: 370,
            height: 300
        }
    });
</script>