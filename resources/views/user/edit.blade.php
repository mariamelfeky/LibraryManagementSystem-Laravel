@extends('layouts.app')

@section('content')

<section class="container">
    <form action="{{ route('user.update',['user'=> Auth::id()]) }}" method="PUT">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style=" margin:10px auto;">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input style=" margin-top:10px; padding:10px;" id="name" type="text" class="form-control" name="name" value="{{ $user->name}}" autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style=" margin:10px auto;">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input style=" margin-top:20px; padding:10px;" id="email" type="email" class="form-control" name="email" value="{{ $user->email}}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
<br/>
        <div class="form-group" >
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" style=" margin:10px auto;">
                    Update
                </button>
            </div>
        </div>
    </form>
</section>

@endsection