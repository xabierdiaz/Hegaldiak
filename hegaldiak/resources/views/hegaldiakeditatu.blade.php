
@extends('base')

@section('content')
<div class="container w-25 border p-4">
    <div class="row mx-auto">
        <form method="POST" action="{{ route('hegaldia-aldatu-db', ['id' => $ega->id]) }}">
            @method('PATCH')
            @csrf

            <div class="mb-3 col">
                <input type="text" class="form-control" name="irteera" placeholder="Irteera" value="{{ $ega->irteera }}">
                <input type="text" class="form-control" name="helmuga" placeholder="Helmuga" value="{{ $ega->helmuga }}">
                <input type="text" class="form-control" name="egunaordua" placeholder="Egunaordua" value="{{ $ega->egunaordua }}">
                <input type="text" class="form-control" name="iraupena" placeholder="Iraupena" value="{{ $ega->iraupena }}">
                <button type="submit" class="btn btn-primary">hegaldia aldatu</button>
            </div>
        </form>
    </div>
</div>
@endsection