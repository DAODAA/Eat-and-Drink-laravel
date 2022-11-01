@extends('back.layout')
@section('title', 'admin')

@section('content')

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                    <a href="#">
                        <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded"> Gestionnaires</div>
                        <div class="circle-tile-number text-faded ">{{ $gestionnaires->count() }}</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                    <a href="#">
                        <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
                    </a>
                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded"> Users Online </div>
                        <div class="circle-tile-number text-faded ">10</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                    <a href="#">
                        <div class="circle-tile-heading yellow"><i class="fa fa-users fa-fw fa-3x"></i></div>
                    </a>
                    <div class="circle-tile-content yellow">
                        <div class="circle-tile-description text-faded"> Creer gestionnaire </div>
                        <div class="circle-tile-number text-faded ">{{ $gestionnaires->count() }}</div>
                        <a class="circle-tile-footer" href="{{ url('admin/addGestionnaire') }}">Creer maintenant<i
                                class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                    <a href="#">
                        <div class="circle-tile-heading orange"><i class="fa fa-users fa-fw fa-3x"></i></div>
                    </a>
                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded"> Creer categorie </div>
                        <div class="circle-tile-number text-faded ">{{ $categories->count() }}</div>
                        <a class="circle-tile-footer" href="{{ url('admin/addCategorie') }}">Creer maintenant<i
                                class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                    <a href="#">
                        <div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded"> Creer produit </div>
                        <div class="circle-tile-number text-faded ">{{ $produits->count() }}</div>
                        <a class="circle-tile-footer" href="{{ url('admin/addProduit') }}">Creer maintenant<i
                                class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
