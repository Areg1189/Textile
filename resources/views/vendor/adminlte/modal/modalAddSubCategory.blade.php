<div id="modalAddSubCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Add Sub Category</h3>
                </div>
                <div class="box box-primary">

                    <div class="box-body">

                        <form action="{{route('addSubCategory')}}" class="formImage" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="upload-demo4" style="width:350px; position: relative;">
                                        <input type="file" name="" id="file" class="input-file  upload2"
                                               data-image="imageVarietyUpdate">
                                        <label for="file" class="btn btn-tertiary js-labelFile">
                                            <i class="icon fa fa-check"></i>
                                            <span class="js-fileName">Change a Image</span>
                                        </label>
                                        <span class="span_reset_file"><i class="fa fa-times"
                                                                         aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Հայերեն</label>
                                        <input type="text" name="hy_name" class="form-control" placeholder="Հայերեն"
                                               value="{{old('hy_name')}}" required>
                                        @if ($errors->has('hy_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('hy_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>English</label>
                                        <input type="text" name="en_name" class="form-control" placeholder="English"
                                               value="{{old('en_name')}}" required>
                                        @if ($errors->has('en_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('en_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Русский</label>
                                        <input type="text" name="ru_name" class="form-control" placeholder="Русский"
                                               value="{{old('ru_name')}}" required>
                                        @if ($errors->has('ru_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ru_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h3><i class="fa fa-filter" aria-hidden="true"></i> Filters</h3>
                                </div>
                            </div>

                            @php($i = 0)
                            @foreach($filters as $filter)
                                <div class="panel-group accordion"  data-target="{{$i}}">
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
                                                                    <div class="btn-group btn-group-vertical" data-toggle="buttons">
                                                                        <label class="btn ">
                                                                            <input type="checkbox" name="subFilter[]" value="{{$sub->id}}">
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
                                                                    {{$sub->translate(session('locale'))->name}}
                                                                </div>
                                                                <div class="panel-body">
                                                                    @foreach($sub->values as $value)
                                                                        <div class="col-sm-10 col-sm-offset-2">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-body">
                                                                                    <div class="btn-group btn-group-vertical" data-toggle="buttons">
                                                                                        <label class="btn ">
                                                                                            <input type="checkbox" name="valFilter[]" value="{{$value->id}}">
                                                                                            <i class="fa fa-square-o fa-2x"></i>
                                                                                            <i class="fa fa-check-square-o fa-2x"></i>
                                                                                            <span> {{$value->translate(session('locale'))->name}}</span>
                                                                                        </label>
                                                                                    </div>
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

                            <input type="hidden" name="cat" value="{{$category->link}}">
                            <input type="hidden" name="image">
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>

    </div>
</div>

