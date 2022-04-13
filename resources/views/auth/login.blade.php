@extends("auth.authmaster")

@section('page-title', 'Login')

@section("form-section")

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="{{ route('login') }}" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">Admin Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                            @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong  class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Create new account <a href="{{ route('register') }}" class="loginhere-link">Register</a>
                        <br>
                        <a class="loginhere-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                    </p>
                </div>
            </div>
        </section>

@endsection

