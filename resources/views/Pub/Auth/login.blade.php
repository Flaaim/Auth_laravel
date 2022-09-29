@extends('Pub::layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-6 mt-3">
        <h1>{{__('auth.login_title')}}</h1>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        @endif
    <form method="POST" action="{{route('auths.store')}}">
        @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email"/>
    <label class="form-label" for="form2Example1">{{__('auth.login_email')}}</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <label class="form-label" for="form2Example2">{{__('auth.login_password')}}</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="remember" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31">{{__('auth.login_remember')}}</label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
      <a href="{{route('auths.google')}}"> <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;"></a> 
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">{{__('auth.login_submit')}}</button>
  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
  </div>
</form>
    </div>      
</div>
@endsection