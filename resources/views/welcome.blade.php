@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Welcome</div>--}}

                {{--<div class="panel-body">--}}
                    {{--Your Application's Landing Page.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">라라벨 Todo 사이트</div>

                <div class="panel-body">
                    <div class="container">
                        <p>총 가입자 수 : {{$total['user']}} </p>
                        <p>프로젝트 수 : {{$total['project']}}</p>
                        <p>total 수 : {{$total['task']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
