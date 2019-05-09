@extends('layouts.page.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Teacher Detail</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Teacher Detail</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION TEACHER -->
<section>
	<div class="container">	
        <div class="row">
        	<div class="col-lg-4 col-md-6">
            	<div class="team_single radius_all_10 box_shadow1">
                	<div class="team_img">
                    	<img class="radius_ltrt_10" src="assets/images/team_img_big.jpg" alt="team_img_big">
                    </div>
                    <div class="team_single_info">
                        <div class="team_name">
                            <h5>Aden Smith</h5>
                            <span>Head Of Department</span>
                        </div>
                        <h6 class="mb-3">Contact info:</h6>
                        <ul class="contact_info list_none">
                            <li>
                                <span>Address:</span>
                                <address>Califonia Street san Francisco, CA</address>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <p>+ 457 789 789 65</p>
                            </li>
                            <li>
                                <span>Social:</span>
                                <ul class="list_none social_icons radius_social">
                                    <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
            	<div class="teacher_desc mt-4 mt-md-0">
                    <h5 class="mb-3">About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div id="accordion-1" class="accordion">
                    <div class="card">
                      <div class="card-header" id="heading-1-One">
                        <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-One" aria-expanded="true" aria-controls="collapse-1-One">Education</a> </h6>
                      </div>
                      <div id="collapse-1-One" class="collapse show" aria-labelledby="heading-1-One">
                        <div class="card-body">
                            <p>Latin literature from 45 BC</p>
                            <p>Vivamus bibendum magna</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading-1-Two">
                        <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-Two" aria-expanded="true" aria-controls="collapse-1-Two">Professional Experience</a> </h6>
                      </div>
                      <div id="collapse-1-Two" class="collapse show" aria-labelledby="heading-1-Two">
                        <div class="card-body">
                            <p>10+ Years of Experience</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading-1-Three">
                        <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-Three" aria-expanded="true" aria-controls="collapse-1-Three"> Field Of Special Interest</a> </h6>
                      </div>
                      <div id="collapse-1-Three" class="collapse show" aria-labelledby="heading-1-Three">
                        <div class="card-body">
                            <p>Chemistry Teacher</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection