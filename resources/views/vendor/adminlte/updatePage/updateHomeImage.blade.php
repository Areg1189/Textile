<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <h3 class="box-title">Update</h3>
    </div>
    <div class="modal-body">
        <div class="modal-body">
            <div class="box box-primary">

                <div class="box-body">
                    <form action="{{route('updateHomeImage')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">Image Upluad</div>
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div id="upload-demo" style="width:350px"></div>
                                        </div>
                                        <div class="col-md-4" style="padding-top:30px;">
                                            <strong>Select Image:</strong>
                                            <br/>
                                            <input type="file" id="upload">
                                            <br/>
                                            <button class="btn btn-success upload-result">Upload Image</button>
                                        </div>
                                        <div class="col-md-4" style="">
                                            <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>Հաըերեն</label>
                                    <input type="text" name="hy_name" class="form-control" placeholder="Հաըերեն"
                                           value="{{$product->translate('hy')->text_1}}" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>English</label>
                                    <input type="text" name="en_name" class="form-control" placeholder="English"
                                           value="{{$product->translate('en')->text_2}}" required>

                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <label>Русский</label>
                                    <input type="text" name="ru_name" class="form-control" placeholder="Русский"
                                           value="{{$product->translate('ru')->text_3}}" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <input type="hidden" name="prod" value="{{$product->code}}">
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>