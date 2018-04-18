@extends('layouts.default')
@section('content')
  <div class="jumbotron col-md-12">
    <div class="col-md-7">
      <h1>Hello stranger</h1>
      <p class="lead">
        想了解更多关于Liuweb的资讯吗?
      </p>
      <p>
        注册成为本网站会员吧
      </p>
      <p>
        一切，将从这裡开始
      </p>
      <p>
        <button id="signup" class="btn btn-lg btn-default">现在注册</button>
      </p>
    </div>
    <div class="col-md-5 signupform" style="display: none;">
      <div class="panel-body">

        <form method="POST" action="http://sample.test/users">
          <input type="hidden" name="_token" value="dP5rPE7ek5QNoXO9Ok5siUcjbpHVlQHVc764xVrj">

          <div class="form-group">
            <label for="name">名称：</label>
            <input type="text" name="name" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" value="">
          </div>

          <button type="submit" class="btn btn-primary">注册</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    $(function(){
      $('#signup').click(function(){
        $('.signupform').fadeIn(1500);
      })
    })
  </script>
@stop