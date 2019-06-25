<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="h-100 background_bg radius_ltlb_5"
                            data-img-src="{{asset('template/images/login_img.jpg')}}"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="padding_eight_all">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-tab1" data-toggle="tab" href="#login"
                                        role="tab" aria-controls="login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="signup-tab1" data-toggle="tab" href="#signup" role="tab"
                                        aria-controls="signup" aria-selected="false">Sign Up</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    <div class="heading_s1 mb-3">
                                        <h4>Login</h4>
                                    </div>
                                    <form method="post" class="login form_style2">
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="" type="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <a href="#">Lost your password?</a>
                                            <div class="chek-form mb-3">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="exampleCheckbox3" value="">
                                                    <label class="form-check-label" for="exampleCheckbox3">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-block rounded-0"
                                                name="login">Log in</button>
                                        </div>
                                    </form>
                                    <div class="different_login">
                                        <span> or</span>
                                    </div>
                                    <ul class="btn-login list_none text-center">
                                        <li><a href="#" class="btn btn-facebook rounded-0"><i
                                                    class="ion-social-facebook"></i>Facebook</a></li>
                                        <li><a href="#" class="btn btn-google rounded-0"><i
                                                    class="ion-social-googleplus"></i>Google</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="signup" role="tabpanel">
                                    <div class="heading_s1 mb-3">
                                        <h4>Sign Up</h4>
                                    </div>
                                    <form method="post" class="login form_style2">
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="username"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="" type="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="" type="password" name="cpassword"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-block rounded-0"
                                                name="login">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="different_login">
                                        <span> or</span>
                                    </div>
                                    <ul class="btn-login list_none text-center">
                                        <li><a href="#" class="btn btn-facebook rounded-0"><i
                                                    class="ion-social-facebook"></i>Facebook</a></li>
                                        <li><a href="#" class="btn btn-google rounded-0"><i
                                                    class="ion-social-googleplus"></i>Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- START HEADER -->
<header class="header_wrap dark_skin">
    <div class="top-header bg_blue_dark2 light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><a href="#"><i class="ti-mobile"></i>123-456-7890</a></li>
                        <li><a href="#"><i class="ti-email"></i>info@yourmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                        <ul class="list_none social_icons social_white text-center text-md-right">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        <ul class="list_none header_list border_list ml-1">
                            <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
                            <li><a href="#" class="btn btn-default btn-sm rounded-0">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
                <img class="logo_light" src="{{asset('template/images/logo_white.png')}}" alt="logo" />
                <img class="gambar1" src="{{asset('template/images/Tempatgambar/gambar1.png')}}" height="100" width="120" alt="logo" />
                <img class="logo_default" src="{{asset('template/images/logo_dark.png')}}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">Dashboard</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{url('dashboard/berita')}}">News</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item active" href=""></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog.html">Profile Sekolah</a></li>
                                </ul>
                            </div>
                        </li>

                        <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Kepegawaian</a>
                            <div class="dropdown-menu">
                                <ul>

                                    <li><a class="dropdown-item nav-link nav_item" href="/dashboard/teacher">Data Guru</a></li>


                                </ul>
                            </div>
                        </li>
                        <ul class="navbar-nav">
                            <li class="dropdown">

                                <div class="dropdown-menu">


                                        </li>
                                    </ul>
                                </div>

                            <ul class="navbar-nav">

                <li class="dropdown">
                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Program</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a class="dropdown-item nav-link nav_item" href="blog.html">Drum Band</a></li>
                        <li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Futsal</a></li>
                        <li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Pramuka</a></li>
                        <li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Pmr</a></li>
                        <li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Bola Basket</a></li>
                        <li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Bola Voli</a></li>
                    </ul>
                </div>
            </li>


            <li>
                <a class="nav-link" href="/dashboard/contact_us">Contact</a>
            </li>

            <li>
                    <a class="nav-link" href="/dashboard/about">About Us</a>
                </li>
            </ul>
    </div>

    </nav>
    </div>
</header>
<!-- END HEADER -->
<div class="news_ticker bg-warning">
    <div class="container">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <a href="#" target="_blank">Universities the winners if Labor assumes government</a> ||
            <a href="#" target="_blank">Overseas students are driving rapid population growth</a> ||
            <a href="#" target="_blank">Admission for Ph.D. Programme 2019-20</a> ||
            <a href="#" target="_blank">Application form for Provisional Registration for Ph.D</a> ||
            <a href="#" target="_blank">Graduates need second degree to become a high earner</a> ||
            <a href="#" target="_blank">Eduglobal Portal for students seeking Education Loan</a> ||
            <a href="#" target="_blank">Creating inclusive curricula in higher education</a>
        </marquee>
    </div>
</div>
