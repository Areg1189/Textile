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
                        <form action="{{route('addProduct', ['cat' => $sub->id])}}"
                              method="post"
                              enctype="multipart/form-data"
                              class="productMulty">


                            {{csrf_field()}}


                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group text-center {{ $errors->has('hy_name') ? ' has-error' : '' }}">
                                                <label>Հայերեն *</label>
                                                <input type="text" name="hy_name" class="form-control"
                                                       placeholder="Հայերեն *"
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
                                                <label>English *</label>
                                                <input type="text" name="en_name" class="form-control"
                                                       placeholder="English *"
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
                                                <label>Русский *</label>
                                                <input type="text" name="ru_name" class="form-control"
                                                       placeholder="Русский *"
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
                                            <div class="block">
                                                <input type="file" name="img" data-name="addImage"
                                                       class="image"
                                                       multiple="multiple" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="image_container" data-xname="addImage">

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
                                                        <div class="col-sm-1" data-status="color_1">
                                                    <span class=" delete_color cursor_pointer" data-target="color_1">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </span>
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

                                    {{--Price Sale--}}


                                    <div class="row">
                                        <div class="panel panel-danger">
                                            <div class="panel-body">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <div class="col-sm-12">
                                                        <h4 class="text-center">
                                                            Please choose filter or enter a price
                                                        </h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group text-center">
                                                            <label>Price</label>
                                                            <input type="number"
                                                                   name="firstPrice"
                                                                   class="form-control"
                                                                   placeholder="Price"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group text-center">
                                                            <label>Sale</label>
                                                            <input type="number"
                                                                   name="firstSale"
                                                                   class="form-control"
                                                                   placeholder="Sale">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        @php($i = 0)
                                        @foreach($filters as $filter)
                                            @foreach($filter->subs as $s)
                                                @if($sub->filters->where('sub_id',$s->id)->first())
                                                    <div class="col-sm-4">
                                                        <div class="panel panel-danger">
                                                            <div class="text-center">
                                                                <h4 class="red">
                                                                    {{$filter->translate(session('locale'))->name}}
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                @foreach($sub->filters as $catFilter)
                                                                    @if($catFilter->subs->filter->id == $filter->id)
                                                                        @if(count($catFilter->subs->values) > 0)
                                                                            <hr>
                                                                            <div>
                                                                                <label class="green">{{$catFilter->subs->translate(session('locale'))->name}}</label>
                                                                            </div>
                                                                            <div class="panel-body">
                                                                                @foreach($catFilter->subs->values  as $value)
                                                                                    <div class="col-sm-11 col-sm-offset-1">
                                                                                        <div class="form-group">
                                                                                            <input type="checkbox"
                                                                                                   class="filter_checkbox"
                                                                                                   name="filter_checkbox[]"
                                                                                                   value="{{$value->code}}"
                                                                                                   data-target="filter_{{$i}}">
                                                                                            {{$value->translate(session('locale'))->name}}
                                                                                            <div class="">
                                                                                                <div class="col-sm-6">
                                                                                                    <input type="number"
                                                                                                           class="form-control"
                                                                                                           name="price[]"
                                                                                                           placeholder="Price *"
                                                                                                           data-status="filter_{{$i}}"
                                                                                                           disabled>
                                                                                                </div>
                                                                                                <div class="col-sm-6">
                                                                                                    <input type="number"
                                                                                                           class="form-control"
                                                                                                           name="sale[]"
                                                                                                           placeholder="Sale"
                                                                                                           data-status_sale="filter_{{$i}}"
                                                                                                           disabled>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @php($i++)
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                        <div class="form-group ">
                                                                            <hr>
                                                                            <input type="checkbox"
                                                                                   class="filter_checkbox"
                                                                                   name="filter_checkbox[]"
                                                                                   value="{{$catFilter->subs->code}}"
                                                                                   data-target="filter_{{$i}}">
                                                                            {{$catFilter->subs->translate(session('locale'))->name}}
                                                                            <div class="">
                                                                                <div class="col-sm-6">
                                                                                    <input type="number"
                                                                                           class="form-control"
                                                                                           name="price[]"
                                                                                           placeholder="Price"
                                                                                           data-status="filter_{{$i}}"
                                                                                           disabled>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="number"
                                                                                           class="form-control"
                                                                                           name="sale[]"
                                                                                           placeholder="Sale"
                                                                                           data-status_sale="filter_{{$i}}"
                                                                                           disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @php($i++)
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @break
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h3>Description</h3>
                                        </div>
                                    </div>
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
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            <div class="imageContainer">

                            </div>


                        </form>
                    </div>

                    <!-- /.box-body -->
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    prodImageW = 1000;
    prodImageH = 650;

</script>