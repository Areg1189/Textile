<div id="modalAddProduct" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Add Product</h3>
                </div>
                <div class="box box-primary">

                    <div class="box-body">
                        <form action="{{route('addProduct')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block">
                                        <label class="button" for="images">Upload Images</label>
                                        <input type="file" name="image[]" id="images" data-name="c" class="image"
                                               multiple="multiple"/>
                                        <div id="multiple-file-preview">

                                            <div class="clear-both">
                                                <ul id="sortable" data-xname="c" class="sort">

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('hy_name') ? ' has-error' : '' }}">
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
                                    <div class="form-group text-center {{ $errors->has('en_name') ? ' has-error' : '' }}">
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
                                    <div class="form-group text-center {{ $errors->has('ru_name') ? ' has-error' : '' }}">
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
                                <div class="col-sm-12">
                                    <div class="panel panel-danger">
                                        <div class="text-center">
                                            <h3>
                                                Color
                                                <button type="button"
                                                        class="btn btn-primary add_color"
                                                        title="Add"
                                                        data-color="add">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="color_container" data-color_container="add">
                                                <div class="col-sm-1">
                                                    <input type="color" name="color[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="text-center"><i class="fa fa-filter"></i> Filters</h3>
                                </div>
                            </div>

                            {{--                            @foreach($filters->chunk(3) as $chunk)--}}
                            <div class="row">
                                @foreach($filters as $filter)
                                    @foreach($filter->subs as $s)
                                        @if($sub->filters->where('sub_id',$s->id)->first())
                                            <div class="col-sm-4">
                                                <div class="panel panel-danger">
                                                    <div class="text-center">
                                                        <h4>
                                                            {{$filter->translate(session('locale'))->name}}
                                                        </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        @foreach($sub->filters as $catFilter)
                                                            @if($catFilter->subs->filter->id == $filter->id)
                                                                @if(count($catFilter->subs->values) > 0)

                                                                    <div>
                                                                        <label class="red">{{$catFilter->subs->translate(session('locale'))->name}}</label>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        @foreach($catFilter->subs->values  as $value)
                                                                            <div class="col-sm-11 col-sm-offset-1">
                                                                                <div class="form-group">
                                                                                    <input type="checkbox"
                                                                                           value="{{$value->translate('en')->name}}">
                                                                                    {{$value->translate(session('locale'))->name}}
                                                                                    <div class=""><input type="number"
                                                                                                         class="form-control"
                                                                                                         name="price[]"
                                                                                                         placeholder="Price">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>

                                                                @endif
                                                                <div class="form-group ">
                                                                    <input type="checkbox"
                                                                           value="{{$catFilter->subs->translate('en')->name}}">
                                                                    {{$catFilter->subs->translate(session('locale'))->name}}
                                                                    <div class=""><input type="number"
                                                                                         class="form-control"
                                                                                         name="price[]"
                                                                                         placeholder="Price">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            {{--@endforeach--}}

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <label for="hy_description">Նկարագրություն</label>
                                        <textarea name="hy_description" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <label for="en_description">Description</label>
                                        <textarea name="en_description" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <label for="ru_description">Описание</label>
                                        <textarea name="ru_description" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>

    </div>
</div>
