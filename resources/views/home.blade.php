@extends('layouts.page.app')
<!-- START SECTION BANNER -->
@section('content')
<section class="banner_section p-0 full_screen">
    <div id="carouselExampleControls" class="banner_content_wrap carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_50" data-img-src="{{asset('template/images/Tempatgambar/dwi-warna.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                <h2 class="font-weight-bold animation text-uppercase" data-animation="zoomIn" data-animation-delay="1s">Welcome To <span class="text_default">sma islamic </span>boarding school</h2>
                                <p class="animation" data-animation="zoomIn" data-animation-delay="1.5s">Lorem is simply text of the printing and typesetting industry.</p>
                                <a class="btn btn-default animation rounded-0" href="#" data-animation="zoomIn" data-animation-delay="1.8s">Get Started</a>
                                <a class="btn btn-outline-white animation rounded-0" href="#" data-animation="zoomIn" data-animation-delay="1.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="{{asset('template/images/Tempatgambar/ponpes-al-masoem.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-sm-12 text-center">
                                <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                    <h2 class="font-weight-bold animation text-uppercase" data-animation="zoomIn" data-animation-delay="1s">education for <span class="text_default">moesloem people</span></h2>
                                    <p class="animation" data-animation="zoomIn" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation rounded-0" href="#" data-animation="zoomIn" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation rounded-0" href="#" data-animation="zoomIn" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="{{asset('template/images/Tempatgambar/3.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-sm-12 text-left">
                                <div class="banner_content animation text_white" data-animation="fadeInLeft" data-animation-delay="0.8s">
                                    <h2 class="font-weight-bold animation text-uppercase" data-animation="fadeInLeft" data-animation-delay="1s"><span class="text_default">Eduction</span> from a new angle</h2>
                                    <p class="animation" data-animation="fadeInLeft" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation rounded-0" href="#" data-animation="fadeInLeft" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation rounded-0" href="#" data-animation="fadeInLeft" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="{{asset('template/images/Tempatgambar/2.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-sm-12 text-right">
                                <div class="banner_content animation text_white" data-animation="fadeInRight" data-animation-delay="0.8s">
                                    <h2 class="font-weight-bold animation text-uppercase" data-animation="fadeInRight" data-animation-delay="1s">best <span class="text_default"> favorite</span> school</h2>
                                    <p class="animation" data-animation="fadeInRight" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation rounded-0" href="#" data-animation="fadeInRight" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation rounded-0" href="#" data-animation="fadeInRight" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>

        <div class="carousel-nav">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="ion-chevron-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="ion-chevron-right"></i>
            </a>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- <section class="p-0 overlap_box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cat_overlap_box course_categories carousel_slide5 owl-carousel owl-theme" data-margin="15" data-dots="" data-loop="false" data-autoplay="true">
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_danger">
                                <i class="fa fa-globe"></i>
                                Scholarship
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_light_green">
                                <i class="fa fa-chart-line"></i>
                                2500+ Courses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_default">
                                <i class="fa fa-book"></i>
                                Admission
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_pink">
                                <i class="fa fa-camera"></i>
                                Global exposure
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_blue">
                                <i class="fa fa-heartbeat"></i>
                                 academics
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single_categories">
                            <a href="#" class="bg_orange">
                                <i class="fa fa-code"></i>
                                Campus life
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- START SECTION FEATURE -->
<section class="small_pb">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6 mt-5">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Why Choose Us</h2>
                    </div>
                    <p>If you are going to use a passage of you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon mb-3">
                		<i class="fa fa-book text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Books & Library</h5>
                        <p>If you are going to use a passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon mb-3">
                		<i class="fa fa-globe text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Learn Courses Online</h5>
                        <p>If you are going to use a passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 animation"  data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon mb-3">
                        <i class="fa fa-user-tie text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Expert Instructors</h5>
                        <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 animation"  data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="box_icon mb-3">
                        <i class="fa fa-child text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Kids Education</h5>
                        <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 animation"  data-animation="fadeInUp" data-animation-delay="0.06s">
                	<div class="box_icon mb-3">
                        <i class="fa fa-headphones-alt text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>music Programs</h5>
                        <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 animation"  data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="box_icon mb-3">
                        <i class="fa fa-graduation-cap text_default"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Scholarship</h5>
                        <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION ABOUT -->
<section class="overflow-hidden small_pt small_pb">
	<div class="container-fluid p-0">
    	<div class="row no-gutters ">
        	<div class="col-md-6">
            	<div class="bg_gray h-100 padding_eight_all">
                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1">
                          <h2>About Us</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <ul class="list_none list_item">
                        	<li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_danger"><span class="counter">260</span></h3>
                                    <h6>Free Courses</h6>
                                </div>
                            </li>
                            <li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_light_green"><span class="counter">152</span></h3>
                                    <h6>Paid Courses</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        	<div class="col-md-6">
            	<div class="animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                	<div class="overlay_bg_30 about_img z_index_minus1">
                    	<img class="w-100" src="{{asset('template/images/about_img.jpg')}}" alt="about_img"/>
                    </div>
                	<a href="https://www.youtube.com/watch?v=884hjNQ_DYw" class="video_popup video_play">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION FACULTY -->
<section class="small_pt">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 text-center">
                        <h2>Our Faculty</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="overlay_bg_danger_90 icon_box text-center text_white radius_all_10 background_bg animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="intro_desc">
                        <h5>Faculty of Pharmacy</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="overlay_bg_light_green_90 icon_box text-center text_white radius_all_10 background_bg animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="intro_desc">
                        <h5>Faculty of Computer Science</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation"  data-animation="fadeInUp" data-animation-delay="0.6s">
                    <div class="intro_desc">
                        <h5>Faculty of Design</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="medium_divider"></div>
                	<a href="#" class="btn btn-default">View All Faculty <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FACULTY -->

<!-- START SECTION VIDEO -->
<section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="{{asset('template/images/banner5.jpg')}}">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<a href="https://www.youtube.com/watch?v=yeZXWOL1jtM" class="video_popup">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                    <div class="mt-md-5 mt-4 text_white animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    	<h2>Video Tutorial For Our Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION VIDEO -->

<!-- START SECTION COURSES -->
<!-- <section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Popular Courses</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img1.jpg')}}" alt="course_img1"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user1.jpg')}}" alt="user1"><span>Alia Noor</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-success">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img2.jpg')}}" alt="course_img2"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user2.jpg')}}" alt="user2"><span>Dany Core</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$49</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img3.jpg')}}" alt="course_img3"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user3.jpg')}}" alt="user3"><span>Smith Parker</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-success">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img4.jpg')}}" alt="course_img4"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user4.jpg')}}" alt="user4"><span>Sara Robert</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$54</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img5.jpg')}}" alt="course_img5"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user5.jpg')}}" alt="user5"><span>Wendy Nahse</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$36</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="{{asset('template/images/course_img6.jpg')}}" alt="course_img6"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i>
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="{{asset('template/images/user6.jpg')}}" alt="user6"><span>John Wood</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$22</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="medium_divider"></div>
                	<a href="#" class="btn btn-default">View All Courses <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION COURSES -->

<!-- START SECTION COUNTER -->
<!-- <section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="{{asset('template/images/video_bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon1.png')}}" alt="counter_icon1" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1800</span>+</h3>
                        <p>Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon2.png')}}" alt="counter_icon2" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">70</span></h3>
                        <p>Courses</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon3.png')}}" alt="counter_icon3" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">700</span>+</h3>
                        <p>Certified teachers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon4.png')}}" alt="counter_icon4" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION COUNTER -->

<!-- START SECTION EVENT -->
<!-- <section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Upcoming events</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row event_list justify-content-center">
        	<div class="col-lg-6">
            	<div class="content_box event_box box_shadow1 animation mb-4 mb-lg-0" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="content_img">
                    	<a href="#"><img src="{{asset('template/images/event_img1.jpg')}}" alt="event_img1"/></a>
                    </div>
                    <div class="event_date">
                        	<h5><span>16</span> May</h5>
                            <span class="event_time bg_default">10:00 am 3:00 pm</span>
                        </div>
                    <div class="content_desc bg-white">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <ul class="list_none content_meta">
                        	<li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                            <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                        </ul>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content_box event_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                            <div class="event_date">
                                    <h5><span>27</span> Apr</h5>
                                    <span class="event_time bg_default">9:00 am 4:00 pm</span>
                                </div>
                            <div class="content_desc bg-white">
                                <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                                <ul class="list_none content_meta">
                                    <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                                    <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                        <div class="content_box event_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <div class="event_date">
                                <h5><span>22</span> Jun</h5>
                                <span class="event_time bg_default">11:00 am 4:00 pm</span>
                            </div>
                        <div class="content_desc bg-white">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <ul class="list_none content_meta">
                                <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                                <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>
                        <div class="content_box event_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                            <div class="event_date">
                                    <h5><span>22</span> Jun</h5>
                                    <span class="event_time bg_default">11:00 am 4:00 pm</span>
                                </div>
                            <div class="content_desc bg-white">
                                <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                                <ul class="list_none content_meta">
                                    <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                                    <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- START SECTION EVENT -->

{{-- <!-- START SECTION INQUIRY -->
<section class="pb-0 background_bg bg_blue_dark" data-img-src="{{asset('template/images/pattern_bg.png')}}">
	<div class="container">
    	<div class="row align-items-end">
        	<div class="col-lg-6 col-md-7">
            	<div class="register_form radius_all_10 text_white padding_eight_all animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                    <div class="heading_s1 heading_light">
                        <h2>Get a Free <span class="text_default">Inquiry</span></h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the middle of text</p>
                    <form method="post" name="enq" class="pt-md-2 form_transparent">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Phone No *" class="form-control" name="phone" type="tel">
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="custom_select">
                                	<select class="form-control">
                                    	<option>Select Course</option>
                                        <option>Select Course 1</option>
                                        <option>Select Course 2</option>
                                        <option>Select Course 3</option>
                                        <option>Select Course 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea required="required" placeholder="Message *" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Register Now</button>
                            </div>
                            <div class="col-sm-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="large_divider"></div>
            </div>
            <div class="col-lg-6 col-md-5">
            	<div class="text-center animation" data-animation="fadeInRight" data-animation-delay="0.03s">
            		<img src="{{asset('template/images/girl_img.png')}}" alt="girl_img" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INQUIRY --> --}}

<!-- START SECTION TEACHER -->
<section class="bg_gray">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<h2>Our Teachers</h2>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img1.jpg')}}" alt="team1">
                    </div>
                    <div class="team_title text-center">
                        <h5><a href="#">Aden Smith</a></h5>
                        <span>Head Of Department</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img2.jpg')}}" alt="team2">
                    </div>
                    <div class="team_title text-center">
                        <h5><a href="#">Kally Brooks</a></h5>
                        <span>Professor</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img3.jpg')}}" alt="team3">
                    </div>
                    <div class="team_title text-center">
                        <h5><a href="#">David clark</a></h5>
                        <span>Chemistry Teacher</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img4.jpg')}}" alt="team4">
                    </div>
                    <div class="team_title text-center">
                        <h5><a href="#">Rebeka Alig</a></h5>
                        <span>English Teacher</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEACHER -->

 <!-- START SECTION TESTIMONIAL -->

<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION BLOG -->
<!-- <section class="bg_gray">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="{{asset('template/images/blog_small_img1.jpg')}}" alt="blog_small_img1">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="{{asset('template/images/blog_small_img2.jpg')}}" alt="blog_small_img2">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>23 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="{{asset('template/images/blog_small_img3.jpg')}}" alt="blog_small_img3">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>16 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="medium_divider"></div>
                	<a href="#" class="btn btn-default rounded-0">View All Blog <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<!-- <section class="light_gray_bg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Our Client</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
            	<div class="cl_logo_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-dots="false">
                	<div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo1.png')}}" alt="cl_logo1"/></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo2.png')}}" alt="cl_logo2"/></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo3.png')}}" alt="cl_logo3"/></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo4.png')}}" alt="cl_logo4"/></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo5.png')}}" alt="cl_logo5"/></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="{{asset('template/images/cl_logo2.png')}}" alt="cl_logo2"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection
