@extends('adminlte::layouts.app')


@section('main-content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">New Comments</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>N</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Comment</th>
                    </tr>
                    @foreach($comments->sortByDesc('id') as $key => $comment)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$comment->user->name . ' ' . $comment->user->last_name}}</td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->product->translate(session('locale'))->name}}</td>
                            <td>{{$comment->text}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

@endsection
@section('script')
    @parent

@endsection
