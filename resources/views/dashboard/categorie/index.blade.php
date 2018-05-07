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
        <div class="white-box text-center">
            <button type="button"
                    class="fcbtn btn btn-outline btn-success  btn-rounded "
                    data-toggle="modal"
                    data-target="#addCategorie">
                                     <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                     </span>
                Ajouter Categorie
            </button>

            <div class="modal fade" id="addCategorie" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"
                                id="exampleModalLabel1">Ajouter Categorie</h4>
                        </div>
                        <div class="modal-body">

                            {!! Form::open(["url"=>"categorie/"]) !!}
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-12"
                                       for="example-text">Nom
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
    <div class="col-sm-12">
        <div class="white-box">
            <table id="categoriesTable" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="text-center">Categorie</th>
                    <th class="text-center">Details</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Active/Desactive</th>

                </tr>
                </thead>

                </tfoot>
                <tbody>
                @foreach($categories as $categorie)
                    <tr>
                        <td class="text-center">{{$categorie->name}}</td>
                        <td class="text-center">
                            <a href="{{url('categorie/more/'.$categorie->id)}}" class="btn btn-success btn-rounded btn-outline">
                                Details
                            </a>
                        </td>
                        <td class="text-center">
                            <button type="button"
                                    class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                    data-toggle="modal"
                                    data-target="#edit{{$categorie->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                Modifier
                            </button>

                            <div class="modal fade" id="edit{{$categorie->id}}" tabindex="-1" role="dialog"
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

                                            {!! Form::open(["url"=>"categorie/".$categorie->id]) !!}
                                            {!! csrf_field() !!}
                                            {!! method_field('PATCH') !!}

                                            <div class="form-group">
                                                <label class="col-md-12"
                                                       for="example-text">Nom
                                                </label>
                                                <div class="col-md-12">
                                                    <input required="true" name="name" type="text"
                                                           value="{{$categorie->name}}"
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
                        <td class="text-center">
                            <button type="button"
                                    class="fcbtn btn btn-outline btn-danger btn-1fbtn-info btn-rounded"
                                    data-toggle="modal"
                                    data-target="#delete{{$categorie->id}}"
                            >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                Supprimer Categorie
                            </button>
                            <div class="modal fade" id="delete{{$categorie->id}}" tabindex="-1" role="dialog"
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
                                            <form action="{{url('categorie/'.$categorie->id)}}"
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

        $('#categoriesTable').DataTable();

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