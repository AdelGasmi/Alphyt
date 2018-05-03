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
    @can('add role')
        <div class="col-sm-12">
            <div class="white-box text-center">
                <button type="button"
                        class="fcbtn btn btn-outline btn-success  btn-rounded "
                        data-toggle="modal"
                        data-target="#addRole">
                                     <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                     </span>
                    Ajouter Role
                </button>

                <div class="modal fade" id="addRole" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span
                                            aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title"
                                    id="exampleModalLabel1">Ajouter Role</h4>
                            </div>
                            <div class="modal-body">

                                {!! Form::open(["url"=>"role/"]) !!}
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="col-md-12"
                                           for="example-text">Role
                                    </label>
                                    <div class="col-md-12">
                                        <input required="true" name="name" type="text"
                                               value=""
                                               class="form-control"
                                               placeholder="">
                                    </div>
                                </div>


                                <div class="col-md-12 text-center">
                                    <br>
                                    <button class="btn btn-info"> Sauvgarde</button>
                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Annuler
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    <div class="col-sm-12">
        <div class="white-box">
            <table id="roleTable" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="text-center">Role</th>
                    @can('edit role')
                        <th class="text-center">Modifier</th>
                    @endcan

                    @can('delete role')
                        <th class="text-center">Suprimmer</th>
                    @endcan


                </tr>
                </thead>

                </tfoot>
                <tbody>
                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                    <tr>
                        <td class="text-center">{{$role->name}}</td>
                        @can('edit role')
                            <td class="text-center">
                                <button type="button"
                                        class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                        data-toggle="modal"
                                        data-target="#edit{{$role->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                    Modifier
                                </button>

                                <div class="modal fade" id="edit{{$role->id}}" tabindex="-1" role="dialog"
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

                                                {!! Form::open(["url"=>"role/".$role->id]) !!}
                                                {!! csrf_field() !!}
                                                {!! method_field('PATCH') !!}

                                                <div class="form-group">
                                                    <label class="col-md-12"
                                                           for="example-text">Role
                                                    </label>
                                                    <div class="col-md-12">
                                                        <input required="true" name="name" type="text"
                                                               value="{{$role->name}}"
                                                               class="form-control"
                                                               placeholder="">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 text-center">
                                                    <br>
                                                    <button class="btn btn-info"> Sauvgarde</button>
                                                    {!! Form::close() !!}
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Annuler
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        @endcan
                        @can('delete role')
                            <td class="text-center">
                                <button type="button"
                                        class="fcbtn btn btn-outline btn-danger btn-1fbtn-info btn-rounded"
                                        data-toggle="modal"
                                        data-target="#delete{{$role->id}}"
                                >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                    Supprimer
                                </button>
                                <div class="modal fade" id="delete{{$role->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title"
                                                    id="exampleModalLabel1"> Supprimer Categorie </h4>
                                            </div>
                                            <div class="modal-body">
                                                Vous etes sure ??
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <br>
                                                <form action="{{url('role/'.$role->id)}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
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
                            </td>
                        @endcan


                    </tr>
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

        $('#roleTable').DataTable();

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