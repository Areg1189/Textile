@extends('layouts.app')

@section('head')
    @parent
    <link rel="stylesheet" type="text/css" href="{{asset('css/user/message.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="chat">
                        @foreach($messages as $message)
                            <li class="{{$message->user_id == Auth::user()->id ? 'left' : 'right'}} clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle"/>
                        </span>
                                <div class="chat-body clearfix">
                                    <div class="">
                                        <strong class="primary-font">
                                            {{$message->user_id == Auth::user()->id ? '' : 'Admin'}}
                                        </strong>
                                        <small class="pull-right text-muted">
                                            <span class="glyphicon glyphicon-time"></span>
                                            {{$message->created_at}}
                                        </small>
                                    </div>
                                    <p>{{$message->text}}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm messageText"
                               placeholder="Type your message here..."/>
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm messageSend" id="btn-chat"
                                    data-href="{{route('getMessage',['id' => Auth::user()->href])}}">
                                @lang('user.send')</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')
    @parent
    <script type="text/javascript" src="{{asset('js/user/message.js')}}"></script>
@endsection