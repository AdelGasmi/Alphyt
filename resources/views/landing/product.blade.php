@extends('landing_layout.master')


@section('content')
    <section class="intro_section ds black page_mainslider">
        <div class="flexslider" data-nav="false">
            <ul class="slides">
                @foreach($product->images as $image)
                    <li data-thumb="{{asset('img/product/'.$image->image)}}">
                        <img src="{{asset('img/product/'.$image->image)}}" style="height: 400px" alt="">
                    </li>
                @endforeach
            </ul>

        </div>
        <!-- eof flexslider -->
    </section>


    <section class="ls section_padding_50">
        <div class="container">
            <div class="row display_table_md justify-content-center">
                <div class="col-md-8 display_table_cell_md">
                    <h2 class="section_header highlight">
                        {{$product->title}}
                    </h2>
                    <br>

                    <ul>
                        @foreach($product->values as $value)
                            <li>
                                <h5 style="color: #FF0000">{{\App\CategorieField::find($value->field_id)->name}}</h5>
                                <h5>{{$value->value}}</h5>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js')
    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>

@endsection