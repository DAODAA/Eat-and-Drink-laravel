@extends('layout')
<!-- entension de la page layout -->
@section('title', "page d'accueil")
@section('sidebar')
    <p>Avant le parent</p>
    @parent
    <p>Apres le parent</p>
@endsection
