<header id="header" class="header">
    <div class="position-absolute load_page"></div>
    <div class="header_desktop  position-relative ">
        <input type="checkbox" id="checkbox__nav" class="d-none">
        <label id="label__checkbox__nav" for="checkbox__nav"></label>
        <div class="d-none d-md-block header_top">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="left_top">
                        Default welcome msg!
                    </div>
                    <div class="right_top d-flex">
                        <div class="account">
                            <div class="dropdown show">
                                <a class="btn  " href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bxs-user'></i> My account
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class='bx bxs-user-circle'></i> Sign up</a>
                                    <a class="dropdown-item" href="#"><i class='bx bx-log-in'></i> Sign in</a>

                                </div>
                            </div>
                        </div>
                        <div class="currency">
                            <div class="dropdown show">
                                <a class="btn " href="#" role="button" id="" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <span>USD</span> <i class='bx bx-dollar'></i><i class='bx bx-chevron-down'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="#"><i class='bx bx-dollar'></i> USD </a>
                                    <a class="dropdown-item" href="#"><i class='bx bx-dollar'></i> VND</a>
                                </div>
                            </div>
                        </div>
                        <div class="language">
                            <div class="dropdown show">
                                <a class="btn " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="{{asset('assets/clients/images/menu/icon/1.jpg')}}" alt=" "> <span>English</span> <i
                                        class='bx bx-chevron-down'></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><img src="{{asset('assets/clients/images/menu/icon/1.jpg')}}"
                                                                           alt=" ">
                                        English</a>
                                    <a class="dropdown-item" href="#"><img src="{{asset('assets/clients/images/menu/icon/2.jpg')}}"
                                                                           alt=" ">
                                        French </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="header_main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-4 col-lg-3 col_logo">
                        <div id="logo" class="d-flex align-items-center h-100">
                            <a href="index.html" class="logo nav-link pl-0 ">
                                <img src="{{asset('assets/clients/images/menu/logo/1.jpg')}}" alt=" ">
                            </a>
                        </div>
                    </div>
                    <div class="col-7 d-none d-lg-block">
                        <ul class="nav justify-content-end h-100 align-items-center  ">
                            <li class="nav-item menu__item h-100 d-flex align-items-center ">
                                <a href="{{route('home')}}" class="nav-link font-weight-bold nav_menu_link ">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item menu__item h-100 d-flex align-items-center ">
                                <a href="{{route('products')}}" class="nav-link font-weight-bold nav_menu_link ">
                                    PRODUCTS
                                </a>
                            </li>
                            <li class="nav-item menu__item h-100 d-flex align-items-center position-relative ">
                                <a href="javascript:void(0);" class="nav-link nav_menu_link font-weight-bold ">
                                    BLOG <i class="fa fa-angle-down pl-1 " aria-hidden="true "></i>
                                </a>

                                <div class="collapse__item position-absolute border home__item_popup ">
                                    <ul class="nav flex-column pt-3 pb-3">
                                        <li class="nav-item menu__item blog_item position-relative ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Grid View <i class="fa fa-angle-down float-right arrow__blog_left "
                                                             aria-hidden="true "></i>
                                            </a>
                                            <div class="collapse__right border ">
                                                <ul class="nav flex-column collapse__right__item ">
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Grid View 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Grid View 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Grid View 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Grid View 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item menu__item blog_item position-relative ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                List View <i class="fa fa-angle-down float-right arrow__blog_left "
                                                             aria-hidden="true "></i>
                                            </a>
                                            <div class="collapse__right border ">
                                                <ul class="nav flex-column collapse__right__item ">
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            List View 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            List View 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            List View 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            List View 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item menu__item blog_item position-relative ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Blog Details <i class="fa fa-angle-down float-right arrow__blog_left "
                                                                aria-hidden="true "></i>
                                            </a>
                                            <div class="collapse__right border ">
                                                <ul class="nav flex-column collapse__right__item ">
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Details 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Details 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Details 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Details 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item menu__item blog_item position-relative ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Blog Format <i class="fa fa-angle-down float-right arrow__blog_left "
                                                               aria-hidden="true "></i>
                                            </a>
                                            <div class="collapse__right border ">
                                                <ul class="nav flex-column collapse__right__item ">
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Format 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Format 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Format 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item menu__item ">
                                                        <a href="list.html" class="nav-link nav_menu_link ">
                                                            Blog Format 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item position-relative menu__item h-100 d-flex align-items-center ">
                                <a href="javascript:void(0);" class="nav-link font-weight-bold nav_menu_link ">
                                    PAGE <i class="fa fa-angle-down pl-1 " aria-hidden="true "></i>
                                </a>

                                <div
                                    class="collapse__item position-absolute border home__item_popup pt-3 pb-3 pr-2 pl-2">
                                    <ul class="nav flex-column ">
                                        <li class="nav-item menu__item ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Page 1
                                            </a>
                                        </li>
                                        <li class="nav-item menu__item ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Page 2
                                            </a>
                                        </li>
                                        <li class="nav-item menu__item ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Page 3
                                            </a>
                                        </li>
                                        <li class="nav-item menu__item ">
                                            <a href="list.html" class="nav-link nav_menu_link ">
                                                Page 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item menu__item ">
                                <a href=" " class="nav-link font-weight-bold nav_menu_link ">
                                    CONTACT
                                </a>
                            </li>
                            <li class="nav-item menu__item ">
                                <a href=" " class="nav-link font-weight-bold nav_menu_link ">
                                    ABOUT US
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="col-md-5 col-12 d-lg-none d-sm-flex justify-content-center align-items-center shop_cat_box_mb">
                        <div class="position-relative w-100">
                            <div data-toggle="collapse" data-target="#shop__categories__tablet "
                                 class="text-white shop_cat_mb">
                                <i class="fa fa-outdent " aria-hidden="true "></i>
                                <span class="pl-2 ">SHOP BY CATEGORIES</span>
                                <i class="fa fa-angle-down float-right "></i>
                            </div>
                            <div id="shop__categories__tablet"
                                 class="collapse border position-absolute bg-white w-100 font-weight-lighter accordion__categories__box">
                                <ul class="nav flex-column" id="accordion__categories">
                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="#fashion__tablet" data-toggle="collapse"
                                           class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Fashion <i class="fa fa-plus float-right"></i>
                                        </a>

                                        <ul id="fashion__tablet" class="list-unstyled collapse"
                                            data-parent="#accordion__categories">
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#fashion__women__tablet">
                                                    WOMENT <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#fashion__tablet"
                                                    id="fashion__women__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Dresses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Shirts & Blouses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Blazers
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Lingerie
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Jeans
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#fashion__Men__tablet">
                                                    Men<i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#fashion__tablet"
                                                    id="fashion__Men__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Dresses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Shirts & Blouses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Blazers
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Lingerie
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Jeans
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#fashion__kid__tablet">
                                                    Kids <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#fashion__tablet"
                                                    id="fashion__kid__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Dresses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Shirts & Blouses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Blazers
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Lingerie
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Jeans
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>

                                    </li>

                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="#electronics__tablet" data-toggle="collapse"
                                           class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Electronic <i class="fa fa-plus float-right"></i>
                                        </a>

                                        <ul id="electronics__tablet" class="list-unstyled collapse"
                                            data-parent="#accordion__categories">
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#camera__tablet">
                                                    Cameras <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#electronics__tablet"
                                                    id="camera__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Camera 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Camera 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Camera 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Camera 4
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#audio__tablet">
                                                    Audio <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#electronics__tablet"
                                                    id="audio__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Audio 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Audio 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Audio 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Audio 4
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#cellphone__tablet">
                                                    Cell Phones <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#electronics__tablet"
                                                    id="cellphone__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Cell Phones 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Cell Phones 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Cell Phones 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            Cell Phones 4
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-item shop__categories__item ">
                                                <a data-toggle="collapse" class="nav-link shop__categories__item__a "
                                                   href="#tv_video__tablet">
                                                    TV & Video <i class="fa fa-plus float-right"></i>
                                                </a>
                                                <ul class="list-unstyled collapse" data-parent="#electronics__tablet"
                                                    id="tv_video__tablet">
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            TV & Video 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            TV & Video 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            TV & Video 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item shop__categories__item ">
                                                        <a class="nav-link py-1 shop__categories__item__a " href="list.html">
                                                            TV & Video 4
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="list.html" class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Toys & Hobbies
                                        </a>
                                    </li>

                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="list.html" class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Sports & Outdoors
                                        </a>
                                    </li>
                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="list.html" class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Smartphone & Tablet
                                        </a>
                                    </li>

                                    <li class="nav-item shop__categories__item position-relative ">
                                        <a href="list.html" class="nav-link text-dark shop__categories__item__a cat_parent">
                                            Health & Beauty
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-4 col-md-3  col-lg-2 d-flex justify-content-end box_right_header_mb">
                        <div class="d-lg-none ">
                            <ul class="nav align-items-center ">
                                <li class="nav-item ml-auto pr-3 ">
                                    <label for="checkbox__nav">
                                        <i class="fa fa-bars bars__tablet " aria-hidden="true "></i>
                                    </label>
                                </li>
                                <li class="nav-item show__cart">
                                    <a href="cart.html"
                                       class="  text-center text-white d-inline-block  position-relative cart_box ">
                                        <i class="fa fa-shopping-cart " aria-hidden="true "></i>
                                        <span class="total__cart position-absolute"></span>
                                        <br>
                                        <span class="text-cart ">
                        <span class="text-center ">My cart</span>
                        <br>
                        <span class="total_price_cart text-white ">$0</span>
                      </span>
                                    </a>
                                    <div class="hidden__cart empty position-absolute px-3 ">
                                        <div class="product_cart_header">

                                        </div>
                                        <div class="empty_cart_header">
                                            <div class="icon">
                                                <i class="bx bxl-shopify"></i>
                                            </div>
                                            <div class="note text-center">
                                                Ch??a c?? s???n ph???m n??o
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="d-lg-inline-block d-none show__cart text-right position-relative ">
                            <a href="cart.html"
                               class=" text-center text-white d-inline-block  position-relative cart_box ">
                                <i class="fa fa-shopping-cart " aria-hidden="true "></i>
                                <span class="total__cart position-absolute"></span>
                                <br>
                                <span class="text-cart ">
                    <span class="text-center ">My cart</span>
                    <br>
                    <span class="total_price_cart text-white ">$0</span>
                  </span>
                            </a>

                            <div class="hidden__cart empty position-absolute px-3 ">
                                <div class="product_cart_header">

                                </div>
                                <div class="empty_cart_header">
                                    <div class="icon">
                                        <i class="bx bxl-shopify"></i>
                                    </div>
                                    <div class="note text-center">
                                        Ch??a c?? s???n ph???m n??o
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block header_cat_box">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="category_box">
                            <div class="dropdown show">
                                <a class="btn text-uppercase shop_cat" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-outdent mr-2" aria-hidden="true"></i> Shop by categories <i
                                        class="fa fa-angle-down pl-2 float-right " aria-hidden="true "></i>
                                </a>
                                <div class="dropdown-menu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item shop__categories__item position-relative">
                                            <a href="list.html" class="nav-link text-dark border-bottom categories__link">
                                                Fashion <i class="fa fa-angle-down pl-2"></i>
                                            </a>

                                            <div class="shop__categories__item__right  ">
                                                <div class="row mx-0">
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-3 categories__item__right py-3 ">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                </div>

                                            </div>
                                        </li>
                                        <li class="nav-item shop__categories__item position-relative">
                                            <a href="list.html" class="nav-link text-dark border-bottom categories__link">
                                                Electronic <i class="  fa fa-angle-down pl-2"></i>
                                            </a>
                                            <div class="shop__categories__item__right  ">
                                                <div class="row mx-0">
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-3 categories__item__right py-3 ">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                </div>

                                            </div>
                                        </li>
                                        <li class="nav-item shop__categories__item position-relative">
                                            <a href="list.html" class="nav-link text-dark border-bottom categories__link">
                                                Toy & Hobbies <i class="  fa fa-angle-down pl-2"></i>
                                            </a>
                                            <div class="shop__categories__item__right  ">
                                                <div class="row mx-0">
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-3 categories__item__right py-3 ">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 categories__item__right py-3">
                                                        <ul class="nav flex-column ">
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link font-weight-bold categories__link" href="list.html">
                                                                    WOMENT
                                                                </a>
                                                            </li>

                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Dresses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Shirts & Blouses
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Blazers
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Lingerie
                                                                </a>
                                                            </li>
                                                            <li class="nav-item shop__categories__item">
                                                                <a class="nav-link py-1 categories__link" href="list.html">
                                                                    Jeans
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                </div>

                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="list.html" class="nav-link text-dark border-bottom">
                                                Sports & Outdoors
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="list.html" class="nav-link text-dark border-bottom">
                                                Smartphone & Tablets
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="list.html" class="nav-link text-dark border-bottom">
                                                Health & Beauty
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="list.html" class="nav-link text-dark border-bottom">
                                                Cpmputer & Networking
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="list.html" class="nav-link text-dark  ">
                                                Accessories
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-6 pb-1 pt-1">
                        <form action="" method="" class="h-100 search_form">
                            <div class="row mx-0 h-100 bg-white rounded">
                                <div class="col-xl-8 col-md-7 pr-0">
                                    <input type="text" placeholder="Enter your search key..."
                                           class="w-100 h-100 input__search ">
                                </div>
                                <div class="col-xl-4 col-md-5 pl-0 ">
                                    <div class="h-100 border-left">
                                        <div class="pr-0 pr-lg-3 d-flex align-items-center select_cat_box">
                                            <select name="" class="d-inline-block font-weight-lighter select_cat" id="">
                                                <option value="">All Categories <i class="fa pl-3 fa-angle-down "></i>
                                                </option>
                                                <option value="">Fashion</option>
                                                <option value="">..Women</option>
                                                <option value="">....Dresses</option>
                                                <option value="">....Shirts & Blouses</option>
                                                <option value="">....Blazers</option>
                                                <option value="">....Lingerie</option>
                                                <option value="">....Jeans</option>
                                                <option value="">..Men</option>
                                                <option value="">....Jeans</option>
                                                <option value="">....Shorts</option>
                                                <option value="">....Jeans</option>
                                                <option value="">....Sportswear</option>
                                                <option value="">....Swimswear</option>
                                            </select>

                                        </div>
                                        <button class="btn btn__search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-xl-2 col-3 pl-2">
                        <div class="d-flex align-items-center h-100 justify-content-end">
                            <a href="tel:(080) 1234 567 890" class="text-white d-flex align-items-center"
                               title="(080) 1234 567 890"><i class="fas fa-phone-volume i_phone mr-2"></i>
                                <span class="text-white">(080) 1234 567 890</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav__tablet">
            <input type="checkbox" id="checkbox__nav" class="d-none">
            <label id="label__checkbox__nav" for="checkbox__nav"></label>
            <form action="" method="" class="py-3 px-4 position-relative search_form_mb">
                <label for="checkbox__nav"
                       class="position-absolute text-white h-100 bg-dark px-2 d-flex align-items-center close_menu">
                    <i class="fa fa-times"></i>
                </label>
                <input type="text" class="input__search__tablet " placeholder="Search for item ">
                <button class="position-absolute text-dark btn_search_mb">
                    <i class="fa fa-search "></i>
                </button>
            </form>
            <div class="pr-2">
                <ul class="nav flex-column mt-3 menu_box_mb" id="accordion">
                    <li class="nav-item">
                        <a href="#home__nav__tablet" class="nav-link" data-toggle="collapse">
                            Home <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="home__nav__tablet" data-parent="#accordion">
                            <li class="nav-item"><a href="list.html" class="nav-link pl-4">Home 1</a></li>
                            <li class="nav-item"><a href="list.html" class="nav-link pl-4">Home 2</a></li>
                            <li class="nav-item"><a href="list.html" class="nav-link pl-4">Home 3</a></li>
                            <li class="nav-item"><a href="list.html" class="nav-link pl-4">Home 4</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#shop__nav__tablet" class="nav-link" data-toggle="collapse">
                            Shop <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="shop__nav__tablet" data-parent="#accordion">
                            <li><a href="list.html" class="nav-link">Grid View</a></li>
                            <li><a href="list.html" class="nav-link">Shop list</a></li>
                            <li><a href="list.html" class="nav-link">Single Product style</a></li>
                            <li><a href="list.html" class="nav-link">Single Product style</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#blog__nav__tablet" class="nav-link" data-toggle="collapse">
                            Blog <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="blog__nav__tablet" data-parent="#accordion">
                            <li><a href="list.html" class="nav-link">Blog 1</a></li>
                            <li><a href="list.html" class="nav-link">Blog 2</a></li>
                            <li><a href="list.html" class="nav-link">Blog 3</a></li>
                            <li><a href="list.html" class="nav-link">Blog 4</a></li>
                            <li><a href="list.html" class="nav-link">Blog 5</a></li>
                            <li><a href="list.html" class="nav-link">Blog 6</a></li>


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#page__nav__tablet" class="nav-link" data-toggle="collapse">
                            Pages <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="page__nav__tablet" data-parent="#accordion">
                            <li><a href="list.html" class="nav-link">Page 1</a></li>
                            <li><a href="list.html" class="nav-link">Page 2</a></li>
                            <li><a href="list.html" class="nav-link">Page 3</a></li>
                            <li><a href="list.html" class="nav-link">Page 4</a></li>
                            <li><a href="list.html" class="nav-link">Page 5</a></li>
                            <li><a href="list.html" class="nav-link">Page 6</a></li>


                        </ul>
                    </li>
                </ul>
            </div>

            <div class="pr-2 mt-4">
                <ul class="nav flex-column mt-3 menu_box_mb" id="accordion__user">
                    <li class="nav-item">
                        <a href="#user__nav__tablet" class="nav-link" data-toggle="collapse">
                            User settings <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="user__nav__tablet"
                            data-parent="#accordion__user">
                            <li class="nav-item"><a href="" class="nav-link pl-4">My Account</a></li>
                            <li class="nav-item"><a href="" class="nav-link pl-4">Login | Register</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#currency__nav__tablet" class="nav-link" data-toggle="collapse">
                            Currency <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="currency__nav__tablet"
                            data-parent="#accordion__user">
                            <li><a href="" class="nav-link">VND</a></li>
                            <li><a href="" class="nav-link">USD</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#language" class="nav-link" data-toggle="collapse">
                            Language <i class="fa fa-plus float-right" aria-hidden="true"></i>
                        </a>
                        <ul class="list-unstyled collapse" id="language" data-parent="#accordion__user">
                            <li><a href="" class="nav-link">English</a></li>
                            <li><a href="" class="nav-link">France</a></li>

                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</header>
