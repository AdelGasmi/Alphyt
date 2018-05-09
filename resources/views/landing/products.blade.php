@extends('landing_layout.master')


@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Nos Produits</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_50">
        <div class="container">
            <div class="row display_table_md justify-content-center">
                <div class="col-md-8 display_table_cell_md">
                    <h2 class="section_header">
                        <span class="highlight thin">Nos Produits</span>
                    </h2>
                    <br>
                    @foreach($categories as $category)
                        <h3>{{$category->name}}</h3>
                        <ul>
                            @foreach($category->products as $product)
                                <li>
                                    <a href="{{url('products/'.$product->id)}}">{{$product->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection