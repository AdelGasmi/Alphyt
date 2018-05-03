@extends('dashboard_layout.master')


@section('content')

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

    <div class="col-sm-12">
        <div class="white-box">
            <table id="allUsers" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Avatar</th>
                    <th class="text-center">Status</th>
                    @can('edit user')
                        <th class="text-center">Modifier</th>
                    @endcan

                    @can('delete user')
                        <th class="text-center">Active/Desactive</th>
                    @endcan

                </tr>
                </thead>


                <tbody>
                @foreach($users as $user)
                    @if($user->id!=auth()->id())
                        <tr>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">
                                <img class="img-circle" style="height: 60px;width: 60px"
                                     src="{{asset('avatar/'.$user->avatar)}}" alt="">
                            </td>
                            <td class="text-center">

                                @if($user->active)
                                    <div class="label label-success">
                                        Active
                                    </div>
                                @else
                                    <div class="label label-danger">
                                        Desactive
                                    </div>

                                @endif
                            </td>
                            @can('edit user')

                                <td class="text-center">
                                    <button type="button"
                                            class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                            data-toggle="modal"
                                            data-target="#edit{{$user->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                        Modifier
                                    </button>

                                    <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title"
                                                        id="exampleModalLabel1">Modifier</h4>
                                                </div>
                                                <div class="modal-body">

                                                    {!! Form::open(["url"=>"editUser/".$user->id]) !!}
                                                    {!! csrf_field() !!}


                                                    <div class="form-group">
                                                        <label class="col-md-12"
                                                               for="example-text">Name
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input required="true" name="name" type="text"
                                                                   value="{{$user->name}}"
                                                                   class="form-control"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12"
                                                               for="example-email">E-mail
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input required="true" name="email" type="email"
                                                                   value="{{$user->email}}"
                                                                   class="form-control"
                                                                   placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <button class="btn btn-info"> Sauvgarde</button>
                                                        {!! Form::close() !!}
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">
                                                            Annuler
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            @endcan

                            @can('delete user')
                                <td class="text-center">
                                    @if($user->active)
                                        <button type="button"
                                                class="fcbtn btn btn-outline btn-danger btn-1fbtn-info btn-rounded"
                                                data-toggle="modal"
                                                data-target="#delete{{$user->id}}"
                                        >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                            Desactiver l'utilisateur
                                        </button>
                                        <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="exampleModalLabel1"> Desactiver l'utilisateur </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Vous etes sure ??
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <form action="{{url('deleteUser/'.$user->id)}}"
                                                              method="post">
                                                            {{csrf_field()}}
                                                            <button class="btn btn-info" type="submit">
                                                                Sauvgarder
                                                            </button>
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">
                                                                Annuler
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <button type="button"
                                                class="fcbtn btn btn-outline btn-success btn-1fbtn-info btn-rounded"
                                                data-toggle="modal"
                                                data-target="#activate{{$user->id}}"
                                        >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                            Activer l'utilisateur
                                        </button>
                                        <div class="modal fade" id="activate{{$user->id}}" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="exampleModalLabel1">Active utilisateur </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Vous etes sure ??
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <form action="{{url('activateUser/'.$user->id)}}"
                                                              method="post">
                                                            {{csrf_field()}}
                                                            <button class="btn btn-info" type="submit">
                                                                Sauvgarde
                                                            </button>
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">
                                                                Annuler
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </td>
                            @endcan

                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('js')

    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>

        $('#allUsers').DataTable();

        $('.dt-button').removeClass('dt-button').addClass('btn btn-danger waves-effect waves-light m-r-10 ')
    </script>
@endsection

@section('css')
    <style>
        .btn-label {
            background: none;
        }
    </style>
    <link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>

@endsection