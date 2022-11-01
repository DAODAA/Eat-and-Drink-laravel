@extends('front.layout')
<style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>

@section('title', 'register')

@section('content')
    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                <div class="d-flex">
                    <div class="pt-1">
                        <h4><a href="../index.php">EAT & DRINK SHOP</a> </h4>
                    </div>
                    <div class="ml-auto p-2"><a href="{{ url('login') }}" class="text-dark text-decoration-none"
                            id="mobile-font">LOGIN</a></div>
                    <div class="p-2"><a href="{{ url('register') }}" class="text-dark text-decoration-none a"
                            id="mobile-font">REGISTER</a></div>
                </div>
                <div class="login-form">
                    <!-- Ajout de la route pour enregistrement des donnees -->
                    <form action="{{ route('store-user') }}" method="post">
                        @csrf
                        <h2 class="text-center">Sign in</h2>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="FirstName"
                                required="required">
                            @error('email')
                                <p style="color: red"><b>{{ $message }}</b></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="LastName"
                                required="required">
                            @error('email')
                                <p style="color: red"><b>{{ $message }}</b></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                required="required">
                            @error('email')
                                <p style="color: red"><b>{{ $message }}</b></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" required="required">
                            @error('email')
                                <p style="color: red"><b>{{ $message }}</b></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bg-dark btn-block">Sign in</button>
                        </div>

                    </form>
                    <p class="text-center"><a href="login.php">Back to Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
