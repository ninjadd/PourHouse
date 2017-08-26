@if (count($errors) > 0)

    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Oh no!</h4>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $error }}</p>
        </div>
    @endforeach

@endif
