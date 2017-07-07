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
                    <form action="{{route('updateProduct', ['prod' => $product->link])}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <label class="button" for="images">Upload Images</label>
                                    <input type="file" name="image[]" id="images" data-name="UpdateImage" class="image"
                                           multiple="multiple"/>
                                    <div id="multiple-file-preview">

                                        <div class="clear-both">
                                            <ul id="sortable" data-xname="UpdateImage" class="sort">

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="multiple-file-preview">

                                    <div class="clear-both">
                                        <ul id="sortable1" class="sort_update">
                                            @php($img = 0)
                                            @foreach($product->images->sortBy('id') as $image)
                                                <li class="ui-state-default" data-order="0"
                                                    data-target="tur_image_{{$img}}">
                                                    <img src="{{asset('image/product/'.$image->image_name)}}"
                                                         style="width:100%;"/>
                                                    <span class="delete_update_image cursor" data-toggle="modal"
                                                          data-target="#modalDeleteTur" data-status="tur_image_{{$img}}"
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
                            <div class="col-xs-3">
                                <div class="form-group text-center">
                                    <label>Հայերեն *</label>
                                    <input type="text" name="hy_name" class="form-control" placeholder="Հայերեն *"
                                           value="{{$product->translate('hy')->name}}" required>

                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group text-center">
                                    <label>English *</label>
                                    <input type="text" name="en_name" class="form-control" placeholder="English *"
                                           value="{{$product->translate('en')->name}}" required>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group text-center">
                                    <label>Русский *</label>
                                    <input type="text" name="ru_name" class="form-control" placeholder="Русский *"
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

                        {{--                            @foreach($filters->chunk(3) as $chunk)--}}
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
                        {{--@endforeach--}}

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

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
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
    w = 370;
    h = 300;

    $(function () {
        CKEDITOR.replace('hy_description1');
        CKEDITOR.replace('en_description1');
        CKEDITOR.replace('ru_description1');
    });
</script>