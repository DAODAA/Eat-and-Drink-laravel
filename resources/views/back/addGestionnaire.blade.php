@extends('back.layout')
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
@section('title', 'addGestionnaire')

@section('content')
    <div class="col-md-10" style="margin:auto;">
        <form action="{{ route('store-gestionnaire') }}" method="post">
            @csrf
            <h2 class="text-center">Creation gestionnaire</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom" id="name" name="name" required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Prenom" id="lastName" name="lastName"
                    required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                    required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password"
                    required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary bg-dark btn-block">Sauvegarder</button>
            </div>
        </form>
    </div>
@endsection
