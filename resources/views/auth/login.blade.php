@extends('landing_layout.master')

@section('content')
    <div style="width:100%;background-color: #ffffff">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Se Connecter</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Se connecter
                                    </button>
                                </div>
                            </form>
                            <h3>
                                @if(\Carbon\Carbon::now()->year>2019)
                                    Developer & Designed By : <a href="https://www.facebook.com/A.BEDERRAR">BEDERRAR Allaeddine</a>
                                @endif
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
