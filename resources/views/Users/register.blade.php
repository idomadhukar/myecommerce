@extends('layouts.admin')
@section('content')
    <div class="row">
        <h2>Register Account</h2>
        <hr/>
        <form action="{{route('saveUsers')}}" method="post" class="form">
            {{csrf_field()}}
            <div class="form-group"><label for="">Name:</label><input type="text" class="form-control" name="name" value="{{old('name')}}">  {{$errors->first('name')}}</div>
            <div class="form-group"><label for="">Email</label><input type="text" class="form-control" name="email" value="{{old('email')}}">{{$errors->first('email')}}</div>
            <div class="form-group"><label for="">Password</label><input type="password" class="form-control" name="password">{{$errors->first('password')}}</div>
            <div class="form-group"><label for="">Re-type Password</label><input type="password" class="form-control" name="password_confirmation">{{$errors->first('password_confirmation')}}</div>
            <div class="form-group"><label for=""></label><button class="btn btn-info form-control">Register</button> </div>
        </form>
    </div>



@endsection