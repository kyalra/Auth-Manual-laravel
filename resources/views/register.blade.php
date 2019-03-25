@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            
            <div class="limiter">
		        <div class="container-login100">
			        <div class="wrap-login100 p-t-90 p-b-30">            
                        <form class ="login100-form validate-form" action="{{ url('/registerPost') }}" method="post">
                            {{ csrf_field() }}
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                 <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                     @endforeach
                                </ul>
                            </div>
                             @endif
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Please Enter Email">
                            <span class="focus-input100"></span>
                                <input type="email" class="input100" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Please Enter Password">
                            <span class="focus-input100"></span>
                                <input type="password" class="input100" id="password" name="password" placeholder="pasword">
                            </div>
                            <div class="wrap-input100 validate-input m-b-16"data-validate="Password not match">
                            <span class="focus-input100"></span>   
                                <input type="password" class="input100" id="confirmation" name="confirmation" placeholder="Confirm Password">
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Please Insert Your Name">
                            <span class="focus-input100"></span>   
                                <input type="text"  class="input100" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">Submit</button>
                                <button type="reset" class="login100-form-btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection