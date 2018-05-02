@extends('dashboard_layout.master')


@section('content')
    <div class="container">
        <div class="row ">
            @if(count($errors->all())>0)
                <div class="alert alert-danger text-center col-md-12 ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-minus"></i></span>
                    </button>
                    <ul class="list-unstyled text-center">
                        @foreach($errors->all() as $error)
                            <li class="text-center">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div id="alert" class="alert alert-success text-center col-md-12">

                    {{Session::get('success')}}
                    <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i
                                class="fa fa-minus"></i></span>
                </div>
            @endif

            <div class="col-md-12 ">
                <div class="white-box">
                    <div class="row">
                        <h3 class="box-title">
                           Information de utilisateur
                        </h3>
                        <form action="{{url('addUser')}}" method="post">
                            {!! csrf_field() !!}


                            <div class="col-md-6">
                                <h3>
                                    Name
                                </h3>

                                <input required="true" name="name" type="text" value="{{old('name')}}"
                                       class="form-control" placeholder="">
                                <br>
                            </div>
                            <div class="col-md-6">
                                <h3>
                                   E-mail
                                </h3>
                                <input required="true" name="email" type="email" value="{{old('email')}}"
                                       class="form-control" placeholder="">
                                <br>
                            </div>
                            <div class="col-md-6">
                                <h3>
                                    Mot de passe
                                </h3>
                                <div class="col-md-12">
                                    <input required="true" name="password" type="password"
                                           class="form-control"
                                           placeholder="">
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>
                                   Confirmer le mot de passe
                                </h3>
                                <div class="col-md-12">
                                    <input required="true" name="password_confirmation" type="password"
                                           class="form-control"
                                           placeholder="">
                                    <br>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <h3>
                                    rôle
                                </h3>

                                <select name="role" class="form-control">
                                    @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                        <option value=" {{$role->name}}">
                                            {{$role->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <br>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12 text-center">

                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 center-">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection






