@extends('layouts.app')

@section('content')
<body class="bg-darkTeal">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Silahkan Masuk</div>
                <div class="panel-body">
                    <div align="center">
                         <img align="center" src={{asset('BRi-sat.jpg')}} width="150" height="150"></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <label for="email" class="col-md-3 control-label">E-Mail</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Tetap Masuk
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                
                                <a class="btn btn-secondary" href="{{ route('register')}}">
                                    Daftar
                                </a>
                                
                                
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Lupa password anda ?
                                </a>
                            </div>
                        </div>
                        
                    </form>
                                
                </div>
            </div>
        </div>
    </div>
</div> 
    </body>
<!--
<body class="bg-darkTeal">
    <div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s;">
        <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
            {{ $errors->has('email') ? ' has-error' : '' }}
            <h1 class="text-light">Silahkan Masuk</h1>
            <hr class="thin">
            <br>
            <div class="input-control text full-size" data-role="input">
                <label for="email">Email</label>
    
                <input type="text" name="user_login" id="email" value="{{ old('email') }}" style="padding-right: 39px;">
     
                
                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            {{ $errors->has('password') ? ' has-error' : '' }}
            <div class="input-control password full-size" data-role="input">
                <label for="password">Password</label>
                <input type="password" name="user_password" id="password" style="padding-right: 39px;">
           
                <button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                <button type="submit" class="button primary">Masuk</button>
                <a class="btn btn-link" href="{{ route('register') }}">
                                    Daftar Baru
                                </a>
            </div>
            
        </form>
    </div>
</body> -->
@endsection