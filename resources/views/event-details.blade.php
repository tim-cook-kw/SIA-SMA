@extends('layouts.page.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Event Detail</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event Detail</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION COURSE DETAIL -->
<section>
	<div class="container">
        <div class="row">
        	<div class="col-lg-9">
            	<div class="single_event">
                    <div class="content_img">
                        <a href="#">
                            <img src="assets/images/course_img_big.jpg" alt="course_img_big">
                        </a>
                        <div class="event_date radius_all_5">
                        	<h5><span>16</span> May</h5>
                            <span class="event_time radius_lbrb_5 bg_default">10:00 am 3:00 pm</span>
                        </div>
                    </div>
                    <div class="event_title">
                    	<div class="row align-items-end">
                            <div class="col-md-8">
                    			<h2>Nullam id varius nunc id varius nunc</h2>
                                <ul class="list_none content_meta mt-2">
                                    <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                            <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                            	<div class="text-md-right">
                                	<ul class="list_none social_icons">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry_content">
                    	<p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Learning to live, study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse.Ut enim ad minim veniam, Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="event_map">
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen=""></iframe>
                    </div>
                    <div class="radius_all_10 box_shadow1 p-4">
                        <div class="comment-title mb-2 mb-sm-4">
                            <h5>Write a comment</h5>
                        </div>
                        <form class="field_form" name="enq" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input name="name" class="form-control" id="first-name" placeholder="Your Name" required="required" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input name="email" class="form-control" id="email" placeholder="Your Email" required="required" type="email">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="3" name="message" class="form-control" id="description" placeholder="Your Comment" required="required"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button value="Submit" name="submit" id="submitButton" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                                    <div>
                                        <div class="alert-msg text-center" id="alert-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
            	<div class="sidebar">
                    <div class="widget widget_countdown bg_default text-center">
                        <div class="countdown_time countdown_white mb-3" data-time="2019/08/06 00:00:00"></div>
                        <a href="#" class="btn btn-outline-white btn-sm">Join Now</a>
                    </div>
                	<div class="widget widget_recent_course">
                    	<h5 class="widget_title">Letest Course</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_course1.jpg" alt="letest_course1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Nullam id varius nunc id varius nunc</a></h6>
                                        <span class="text-success small">Free</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_course2.jpg" alt="letest_course2"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Nullam id varius nunc id varius nunc</a></h6>
                                        <span class="text-info small">$49</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_course3.jpg" alt="letest_course3"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Nullam id varius nunc id varius nunc</a></h6>
                                        <span class="text-success small">Free</span>
                                    </div>
                                </div>
                            </li>
                    	</ul>
                    </div>
                    <div class="widget widget_categories">
                    	<h5 class="widget_title">Course Categories</h5>
                        <ul>
                            <li><a href="#"><span class="categories_name">Development</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Business</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">Academics</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Health Fitness</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Photography</span><span class="categories_num">(12)</span></a></li>
                    	</ul>
                    </div>
                    <div class="widget widget_recent_post">
                    	<h5 class="widget_title">Recent Post</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_tags">
                    	<h5 class="widget_title">tags</h5>
                        <div class="tags">
                        	<a href="#">General</a>
                            <a href="#">Design</a>
                            <a href="#">jQuery</a>
                            <a href="#">Branding</a>
                            <a href="#">Modern</a>
                            <a href="#">Blog</a>
                            <a href="#">Quotes</a>
                            <a href="#">Advertisement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection