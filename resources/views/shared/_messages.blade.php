@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <div class="container">
      <div class="flash-message">
        <p class="alert alert-{{ $msg }}">
          {{ session()->get($msg) }}
        </p>
      </div>
    </div>
  @endif
@endforeach
  {{--<div class="flash-message">--}}
    {{--<p class="alert alert-success">--}}
      {{--欢迎，您将在这里开启一段新的旅程~--}}
    {{--</p>--}}
  {{--</div>--}}
