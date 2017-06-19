@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-4 frame">
                <ul class="send"></ul>
                <div>
                    <div class="msj-rta macro" style="margin:auto">
                        <div class="text text-r" style="background:whitesmoke !important">
                            <input class="mytext" placeholder="Type a message"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
