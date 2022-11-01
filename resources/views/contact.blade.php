@extends('layout')
<!-- extension de la page layout -->
@section('title', 'page contact')

@section('contenu')

    <form action="{{ route('soumission') }}" method="post">
        @csrf
        <label for="nom">Entrer votre nom:</label>
        <input type="text" name="nom" id="nom">
        <!-- Renvoi d'un message d'erreur en cas d'erreur -->
        @error('nom')
            <p style="color: red"><b>{{ $message }}</b></p>
        @enderror
        <br><br>
        <label for="email">Entrer votre email:</label>
        <input type="email" name="email" id="email">
        @error('email')
            <p style="color: red"><b>{{ $message }}</b></p>
        @enderror
        <br><br>
        <label for="message">Entrer votre message:</label>
        <textarea name="message" id="message" rows="3" cols="10"></textarea>
        @error('message')
            <p style="color: red"><b>{{ $message }}</b></p>
        @enderror
        <input type="submit" name="submit" value="Envoyer">
    </form>

@endsection
