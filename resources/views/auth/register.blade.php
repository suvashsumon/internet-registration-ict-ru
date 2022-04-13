@extends("auth.authmaster")

@section('page-title', 'Register')

@section("form-section")

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form  action="{{ route('register') }}" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">Create admin account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name"/>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email"/>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{ route('login') }}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

@endsection

