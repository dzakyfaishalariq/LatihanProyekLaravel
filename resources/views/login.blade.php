@extends('template_user.login_template')
@section('content')
    <div class="card-plain">
        <div class="header">
            <h5>Log in</h5>
        </div>
        <form action="{{ route('l_system') }}" method="POST" class="form">
            @csrf
            <div class="input-group">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    placeholder="User Name" value="{{ old('username') }}" required>
                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
            </div>
            @error('username')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" class="form-control" required />
                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
            </div>
            @error('password')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="footer">
                {{-- <a href="index.html" class="btn btn-primary btn-round btn-block">SIGN IN</a> --}}
                <button type="submit" class="btn btn-primary btn-round btn-block">SING IN</button>
                <a href="{{ route('register') }}" class="btn btn-primary btn-simple btn-round btn-block">SIGN
                    UP</a>
            </div>
        </form>
        <a href="forgot-password.html" class="link">Forgot Password?</a>
    </div>
@endsection
