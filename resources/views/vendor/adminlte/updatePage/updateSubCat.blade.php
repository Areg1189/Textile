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
                    <form action="{{route('updateSubCategory')}}" method="POST" class="formImage"
                          enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="upload-demo5">
                                        <div class="form-group">
                                            <label for="file">Choose Cover Image</label>
                                            <input type="file" name="" id="file" class="upload3 form-control">
                                        </div>

                                        <span class="span_reset_file">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="upload-demo6">
                                        <div class="form-group">
                                            <label for="file">Choose Image</label>
                                            <input type="file" name="" id="file" class="upload2 form-control">
                                        </div>

                                        <span class="span_reset_file">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Old Image</h3>
                                <img src="{{asset('images/subCategory/'.$product->image_name)}}" class="img-rounded"
                                     alt="Cinque Terre" width="100%">
                            </div>
                            <div class="col-sm-6">
                                <h3>Old Image</h3>
                                <img src="{{asset('images/subCategory/'.$product->general_image)}}" class="img-rounded"
                                     alt="Cinque Terre" width="100%">
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
                            <div class="col-sm-12 text-center">
                                <i class="fa fa-filter" aria-hidden="true"></i>
                                <b>Filter</b>
                            </div>
                        </div>
                        @php($i = 0)
                        @foreach($filters as $filter)
                            <div class="panel-group accordion" data-target="{{$i}}">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$i}}">
                                            <h4 class="panel-title text-center">
                                                {{$filter->translate(session('locale'))->name}}
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapse_{{$i}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @foreach($filter->subs as  $sub)
                                                @if(count($sub->values) < 1)
                                                    <div class="col-sm-11 col-sm-offset-1">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="btn-group btn-group-vertical"
                                                                     data-toggle="buttons">
                                                                    <label class="btn">
                                                                        <input type="checkbox" name="subFilter[]"
                                                                               value="{{$sub->id}}">
                                                                        <i class="fa fa-square-o fa-2x"></i>
                                                                        <i class="fa fa-check-square-o fa-2x"></i>
                                                                        <span> {{$sub->translate(session('locale'))->name}}</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-sm-11 col-sm-offset-1">
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading">
                                                                <div class="btn-group btn-group-vertical"
                                                                     data-toggle="buttons">
                                                                    <label class="btn">
                                                                        <input type="checkbox" name="subFilter[]"
                                                                               value="{{$sub->id}}">
                                                                        <i class="fa fa-square-o fa-2x"></i>
                                                                        <i class="fa fa-check-square-o fa-2x"></i>
                                                                        <span> {{$sub->translate(session('locale'))->name}}</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body">
                                                                @foreach($sub->values as $value)
                                                                    <div class="col-sm-10 col-sm-offset-2">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-body">
                                                                                <span> {{$value->translate(session('locale'))->name}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php($i++)
                        @endforeach
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <input type="hidden" name="prod" value="{{$product->link}}">
                        <input type="hidden" name="image">
                        <input type="hidden" name="imageGeneral">
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<script>
    $uploadCrop1 = $(".upload-demo6").croppie({
        enableExif: true,
        viewport: {
            width: 370,
            height: 300
        },
        boundary: {
            width: 470,
            height: 400
        }
    });

    w1 = 370;
    h1 = 300;


    $uploadCrop = $(".upload-demo5").croppie({
        enableExif: true,
        viewport: {
            width: 500,
            height: 50
        },
        boundary: {
            width: 600,
            height: 60
        }
    });

    w = 2000;
    h = 400;

</script>