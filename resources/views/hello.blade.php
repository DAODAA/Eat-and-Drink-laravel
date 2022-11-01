<!--<p>{ $maVariable }}</p> Lees syntaxes d'affichage Blade -->
<!-- <p>{! $maVariable !!}</p> -->
<!-- <p>{! $animal !!}</p> -->

@if ($animal == 'chien')
    <p>L'animal est un chien</p>
@elseif ($animal == 'chat')
    <p>L'animal est un chat</p>
@else()
    <p>L'animal est peut etre une Chevre.</p>
@endif

@isset($produit)
    <p>Le produit est un cube</p>
@endisset

@foreach ($letter as $letters)
    @if ($loop->first)
        <p>C'est la premiere lettre {{ $letters }}</p>
    @endif
    @if ($loop->last)
        <p>C'est la derniere lettre {{ $letters }}</p>
    @endif
    <!--  <p>Lettre {\{ $letters }}</p> -->
@endforeach
