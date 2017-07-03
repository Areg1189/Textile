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
            <th>Հայերեն</th>
            <th>English</th>
            <th>Русский</th>
            <th>Filters</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 0)
        @foreach($sub->products->sortByDesc('id') as $product)
            <tr class="{{$product->id == session('newCat') ? 'active':''}}" data-target="cat_{{$i}}"
                data-href_update="{{route('updateSubCategory')}}" data-prod="{{$product->link}}"
                data-href_delete="{{route('deleteSubCategory')}}">
                <td>
                    <div class="col-sm-4">
                        <img src="{{asset('images/subCategory/'.$cat->image_name)}}" class="img-rounded"
                             alt="{{$cat->translate('en')->name}}" width="100%">
                    </div>
                </td>
                <td>{{$product->translate('hy')->name}}</td>
                <td>{{$product->translate('en')->name}}</td>
                <td>{{$product->translate('ru')->name}}</td>
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
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            CKEDITOR.replace('editor3');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();

        });
    </script>
@endsection

