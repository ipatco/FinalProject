
<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            @if (Route::has('register'))
            <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
            </ul>
            @endif
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="login_form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="heading">
                                <h3 class="text-center">Login to your account</h3>
                                @if($errors != '[]')
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="password">
                            </div>
                            <div class="form-group form-check">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                                @if (Route::has('password.request'))
                                    <a class="tdu text-thm float-right" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                            <hr>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="sign_up_form">
                        <div class="heading">
                            <h3 class="text-center">Create New Account</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" name="name_" required data-validation-required-message="This field is required" value="{{ old('name_') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email_" required data-validation-required-message="This field is required" value="{{ old('email_') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone_" required data-validation-required-message="This field is required" value="{{ old('phone_') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password_" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" required data-validation-required-message="This field is required">
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $validator !!}