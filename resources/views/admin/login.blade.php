
@extends('layouts.app')


@section('content')
<div class="lgp-hd">
    <h2><strong>welcome to My awesome login page</strong></h2>
    <h5><strong>login to view Dashboard</strong></h5>
</div>
<div class="container login-cont">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
            <form class="login-form" action="{{ route('admin.dashboardlogin') }}" method="post">
                @csrf
                <div class="form-group"><input class="form-control form-control-lg lg-frc"  name="email" type="email" required="" placeholder="Enter User Email"></div>
                <div class="form-group"><input class="form-control form-control-lg lg-frc" name="password" type="password" required="" placeholder="Enter Password"></div>
                <div class="form-group form-check">
                    <label class="form-check-label" style="color: white">
                      <input class="form-check-input" type="checkbox" name="remember" > Remember me
                    </label>
                   </div>
                <div class="form-group"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Login</strong></button></div>

            </form>
        </div>
    </div>
</div>
</div>

</section>

@endsection