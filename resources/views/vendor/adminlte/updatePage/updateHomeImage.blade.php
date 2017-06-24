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

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-4" style="padding-top:30px;">
                                    <strong>Select Image:</strong>
                                    <br/>
                                    <input type="file" class="upload2">
                                    <br/>
                                    <button class="btn btn-success upload-result">Upload Image</button>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="upload-demo2" style="width:350px"></div>
                                </div>


                            </div>

                        </div>

                        <div class="row text-center">
                            <div class="col-sm-4">
                                <h3>Հաըերեն</h3>
                            </div>
                            <div class="col-sm-4">

                                <h3>English</h3>
                            </div>
                            <div class="col-sm-4">
                                <h3>Русский</h3>
                            </div>
                        </div>


                        <div class="row border_radius text-center">
                            <h4>Text 1</h4>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="hy_text_1" class="form-control" placeholder="Հաըերեն"
                                           value="{{$product->translate('hy')->text_1}}" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="en_text_1" class="form-control" placeholder="English"
                                           value="{{$product->translate('en')->text_1}}" required>

                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="ru_text_1" class="form-control" placeholder="Русский"
                                           value="{{$product->translate('ru')->text_1}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row border_radius text-center">
                            <h4>Text 2</h4>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="hy_text_2" class="form-control" placeholder="Հաըերեն"
                                           value="{{$product->translate('hy')->text_2}}" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="en_text_2" class="form-control" placeholder="English"
                                           value="{{$product->translate('en')->text_2}}" required>

                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="ru_text_2" class="form-control" placeholder="Русский"
                                           value="{{$product->translate('ru')->text_2}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row border_radius text-center">
                            <h4>Text 3</h4>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="hy_text_3" class="form-control" placeholder="Հաըերեն"
                                           value="{{$product->translate('hy')->text_3}}" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="en_text_3" class="form-control" placeholder="English"
                                           value="{{$product->translate('en')->text_3}}" required>

                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-center">
                                    <input type="text" name="ru_text_3" class="form-control" placeholder="Русский"
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
<style>
    .modal-dialog {
        width: 80% !important;
    }
</style>
<script>
    $uploadCrop = $(".upload-demo2").croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: {

        },
        boundary: {

        }
    });
    $(".upload2").on("change", function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie("bind", {
                url: e.target.result
            }).then(function(){

            });
        };
        reader.readAsDataURL(this.files[0]);
    });

    {{--$('.upload-result').on("click", function (ev) {--}}
        {{--$uploadCrop.croppie("result", {--}}
            {{--type: "canvas",--}}
            {{--size: "viewport"--}}
        {{--}).then(function (resp) {--}}

            {{--$.ajax({--}}
                {{--url: "{{route('updateHomeImage')}}",--}}
                {{--type: "POST",--}}
                {{--data: {"image":resp , _token:$('meta[name="csrf-token"]').attr("content")},--}}
                {{--success: function (data) {--}}
                    {{--html = '<img src="' + resp + '" />';--}}
                    {{--$(".upload-demo-i").html(html);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
</script>