
@extends('layouts.app')


@section('content')
<div class="lgp-hd">
<h2><strong>welcome to My awesome login page</strong></h2>
<h5><strong>Signup to view Dashboard</strong></h5>
</div>
<div class="container login-cont">
<div class="row">
    <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
        <form class="login-form" action="{{ route('Auth.postLogin') }}" method="POST">
            @csrf
            <div class="form-group"><input class="form-control form-control-lg lg-frc" type="text" name="email" required="" placeholder="Enter Email"></div>
            <div class="form-group"><input class="form-control form-control-lg lg-frc" type="text" name="username" required="" placeholder="Enter Username"></div>
            <div class="form-group"><input class="form-control form-control-lg lg-frc" type="password" name="password" required="" placeholder="Enter Password"></div>
            
            <div class="form-group"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Signup</strong></button></div>
            
            
        </form>
    </div>
</div>
</div>
</section>

@endsection