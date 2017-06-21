@extends('adminlte::layouts.app')

{{--@section('htmlheader_title')--}}
{{--{{ trans('adminlte_lang::message.home') }}--}}
{{--@endsection--}}


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-sm-2">
                <button class="btn btn-app" title="Add Category" data-toggle="modal" data-target="#modalAddCategory">
                    Add Category
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>

        </div>
        <div class="row">
            <table class="table" id="table">
                <thead>
                <tr>
                    <th>Հաըեռեն</th>
                    <th>English</th>
                    <th>Русский</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories->sortByDesc('id') as $category)
                    <tr class="{{$category->id == session('newCat') ? 'active':''}}">
                        <td>{{$category->translate('hy')->name}}</td>
                        <td>{{$category->translate('en')->name}}</td>
                        <td>{{$category->translate('ru')->name}}</td>
                        <td>
                            <a class="btn btn-app">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                            <div class="btn-group">
                                <button class="btn  btn-primary">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </button>
                                <button class="btn  btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    @include('vendor.adminlte.modal.modalAddCategory')

@endsection
@section('script')
    @parent

    <script>
        @if(session('error') == 'add')
            $('#modalAddCategory').modal();
        @elseif(session('error') == 'edit')

        @endif

    </script>
@endsection
