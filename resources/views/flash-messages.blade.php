<!-- Message d'erreur -->
@if ($message = Session::get('Success'))
    <div class="alert alert-success alert-block" id="flash">
        <button type="button" class="close" data-dismiss="alert" id="close">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" id="flash">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
