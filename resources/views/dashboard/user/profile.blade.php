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
                @if(Session::has('successPassword'))
                    <div id="alert" class="alert alert-success text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fa  fa-minus"></i></span>
                        </button>
                        <h3 class="text-center">
                            {{Session::get('successPassword')}}
                        </h3>
                    </div>
                @endif
                @if(Session::has('failedPassword'))
                    <div id="alert" class="alert alert-danger text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fa  fa-minus"></i></span>
                        </button>
                        <h3 class="text-center">
                            {{Session::get('failedPassword')}}
                        </h3>
                    </div>
                @endif
            <div class="white-box col-md-8" >

                <ul class="nav customtab nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item"><a href="#userInfo" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Information Personel</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#password" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Mot de passe</span></a></li>
                </ul>
                <div class="tab-content">
                    <div id="userInfo" class="tab-pane col-md-12 active">
                        <div class="white-box">

                            {!! Form::open(["url"=>"user/".auth()->user()->id,'method'=>'PATCH','class'=>'form-material form-horizontal']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group col-md-6">
                                <label class="col-md-12" for="">
                                    Name
                                </label>
                                <input required="true" name="name" type="text" value="{{auth()->user()->name}}"
                                       class="form-control" placeholder="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="col-md-12" for="">
                                    E-mail
                                </label>
                                <input required="true" name="email" type="email" value="{{auth()->user()->email}}"
                                       class="form-control" placeholder="">
                            </div>


                            <div class="form-group col-md-12">
                                <div class="col-md-12 text-center">

                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 center-">
                                        Sauvgarde
                                    </button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>

                    <div id="password" class="tab-pane col-md-12 ">
                        <div class="white-box">

                            {!! Form::open(["url"=>"password",'class'=>'form-material form-horizontal']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-12" for="example-phone">
                                    Ancien mot de passe
                                </label>

                                    <input required="true" name="password" type="password"
                                           class="form-control" placeholder="">

                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-phone">
                                    Nouveau mot de passe
                                </label>
                                    <input required="true" name="new_password" type="password"
                                           class="form-control" placeholder="">

                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-phone">
                                    Confirmer le nouveau mot de passe
                                </label>

                                    <input required="true" name="new_password_confirmation" type="password"
                                           class="form-control"
                                           placeholder=" ">


                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 ">
                                        Sauvgarde
                                    </button>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>


                </div>
            </div>
                <div id="avatar" class="tab-pane col-md-4 ">
                    <div class="white-box">

                        <h3 class="box-title">
                            Photo de profile
                        </h3>
                        {!! Form::open(["url"=>"/change_avatar",'files'=>'true','method'=>'POST']) !!}
                        {!! csrf_field() !!}


                        <div class="form-group">

                            <img class="img-responsive img-rounded center-block text-center" style="height: 200px" id="blah"
                                 src="{{asset('avatar/'.auth()->user()->avatar)}}" alt="">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file text-center">
                                    <span class="fileinput-new " >Choisissiez file</span>
                                    <span class="fileinput-exists" >Change</span>
                                    <input id="imgInp" type="file" name="img">
                                </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimier</a>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 center-">
                                    Sauvgarder
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                        {!! Form::close() !!}
                    </div>
                </div>


        </div>
    </div>


@endsection


@section('js')
    <script src="{{asset('dashboard/js/jasny-bootstrap.js')}}"></script>

@endsection




