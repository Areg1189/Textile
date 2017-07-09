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
                    <form action="{{route('updateProduct', ['prod' => $product->link])}}" method="post"
                          class="productMulty"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#imageNameOld">Image end Name</a></li>
                            <li><a data-toggle="tab" href="#colorFilterOld">Color and Filter</a></li>
                            <li><a data-toggle="tab" href="#descriptionOld">Description</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="imageNameOld" class="tab-pane fade in active">


                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group text-center">
                                            <label>Հայերեն *</label>
                                            <input type="text" name="hy_name" class="form-control"
                                                   placeholder="Հայերեն *"
                                                   value="{{$product->translate('hy')->name}}" required>

                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group text-center">
                                            <label>English *</label>
                                            <input type="text" name="en_name" class="form-control"
                                                   placeholder="English *"
                                                   value="{{$product->translate('en')->name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group text-center">
                                            <label>Русский *</label>
                                            <input type="text" name="ru_name" class="form-control"
                                                   placeholder="Русский *"
                                                   value="{{$product->translate('hy')->name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group text-center">
                                            <label>Sale</label>
                                            <input type="number"
                                                   name="sale"
                                                   class="form-control"
                                                   value="{{$product->sale}}"
                                                   placeholder="Sale">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="multiple-file-preview">

                                            <div class="clear-both">
                                                <ul id="sortable1" class="sort">
                                                    @php($img = 0)
                                                    @foreach($product->images->sortBy('id') as $image)
                                                        <li class="ui-state-default" data-order="0"
                                                            data-target="tur_image_{{$img}}">
                                                            <img src="{{asset('images/products/'.$image->image_name)}}"
                                                                 style="width:100%;"/>
                                                            <span class="delete_update_image cursor"
                                                                  data-status="tur_image_{{$img}}"
                                                                  data-tur="{{$image->image_name}}">
                                                                <i class="fa fa-trash fa-2x"></i>
                                                            </span>
                                                            <input type="hidden" name="image_name[]"
                                                                   value="{{$image->image_name}}">
                                                        </li>
                                                        @php($img ++)
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="block text-center">
                                            <label class="button" for="imagesUp">Upload Images</label>
                                            <input type="file" name="images[]" id="imagesUp" data-name="updateImage"
                                                   class="image"
                                                   multiple="multiple" />


                                            <div class="image_container" data-xname="updateImage">

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="colorFilterOld" class="tab-pane fade">
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
                                                    @php($j = 1)
                                                    @foreach($product->colors as $color)
                                                        <div class="col-sm-1" data-status="oldColor_{{$j}}">
                                                    <span class="delete_color cursor_pointer"
                                                          data-target="oldColor_{{$j}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </span>
                                                            <input type="color" name="color[]">
                                                        </div>
                                                        @php($j++)
                                                    @endforeach
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
                                                                            <label class="green">
                                                                                {{$catFilter
                                                                                ->subs
                                                                                ->translate(session('locale'))
                                                                                ->name}}
                                                                            </label>
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            @foreach($catFilter->subs->values  as $value)
                                                                                @php
                                                                                    $res = $product
                                                                                    ->filters->where('filter_value', $value->code)
                                                                                    ->first();
                                                                                @endphp
                                                                                <div class="col-sm-11 col-sm-offset-1">
                                                                                    <div class="form-group">
                                                                                        <input type="checkbox"
                                                                                               class="filter_checkbox"
                                                                                               name="filter_checkbox[]"
                                                                                               value="{{$value->htt}}"
                                                                                               data-target="filter_{{$i}}"
                                                                                                {{ isset($res->filter_value)? 'checked' : ''}}>

                                                                                        {{
                                                                                        $value
                                                                                        ->translate(session('locale'))
                                                                                        ->name}}
                                                                                        <div class="">
                                                                                            <input type="number"
                                                                                                   class="form-control"
                                                                                                   name="price[]"
                                                                                                   placeholder="Price"
                                                                                                   data-status="filter_{{$i}}"
                                                                                                   {{isset($res->filter_value) ? 'required' : 'disabled'}}
                                                                                                   value="{{isset($res->filter_value) ? $res->price : null}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @php($i++)
                                                                            @endforeach
                                                                        </div>
                                                                    @else
                                                                        @php
                                                                            $res = $product
                                                                            ->filters
                                                                            ->where('filter_value', $catFilter->subs->code)
                                                                            ->first();
                                                                        @endphp
                                                                        <div class="form-group ">
                                                                            <hr>
                                                                            <input type="checkbox"
                                                                                   class="filter_checkbox"
                                                                                   name="filter_checkbox[]"
                                                                                   value="{{$catFilter->subs->code}}"
                                                                                   data-target="filter_{{$i}}"
                                                                                    {{isset($res->filter_value) ? 'checked' : ''}}>
                                                                            {{$catFilter->subs->translate(session('locale'))->name}}
                                                                            <div class="">
                                                                                <input type="number"
                                                                                       class="form-control"
                                                                                       name="price[]"
                                                                                       placeholder="Price"
                                                                                       data-status="filter_{{$i}}"
                                                                                       {{isset($res->filter_value) ? 'required' : 'disabled'}}
                                                                                       value="{{isset($res->filter_value) ? $res->price : null}}">
                                                                            </div>
                                                                        </div>
                                                                    @endif
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
                            </div>

                            <div id="descriptionOld" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <label for="hy_description">Նկարագրություն</label>
                                            <textarea name="hy_description1" rows="10" cols="80">
                                        {{$product->translate('hy')->description}}
                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <label for="en_description">Description</label>
                                            <textarea name="en_description1" rows="10" cols="80">
                                        {{$product->translate('en')->description}}
                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <label for="ru_description">Описание</label>
                                            <textarea name="ru_description1" rows="10" cols="80">
                                       {{$product->translate('ru')->description}}
                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        <div class="imageContainer">

                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<script>
    prodImageW = 500;
    prodImageH = 500;
    $(function () {
        CKEDITOR.replace('hy_description1');
        CKEDITOR.replace('en_description1');
        CKEDITOR.replace('ru_description1');
    });
</script>