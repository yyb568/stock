@extends('layouts.app')

@section('content')
 <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">CL</h1>
            </div>
            <h3>智能选股系统</h3>
            <p>
            <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input name="name" type="text" id="name" class="form-control" placeholder="用户名" required="" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
</div>
@endsection
