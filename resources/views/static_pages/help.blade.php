@extends('layouts.default')
@section('title', '帮助')

@section('css')
  @parent
@stop

@section('content')
  <div id="liu-header">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background: url('{{ asset('/images/9.jpg') }}') no-repeat;">
          <div class="container">
            <div class="carousel-caption">
              <h2>Welcome to <span>Liuweb</span></h2>
              <p>You’ll always have fascinating places to be and friendly people to see.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="padding-content">
    <h1>帮助页</h1>
  </div>
@stop

@section('js')
  @parent
@stop