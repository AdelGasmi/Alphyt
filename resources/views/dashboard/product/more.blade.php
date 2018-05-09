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
    <div class="row pt-5 justify-content-center" style="width:100%">
        <div class="col-sm-8">
            <div class="white-box text-center">
                {!! Form::open(["url"=>"product/fields/".$product->id]) !!}
                {!! csrf_field() !!}
                {!! method_field('PATCH') !!}

                @foreach(\App\Categorie::find($product->categorie_id)->fields as $field)
                    <div class="form-group">
                        <label class="col-md-12"
                               for="example-text">{{$field->name}}
                        </label>
                        <div class="col-md-12">
                            <textarea required="true" name="{{$field->id}}"
                                   {{$value=\App\ValueField::where([
                                       ['field_id','=',$field->id],
                                       ['product_id','=',$product->id]
                                   ])->first()}}
                                   class="form-control" placeholder="">
                                @if($value)
                                   {{$value->value}}
                                @endif
                            </textarea>
                        </div>
                    </div>
                @endforeach

                <button class="btn btn-info"> Sauvgarde</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection
