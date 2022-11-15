@extends('template_user.login_template')
@section('content')
    <div class="card-plain">
        <div class="header">
            <h5>Sign Up</h5>
            <span>Register a new membership</span>
        </div>
        <form action="{{ route('r_system') }}" method="POST" class="form">
            @csrf
            <div class="input-group">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama"
                    value="{{ old('nama') }}">
                <span class="input-group-addon"><i class="material-icons">perm_identity</i></span>
            </div>
            @error('nama')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="input-group">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    placeholder="User name" value="{{ old('username') }}">
                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
            </div>
            @error('username')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="input-group">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter Email" value="{{ old('email') }}">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
            </div>
            @error('email')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="input-group">
                <input type="password" name="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" />
                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
            </div>
            @error('username')
                <p class="message text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <div class="checkbox">
                <input id="terms" type="checkbox">
                <label for="terms">I read and Agree to the <a href="javascript:void(0);">Terms of Usage</a></label>
            </div>
            <div class="footer">
                {{-- <a href="index.html" class="btn btn-primary btn-round btn-block">SIGN UP</a> --}}
                <button type="submit" class=" btn btn-primary btn-round btn-block">SIGN UP</button>
            </div>
        </form>
        <a class="link" href="sign-in.html">You already have a membership?</a>
    </div>
@endsection
