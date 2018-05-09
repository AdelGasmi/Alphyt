<header class="page_header header_white toggler_right">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 display_table">
                <div class="header_left_logo display_table_cell">
                    <a href="index.html" class="logo top_logo">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>

                <div class="header_mainmenu display_table_cell text-right">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li id="home-button" class="">
                                <a href="{{url('/')}}">Accueil</a>
                            </li>
                            <li id="products-button" class="">
                                <a href="{{url('products')}}">Produits</a>
                            </li>
                            @foreach(\App\Page::all() as $page)
                                <li id="{{$page->title}}-button" class="">
                                    <a href="{{url('page/'.$page->id.'/'.$page->title)}}">{{$page->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler -->
                    <span class="toggle_menu">
									<span></span>
								</span>
                </div>
            </div>

        </div>
    </div>

</header>
