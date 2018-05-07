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
                Ajouter Produit
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
                                id="exampleModalLabel1">Ajouter Produit</h4>
                        </div>
                        <div class="modal-body">

                            {!! Form::open(["url"=>"product/",'files'=>'true']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-12"
                                       for="example-text">Title
                                </label>
                                <div class="col-md-12">
                                    <input required="true" name="title" type="text"
                                           value="{{old('title')}}"
                                           class="form-control"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12"
                                       for="example-text">Categorie
                                </label>
                                <div class="col-md-12">
                                    <select name="categorie_id" class="form-control" required>
                                        @foreach(\App\Categorie::all() as $categorie)
                                            <option value="{{$categorie->id}}" >{{$categorie->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"
                                       for="example-text">Image
                                </label>
                                <div class="col-md-12">
                                    <input type="file" name="img" class="dropify" required/>
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
            <table id="productTable" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Categorie</th>
                    <th class="text-center">Details</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Active/Desactive</th>

                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{$product->title}}</td>

                        <td class="text-center"><img style="height: 150px" src="{{asset('img/product/'.$product->img)}}"
                                                     alt=""
                                                     class="img-responsive"></td>
                        <td class="text-center">
                            @if($product->categorie)
                                {{$product->categorie->name}}
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{url('product/more/'.$product->id)}}" class="btn btn-success btn-rounded btn-outline">
                                <span class="fa fa-plus"></span> Details
                            </a>
                        </td>
                        <td class="text-center">
                            <button type="button"
                                    class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                    data-toggle="modal"
                                    data-target="#edit{{$product->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                Modifier
                            </button>

                            <div class="modal fade" id="edit{{$product->id}}" tabindex="-1" role="dialog"
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

                                            {!! Form::open(["url"=>"product/".$product->id,'files'=>'true']) !!}
                                            {!! csrf_field() !!}
                                            {!! method_field('PATCH') !!}

                                            <div class="form-group">
                                                <label class="col-md-12"
                                                       for="example-text">Nom
                                                </label>
                                                <div class="col-md-12">
                                                    <input required="true" name="title" type="text"
                                                           value="{{$product->title}}"
                                                           class="form-control"
                                                           placeholder="">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-12"
                                                       for="example-text">Categorie
                                                </label>
                                                <div class="col-md-12">
                                                    <select name="categorie_id" class="form-control" id="">
                                                        @foreach(\App\Categorie::all() as $categorie)
                                                            <option value="{{$categorie->id}}" {{($categorie->id==$product->categorie->id)?'selected':''}}>{{$categorie->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12"
                                                       for="example-text">Image
                                                </label>
                                                <div class="col-md-12">
                                                    <input type="file" name="img" class="dropify"
                                                           data-default-file="{{asset('img/product/'.$product->img)}}"/>
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
                                    data-target="#delete{{$product->id}}"
                            >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                Supprimer Categorie
                            </button>
                            <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" role="dialog"
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
                                            <form action="{{url('product/'.$product->id)}}"
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

        $('#productTable').DataTable();

        $('.dt-button').removeClass('dt-button').addClass('btn btn-danger waves-effect waves-light m-r-10 ')
    </script>
    <script src="{{asset('dashboard/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

        });
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
    <link rel="stylesheet"
          href="{{asset('dashboard/plugins/bower_components/dropify/dist/css/dropify.min.css')}}">
@endsection


