@extends('layouts.page.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('template/images/about_bg.jpg')}}">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>About Us</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION FEATURE -->
<section class="bg_gray">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-4">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Why Choose Eduglobal</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="box_icon bg_danger mb-3">
                		<img src="{{asset('template/images/book.png')}}" alt="book" />
                    </div>
                    <div class="intro_desc">
                        <h5>Books & Library</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon bg_default mb-3">
                		<img src="{{asset('template/images/globe.png')}}" alt="globe" />
                    </div>
                    <div class="intro_desc">
                        <h5>Learn Courses Online</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon bg_light_green mb-3">
                        <img src="{{asset('template/images/instructors.png')}}" alt="instructors" />
                    </div>
                    <div class="intro_desc">
                        <h5>Expert Instructors</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- END SECTION FEATURE -->

<!-- START SECTION ABOUT -->
<section class="overflow-hidden res_md_p_0">
	<div class="container-fluid p-0">
    	<div class="row no-gutters align-items-center">
        	<div class="col-md-6">
            	<div class="box_shadow1 bg-white overlap_section padding_eight_all">
                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1"> 
                          <h2>About Us</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
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
                	<a href="https://www.youtube.com/watch?v=XL32m40QeMk" class="video_popup video_play">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT

<!-- START SECTION TEACHER -->
<section class="parallax_bg overlay_bg_blue_90" data-parallax-bg-image="{{asset('template/images/teacher_bg.jpg')}}">
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center text_white animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 heading_light text-center">
                        <h2>Our Teachers</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img1.jpg')}}" alt="team1">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Aden Smith</a></h5>
                        <span>Head Of Department</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img2.jpg')}}" alt="team2">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Kally Brooks</a></h5>
                        <span>Professor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img3.jpg')}}" alt="team3">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">David clark</a></h5>
                        <span>Chemistry Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="team_img">
                    	<img src="{{asset('template/images/team_img4.jpg')}}" alt="team4">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Rebeka Alig</a></h5>
                        <span>English Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEACHER -->

<!-- START SECTION COUNTER -->
<section class="bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon_dark1.png')}}" alt="counter_icon1" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1800</span>+</h3>
                        <p>Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon_dark2.png')}}" alt="counter_icon2" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">70</span></h3>
                        <p>Courses</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon_dark3.png')}}" alt="counter_icon3" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">700</span>+</h3>
                        <p>Certified teachers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="counter_icon">
                    	<img src="{{asset('template/images/counter_icon_dark4.png')}}" alt="counter_icon4" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->
 
 <!-- START SECTION TESTIMONIAL -->
<section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Student Say!</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            	<div class="testimonial_slider testimonial_style1 carousel_slide2 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false">
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="{{asset('template/images/client_img1.jpg')}}" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="{{asset('template/images/client_img2.jpg')}}" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="{{asset('template/images/client_img3.jpg')}}" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
