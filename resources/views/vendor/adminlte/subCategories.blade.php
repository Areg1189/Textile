@extends('adminlte::layouts.app')



@section('main-content')

    <h2 class="text-center">{{$category->translate(session('locale'))->name}}</h2>
    <div class="row">
        <div class="col-sm-2">
            <button class="btn btn-app" title="Add Category" data-toggle="modal" data-target="#modalAddSubCategory">
                Add Category
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
                    <img src="{{asset('images/subCategory/'.$cat->image_name)}}" class="img-rounded"
                         alt="{{$cat->translate('en')->name}}" width="100%">
                </td>
                <td>{{$cat->translate('hy')->name}}</td>
                <td>{{$cat->translate('en')->name}}</td>
                <td>{{$cat->translate('ru')->name}}</td>
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
    @include('vendor.adminlte.modal.modalAddSubCategory')
@endsection
@section('script')
    @parent
    <script>
        $uploadCrop = $(".upload-demo4").croppie({
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
        @if(session('error') == 'add')
            $('#modalAddSubCategory').modal();
            @endif
    </script>
@endsection

