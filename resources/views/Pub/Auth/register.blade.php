@extends('Pub::layout')

@section('content')

<div class="row justify-content-center">
    <div class="col-6 mt-3">
    <h1>{{__('auth.register_title')}}</h1>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        @endif
        <form action="{{route('auths.store_register')}}" method="POST">
            @csrf
              <!-- Firstname input -->
            <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="firstname"/>
            <label class="form-label" for="form2Example1">{{__('auth.register_firstname')}}</label>
            </div>

            <!-- Lastname input -->
            <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="lastname"/>
            <label class="form-label" for="form2Example1">{{__('auth.register_lastname')}}</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="email"/>
            <label class="form-label" for="form2Example1">{{__('auth.register_email')}}</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="password"/>
            <label class="form-label" for="form2Example1">{{__('auth.register_password')}}</label>
            </div>
            <button class="btn btn-primary" type="submit">{{__('auth.register_submit')}}</button>
        </form>

    </div>
</div>


@endsection