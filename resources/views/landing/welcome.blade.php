@extends('landing_layout.master')


@section('content')
    <section class="intro_section ds black page_mainslider">
        <div class="flexslider" data-nav="false">
            <ul class="slides">

                <li>
                    <img src="images/slide01.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="thin">
                                                <strong>text diaporama 1 </strong>
                                                <br> suite du text 1
                                            </h3>
                                        </div>
                                        <div class="intro-layer inline-elem small-margin" data-animation="fadeInUp">
                                            <a class="theme_button inverse" href="#">boutton 1</a>
                                            <a class="theme_button" href="#">bouton 2</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="images/slide02.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="thin">
                                                <strong>text diaporama 2 </strong>
                                                <br> suite du text 2
                                            </h3>
                                        </div>
                                        <div class="intro-layer inline-elem small-margin" data-animation="fadeInUp">
                                            <a class="theme_button inverse" href="#">boutton 1</a>
                                            <a class="theme_button" href="#">boutton 2</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="images/slide03.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="thin">
                                                <strong>text diaporama 3 </strong>
                                                <br> suite du text 3
                                            </h3>
                                        </div>
                                        <div class="intro-layer inline-elem small-margin" data-animation="fadeInUp">
                                            <a class="theme_button inverse" href="#">boutton 1</a>
                                            <a class="theme_button" href="#">bouton 2</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

            </ul>
        </div>
        <!-- eof flexslider -->
    </section>

    <section id="about" class="ls section_padding_50 table_section table_section_md">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 text-center">
                    <img src="images/flower.png" alt="" />
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <h2 class="section_header">
                        A Propos d '
                        <span class="highlight thin">Alphyt</span>
                    </h2>
                    <p>L'entreprise publique économique <span class="verttext"> L'ALGERIENNE DES PHYTOSANITAIRES</span>
                        dénommée en abrégé <span class="verttext">ALPHYT « EPE-SPA »</span>, au capital social de 459 040 000,00 DA, <strong> FILIALE DU GROUPE INDUSTRIEL ASMIDAL</strong>, et sise à Route de l’Aéroport, Dar El Beida- Alger, Algérie, a été créée
                        le 02 décembre 2003 ,et <strong>a pour vocation la formulation, la commercialisation et le développement des produits phytosanitaires à usage agricole et d'hygiène publique</strong>.  </p>


                    <p class="topmargin_50">
                        <a href="{{url('about')}}" class="theme_button color1">Lire la suite </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ds call_to_action parallax section_padding_top_75 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header big">
                        Formulations & commercialisation de produits phytosanitaires
                        <span class="highlight regular">Alphyt</span>
                    </h2>
                    <p>Dans un marché fortement concurrentiel et face aux nouvelles technologies, l'Algérienne des phytosanitaires poursuit son développement grâce à la stratégie mise en place et oeuvre pour
                        une amélioration constante de la qualité afin de répondre aux attentes de sa clientèle.</p>
                    <p class="topmargin_50">
                        <a href="about.html" class="theme_button color1">Lire la Suite</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="ls section_padding_top_100 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">
                        Nos
                        <span class="highlight thin">Produits</span>
                    </h2>
                    <p></p>
                </div>
            </div>
            <div class="row topmargin_30 columns_margin_bottom_30 columns_margin_top_0">
                <div class="col-md-6">
                    <div class="with_padding with_background rounded">
                        <div class="media teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon highlight size_huge">
                                    <i class="greenscape-sprinkle"></i>
                                </div>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="service-single.html">Produits Phytosanitaires pour l'Hygiéne Publique</a>
                                </h4>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1_1" aria-expanded="true">BACTERICIDES - DESINFECTANTS <span class="badge">4</span>
                                </button>
                                <div id="collapsibleNavbar1_1" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">BACTERIOL</a>
                                    <a href="#" class="list-group-item">BIOFOR EXTRA</a>
                                    <a href="#" class="list-group-item">FORMYL PLUS ( ROSE -JASMIN - MILLES FLEURS -LAVANDE .)</a>
                                    <a href="#" class="list-group-item">FORMYL S/C</a>
                                </div>

                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1_2" aria-expanded="true">INSECTICIDES <span class="badge">8</span>
                                </button>
                                <div id="collapsibleNavbar1_2" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">ALPHYTHRINE 2 % ULV</a>
                                    <a href="#" class="list-group-item">ALPHYTHRINE 2.5 WP</a>
                                    <a href="#" class="list-group-item">ALPHYTHRINE 2.5 %EC</a>
                                    <a href="#" class="list-group-item">CERAMETHRINE 10 % EC</a>
                                    <a href="#" class="list-group-item">INSECTANE 10 % EC</a>
                                    <a href="#" class="list-group-item">LAMBDA-CYHALOTHRINE 2 % ULV</a>
                                    <a href="#" class="list-group-item">LAMBDA-CYHALOTHRINE 2.5 % EC</a>
                                    <a href="#" class="list-group-item">LARVIPHOS 500 EC</a>
                                </div>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1_3" aria-expanded="true">RODENTICIDES <span class="badge">1</span>
                                </button>
                                <div id="collapsibleNavbar1_3" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">GRAINS-RATICIDE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="with_padding with_background rounded">
                        <div class="media teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon highlight size_huge">
                                    <i class="greenscape-plant"></i>
                                </div>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="service-single.html">Produits Phytosanitaires à Usage Agricole</a>
                                </h4>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2_1" aria-expanded="true">ACRIDICIDES ( LUTTE ANTI-ACRIDDIENNE ) <span class="badge">5</span>
                                </button>
                                <div id="collapsibleNavbar2_1" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">OXYCURE 50 %</a>
                                    <a href="#" class="list-group-item">QUINOLATE 15</a>
                                    <a href="#" class="list-group-item">SOFRAL</a>
                                    <a href="#" class="list-group-item">SOUFRE FLEUR EXTRA- LEGERE</a>
                                    <a href="#" class="list-group-item">THISAN 80WP</a>
                                </div>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2_2" aria-expanded="true">FONGICIDES FONGICIDES   <span class="badge">2</span>
                                </button>
                                <div id="collapsibleNavbar2_2" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">ALPHYTHRINE 25 EC</a>
                                    <a href="#" class="list-group-item">LAMBDACYTHRINE 25 EC</a>
                                </div>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2_3" aria-expanded="true">INSECTICIDES<span class="badge">5</span>
                                </button>
                                <div id="collapsibleNavbar2_3" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">ALPHYTHRINE 25 EC</a>
                                    <a href="#" class="list-group-item">BEIDAZIT</a>
                                    <a href="#" class="list-group-item">CYPER–AS25 EC</a>
                                    <a href="#" class="list-group-item">LAMBDA-CYTHRINE 25 EC</a>
                                    <a href="#" class="list-group-item">PHOSAL 500</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="with_padding with_background rounded">
                        <div class="media teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon highlight size_huge">
                                    <i class="greenscape-pruner"></i>
                                </div>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="service-single.html">Produits Aérosols</a>
                                </h4>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3_1" aria-expanded="true">AEROSOLS A USAGE DOMESTIQUE <span class="badge">3</span>
                                </button>
                                <div id="collapsibleNavbar3_1" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">BRIFOR Décape four</a>
                                    <a href="#" class="list-group-item">BRIFOR Polish meubles</a>
                                    <a href="#" class="list-group-item">BRIFOR Rénove Plastique</a>
                                </div>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3_2" aria-expanded="true">AEROSOLS A USAGE DOMESTIQUE <span class="badge">7</span>
                                </button>
                                <div id="collapsibleNavbar3_2" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">REVA Citron</a>
                                    <a href="#" class="list-group-item">REVA Fruits exotiques</a>
                                    <a href="#" class="list-group-item">REVA Jasmin/thé</a>
                                    <a href="#" class="list-group-item">REVA Lavande</a>
                                    <a href="#" class="list-group-item">REVA Océan</a>
                                    <a href="#" class="list-group-item">REVA Pêche et Abricot</a>
                                    <a href="#" class="list-group-item">REVA Rose</a>
                                </div>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3_3" aria-expanded="true">INSECTICIDES AEROSOLS <span class="badge">4</span>
                                </button>
                                <div id="collapsibleNavbar3_3" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">MOUBYD Mixte</a>
                                    <a href="#" class="list-group-item">MOUBYD Solution écologique</a>
                                    <a href="#" class="list-group-item">MOUBYD Special Rampants</a>
                                    <a href="#" class="list-group-item">MOUBYD Spécial volants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="with_padding with_background rounded">
                        <div class="media teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon highlight size_huge">
                                    <i class="greenscape-hose"></i>
                                </div>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="service-single.html">Pastilles Inseticides à Usage Doméstique</a>
                                </h4>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar4_1" aria-expanded="true">PASTILLES <span class="badge">1</span>
                                </button>
                                <div id="collapsibleNavbar4_1" class="list-group collapse" data-toggle="collapse">
                                    <a href="#" class="list-group-item">PASTILLES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="ls ms section_padding_top_50 columns_margin_0 bg_text_heading page_projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="filters carousel_filters text-center">
                        <a href="#" data-filter="*" class="selected">Tous les produits</a>
                        <a href="#" data-filter=".Hygiene">Produits Phytosanitaires pour l'Hygiéne Publique</a>
                        <a href="#" data-filter=".Agricole">Produits Phytosanitaires à Usage Agricole</a>
                        <a href="#" data-filter=".planting">Produits Aérosols</a>
                        <a href="#" data-filter=".irrigation">Pastilles Inseticides à Usage Doméstique</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ls ms">
        <div class="owl-carousel filterable-carousel" data-nav="false" data-margin="0" data-loop="true" data-filters=".carousel_filters">
            <div class="vertical-item Hygiene irrigation">
                <div class="item-media">
                    <img src="images/gallery/01.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item Agricole planting">
                <div class="item-media">
                    <img src="images/gallery/02.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item irrigation lawn">
                <div class="item-media">
                    <img src="images/gallery/03.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item design planting lawn">
                <div class="item-media">
                    <img src="images/gallery/04.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item irrigation lawn">
                <div class="item-media">
                    <img src="images/gallery/05.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item design planting">
                <div class="item-media">
                    <img src="images/gallery/06.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item lawn irrigation design">
                <div class="item-media">
                    <img src="images/gallery/07.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item design lawn">
                <div class="item-media">
                    <img src="images/gallery/08.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item irrigation lawn">
                <div class="item-media">
                    <img src="images/gallery/09.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/09.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item planting design">
                <div class="item-media">
                    <img src="images/gallery/10.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/10.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item lawn design">
                <div class="item-media">
                    <img src="images/gallery/11.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/11.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="vertical-item irrigation lawn design">
                <div class="item-media">
                    <img src="images/gallery/12.jpg" alt="">
                    <div class="media-links">
                        <a class="abs-link" title="" data-gal="prettyPhoto[gal]" href="images/gallery/12.jpg"></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="reviews" class="ls page_testimonials section_padding_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true" data-margin="0">
                        <blockquote class="with_quotes topmargin_0 bottommargin_0">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h4><a href="#">Le Président Directeur Général</a></h4>
                                <p class="highlight">Alphyt</p>
                            </div>
                            La  mise en place du site web d’Alphyt est un de ceux qui me tenait le plus à cœur.</br>
                            Sa  réalisation donne une nouvelle image d’Alphyt pour laquelle nous nous attelons  actuellement à accomplir à travers toutes nos actions .<br>
                            Je  vous invite à découvrir ce site qui est le votre .
                        </blockquote>
                        <blockquote class="with_quotes topmargin_0 bottommargin_0">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h4><a href="#">Le Président Directeur Général</a></h4>
                                <p class="highlight">Alphyt</p>
                            </div>
                            C’est  Alphyt qui viens vers vous , alors utilisez-le et faites –nous part de vos  remarques et suggestions qui seront le garant de son amélioration .<br>
                            Nous  avons la conviction que l’avenir de notre agriculture et de l’hygiène publique  sera construit ensemble avec vous , Fellahs ,Agronomes&nbsp;, Epidémiologistes  , Grenetiers , Distributeurs de produits phytosanitaires , Spécialistes en  hygiène publique etc …
                        </blockquote>
                        <blockquote class="with_quotes topmargin_0 bottommargin_0">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h4><a href="#">Le Président Directeur Général</a></h4>
                                <p class="highlight">Alphyt</p>
                            </div>
                            Notre  entreprise confirme son positionnement comme étant un des premiers leaders dans  formulation et la production des pesticides dans le domaine de l’agriculture et  de l’hygiène publique .
                        </blockquote>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">

                        <span class="highlight thin">Actualité</span>
                    </h2>

                </div>
            </div>
            <div class="row topmargin_30">
                <div class="col-sm-6">
                    <article class="vertical-item content-padding post format-standard with_background text-center rounded">

                        <div class="item-media entry-thumbnail">
                            <img src="images/gallery/11.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="blog-single-right.html"></a>
                            </div>
                        </div>

                        <div class="item-content entry-content">
                            <header class="entry-header">

                                <div class="entry-date highlight">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        11 Mars 2018
                                    </time>
                                    <a href="#"></a>
                                </div>
                                <h3 class="entry-title">
                                    <a href="blog-single-right.html" rel="bookmark">APPEL A DISTRIBUTEURS</a>
                                </h3>
                            </header>
                            <!-- .entry-header -->
                            <p>ALPHYT LANCE UN APPEL A DISTRIBUTEURS DANS LES REGIONS EST,OUEST,CENTRE ET SUD,..</p>

                            <p class="topmargin_50">
                                <a href="blog-single-right.html" class="theme_button color1">Lire la suite</a>
                            </p>


                        </div>
                        <!-- .item-content.entry-content -->
                    </article>
                </div>
                <div class="col-sm-6">
                    <article class="vertical-item content-padding post format-standard with_background text-center rounded">

                        <div class="item-media entry-thumbnail">
                            <img src="images/gallery/09.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="blog-single-right.html"></a>
                            </div>
                        </div>

                        <div class="item-content entry-content">
                            <header class="entry-header">

                                <div class="entry-date highlight">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        13 Mars 2018
                                    </time>
                                    <a href="#"></a>
                                </div>

                                <h3 class="entry-title">
                                    <a href="blog-single-right.html" rel="bookmark">Avis De Prorogation De Délai De L’avis De Pré-Qualification National & International Restreint Portant Sélection D’expert En Produits Phytosanitaires</a>
                                </h3>

                            </header>
                            <!-- .entry-header -->

                            <p>Avis De Prorogation De Délai De L’avis De Pré-Qualification National & International Restreint Portant Sélection D’expert En ....</p>

                            <p class="topmargin_50">
                                <a href="blog-single-right.html" class="theme_button color1">Lire la suite</a>
                            </p>

                        </div>
                        <!-- .item-content.entry-content -->
                    </article>
                </div>
            </div>
        </div>
    </section>



@endsection