@extends('adminlte::layouts.app')


@section('main-content')

    <section class="content-header text-center">
        <h1>
            {{$category->translate(session('locale'))->name}}

            <small> Category</small>
        </h1>
    </section>
    <div class="row">
        <div class="col-sm-2">
            <button class="btn btn-app" title="Add Category" data-toggle="modal" data-target="#modalAddSubCategory">
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
        @foreach($category->subCategories->sortByDesc('id') as $cat)
            <tr class="{{$cat->id == session('newCat') ? 'active':''}}" data-target="cat_{{$i}}"
                data-href_update="{{route('updateSubCategory')}}" data-prod="{{$cat->link}}"
                data-href_delete="{{route('deleteSubCategory')}}">
                <td>
                    <div class="col-sm-4">
                        <img src="{{asset('images/subCategory/'.$cat->image_name)}}" class="img-rounded"
                             alt="{{$cat->translate('en')->name}}" width="100%">
                    </div>
                </td>
                <td>{{$cat->translate('hy')->name}}</td>
                <td>{{$cat->translate('en')->name}}</td>
                <td>{{$cat->translate('ru')->name}}</td>
                <td>
                    {{--@foreach($cat->filters as $filter)--}}
                    {{--<div><i class="fa fa-filter"></i> {{$filter->filter->name}}</div>--}}
                    {{--@endforeach--}}
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
    <div id="myModal" class="modal myModal">

        <!-- Modal content -->
        <div class="modal-content myModal-content">

                <div class="box box-danger">
                    <div class="box-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="col-sm-12">
                                    <p>Do you really want to delete</p>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger modalDelete dellImage btn_my_modal">delete</button>
                                    <button type="button" class="btn btn-default btn_my_modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>
    </div>
    @include('vendor.adminlte.modal.modalAddSubCategory')
@endsection
@section('script')
    @parent
    <script>
        $uploadCrop1 = $(".upload-demo4").croppie({
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


        $uploadCrop = $(".upload-demo3").croppie({
            enableExif: true,
            viewport: {
                width: 500,
                height: 100
            },
            boundary: {
                width: 600,
                height: 120
            }
        });

        w = 2000;
        h = 400;


        @if(session('error') == 'add')
            $('#modalAddSubCategory').modal();
        @endif
    </script>
@endsection

