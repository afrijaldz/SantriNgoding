@extends('layout.master')
@section('title')
Sign up for free
@endsection
{{-- @section('nav-right')
  <p class="navbar-text"><a href="{{ route('signin') }}" class="label bg-success-400"><font size="3">Sign In</font></a></p>
@endsection --}}
@section('konten')
  <div class="col-lg-12">
    <form action="{{ route('signup') }}" method="post" class="col-lg12">
      <div class="panel panel-body login-form col-tengah-80">
        <div class="text-center">
          <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
          <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
        </div>
        <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <table>
              @foreach($errors->all() as $error)
                <tr>
                  <td>{{ $error }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        @endif
        <div class="form-group has-feedback has-feedback-left  {{ $errors->has('nama') ? 'has-error' : '' }}">
          <input type="text" class="form-control" placeholder="Full Name" name="nama" id="nama" value="{{ Request::old('nama') }}">
          <div class="form-control-feedback">
            <i class="icon-user-check text-muted"></i>
          </div>
        </div>

        <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

        <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? 'has-error' : '' }}">
          <input type="text" class="form-control" placeholder="Your email" name="email" id="email" value="{{ Request::old('email') }}">
          <div class="form-control-feedback">
            <i class="icon-mention text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left" {{ $errors->has('password') ? 'has-error' : '' }}>
          <input type="password" class="form-control" placeholder="Create password" name="password" id="password" value="{{ Request::old('password') }}">
          <div class="form-control-feedback">
            <i class="icon-user-lock text-muted"></i>
          </div>
        </div>

        <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
        {{ csrf_field() }}
    </form>
  </div>
@endsection