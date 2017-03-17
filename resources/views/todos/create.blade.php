@extends('layouts.main')
@section('content')
    <form class="create-list" action="http://laravel.dev:8000/todos" method="post">
        {{-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> --}}
        <div class="form-group">
            <label for="title">List Title</label>
            <input type="text" name="title" class="form-control">

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="button" value="{{{ csrf_token }}}">Submit</button>
        </div>

    </form>
@stop
