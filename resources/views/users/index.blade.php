@extends('layouts.default')
@section('title', '所有用户')

@section('content')

      <h1 style="font-size: 3em;letter-spacing: -2px;margin-bottom: 30px;text-align: center;">所有用户</h1>
      <ul class="users">
        @foreach ($users as $user)
          @include('users._user')
        @endforeach
      </ul>

      {!! $users->render() !!}

@stop