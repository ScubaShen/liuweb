@extends('layouts.default')
@section('title', $user->name)

@section('content')
  <div class="padding-content">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="col-md-offset-2 col-md-8">
            <section class="user_info">
              @include('shared._user_info', ['user' => $user])
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop