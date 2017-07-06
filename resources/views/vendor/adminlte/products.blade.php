@extends('adminlte::layouts.app')


@section('main-content')
    <section class="content-header">
        <h1>
            {{$sub->name}}
            <small>Products</small>
        </h1>
    </section>




    <div class="row">
        <div class="col-sm-2">
            <button class="btn btn-app" title="Add" data-toggle="modal" data-target="#modalAddProduct">
                Add
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>

    </div>
    <table id="table" class="table table-bordered">
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Colors</th>
            <th>Русский</th>
            <th>Filters</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 0)
        @foreach($products->sortByDesc('id') as $product)
            <tr class="{{$product->id == session('newCat') ? 'active':''}}" data-target="cat_{{$i}}"
                data-href_update="{{route('updateSubCategory')}}" data-prod="{{$product->link}}"
                data-href_delete="{{route('deleteSubCategory')}}">
                <td>
                    <div class="col-sm-4">
                        <img src="{{asset('image/product/'.$product->images->sortBy('id')->first()['image_name'])}}"
                             class="img-rounded"
                             alt="{{$product->translate('en')->name}}"
                             width="100%">
                    </div>
                </td>
                <td>
                    <div class="">
                        Հաըերեն ։ {{$product->translate('hy')->name}}
                    </div>
                    <div class="">
                        English : {{$product->translate('en')->name}}
                    </div>
                    <div class="">
                        Русский : {{$product->translate('ru')->name}}
                    </div>
                </td>
                <td>
                    <ul class="fc-color-picker" id="color-chooser">
                        <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                    </ul>
                </td>
                <td></td>
                <td>

                </td>
                <td>
                    <button class="btn  btn-primary iconUpdate" data-toggle="modal" data-status="cat_{{$i}}"
                            data-target="#modalUpdate">
                        <i class="fa fa-edit"></i>
                        Edit
                    </button>
                    <button class="btn  btn-danger iconDelete" data-toggle="modal" data-status="cat_{{$i}}"
                            data-target="#modalDelete">
                        <i class="fa fa-trash"></i>
                        Delete
                    </button>
                </td>
            </tr>
            @php($i++)
        @endforeach


        </tbody>
    </table>
    @include('vendor.adminlte.modal.modalAddProduct')
@endsection
@section('script')
    @parent
    {{--<script>--}}
    {{--$uploadCrop = $(".upload-demo4").croppie({--}}
    {{--enableExif: true,--}}
    {{--viewport: {--}}
    {{--width: 370,--}}
    {{--height: 300--}}
    {{--},--}}
    {{--boundary: {--}}
    {{--width: 470,--}}
    {{--height: 400--}}
    {{--}--}}
    {{--});--}}
    {{--w = 370 ;--}}
    {{--h = 300;--}}
    {{--@if(session('error') == 'add')--}}
    {{--$('#modalAddSubCategory').modal();--}}
    {{--@endif--}}
    {{--</script>--}}
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('hy_description');
            CKEDITOR.replace('en_description');
            CKEDITOR.replace('ru_description');
            //bootstrap WYSIHTML5 - text editor
//            $(".textarea").wysihtml5();
        });
    </script>
@endsection

