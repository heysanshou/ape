@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Ape</h1>
    <p class="lead">
      欢迎来到， <a href="http://yizhinangua.bujieshi.net">一只南瓜</a>
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('users.create')}}" role="button">现在注册</a>
    </p>
  </div>
@stop
