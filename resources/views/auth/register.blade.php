@extends('app')

@section('body')


@if (count($errors) > 0)
<div class="alert alert-danger">
	<p><strong>Whoops!</strong> There were some problems with your input.</p>
	<p></p>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form method="post" action="/auth/register" autocomplete="off">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input class="form-control" placeholder="姓名" type="text" name="name" value="{{ old('name') }}" />
    </div>
</div>
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input class="form-control" placeholder="邮箱" type="email" name="email" value="" />
    </div>
</div>
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <input class="form-control" placeholder="密码" type="password" name="password" />
    </div>
</div>
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <input class="form-control" placeholder="确认密码" type="password" name="password_confirmation" />
    </div>
</div>


<div class="form-group">
    <button class="btn btn-success btn-lg btn-block" type="submit" id="loginBtn">注册</button>
</div>

</form>

<hr />
<a href="/auth/login" class="btn btn-default btn-lg btn-block">已有帐号，去登录</a>


@endsection
