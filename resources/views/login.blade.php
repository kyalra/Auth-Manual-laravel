@extends('base')
@section('content')
    
     <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
                <form class="login100-form validate-form" action="{{ url('/loginPost') }}" method="post">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-40">
                        Login Dulu Kuy
                    </span>
                        @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                        @endif
                        @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                        @endif
                    <div class="wrap-input100 validate-input m-b-16"data-validate = "Please enter Email">
                        <input type="email" class="input100" id="email" name="email" placeholder="email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16"data-validate = "Please enter password">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        <input type="password" class="input100" id="password" name="password" placeholder="password">
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Login</button>
                        <a href="{{url('register')}}" class="login100-form-btn">Register</a>
                    </div>
                </form>
            </div>
        </div>
	</div>
	
	
        <!-- /.content -->
    
    <!-- /.main-section -->
@endsection