<footer class="page_footer ds parallax section_padding_top_100 section_padding_bottom_50">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-4">

                <div class="widget widget_text">

                    <h3 class="widget-title">
                        Siége<span class="highlight regular"> Social </span>
                    </h3>

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-map-marker highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            Route de l’Aéroport, Dar El Beida- Alger, Algérie
                        </div>
                    </div>

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-pencil highlight fontsize_16"></i>
                        </div>
                        <div class="media-body greylinks underlined-links">
                            <a href="mailto:info@alphyt.com">info@alphyt.com</a>
                        </div>
                    </div>

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-phone highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            + 213 (0) 21 50 88 05
                        </div>
                    </div>

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-fax highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            + 213 (0) 21 50 75 12
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-4">
                <div class="widget widget_categories">

                    <h3 class="widget-title">Nos
                        <span class="highlight regular">Produits</span>
                    </h3>
                    <ul class="greylinks">
                        @foreach(\App\Categorie::all() as $category)
                            <li>
                                <a href="#" title="">{{$category->name}}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_nav_menu">

                    <h3 class="widget-title">Liens
                        <span class="highlight regular">Utiles</span>
                    </h3>
                    <div>
                        <ul class="menu greylinks fontsize_16">
                            <li class="">
                                <a href="{{url('/')}}"> Acceuil </a>
                            </li>
                            <li class="">
                                <a href="{{url('/products')}}">Nos produits</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<section class="ls page_copyright table_section section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="grey">&copy; Copyright 2018 Alphyt</p>
            </div>
        </div>
    </div>
</section>
<section class="page_topline cs section_padding_15 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center text-md-left">
                @if(\Carbon\Carbon::now()->year>2019)
Developer & Designed By : <a href="https://www.facebook.com/A.BEDERRAR">BEDERRAR Allaeddine</a>
                @endif
            </div>

            <div class="col-md-10 text-center text-md-right">

                <div class="inline-elem">

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-map-marker highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">

                            Route de l’Aéroport, Dar El Beida- Alger, Algérie

                        </div>
                    </div>

                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-phone highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">

                            + 213 (0) 21 50 88 05

                        </div>
                    </div>


                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-envelope highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">

                            info@alphyt.com

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
</section>