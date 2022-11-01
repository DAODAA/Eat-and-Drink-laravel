@extends('back.layout')

@section('title', 'add-produit')
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

@section('content')
    <div class="col-md-10" style="margin:auto;">
        <!-- //enctype="multipart/form-data" pour envoi des donnees binaires au formulaire -->
        <form action="{{ route('store-produit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">Creation produit</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom produit" name="name" id="name"
                    required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="" cols="" id="description" name="description"
                    placeholder="Description produit"></textarea>
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="prix " id="prix" name="prix"
                    required="required">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="radio" class="" name="statut" value="1">actif
                <input type="radio" class="" name="statut" value="0">inactif
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="image " id="image" name="image"
                    accept="image/*">
                @error('email')
                    <p style="color: red"><b>{{ $message }}</b></p>
                @enderror
            </div>

            <div class="form-group">
                <label for="cat">Categorie</label>
                <select name="categorie" id="categorie" class="form-control">
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
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
