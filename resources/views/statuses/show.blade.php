@extends('layouts.default')
@section('title', '话题列表')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <section class="status_form">
        @include('shared._status_form')
      </section>
      <h3>微博列表</h3>
      @include('shared._feed')
    </div>
    <aside class="col-md-4">
      <section class="user_info">
        @include('shared._user_info', ['user' => Auth::user()])
      </section>
      <section class="stats">
        @include('shared._stats', ['user' => Auth::user()])
      </section>
    </aside>
  </div>
@stop