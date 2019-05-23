@extends('layouts.page.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Blog Detail</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION BLOG -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-9">
            	<div class="single_post">
                    <div class="blog_img">
                        <a href="#">
                            <img src="assets/images/blog_img1.jpg" alt="blog_img1">
                        </a>
                    </div>
                    <div class="single_post_content">
                        <div class="blog_text">
                            <h3>Why are tickets to fly to Lagos expensive?</h3>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                            <blockquote>
                            	<p>Integer id metus sit amet turpis facilisis ullamcorper. Sed tellus tellus, elementum ac mauris in, venenatis consectetur est. Praesent condimentum ut erat sit amet bibendum. Morbi sit amet commodo est. Donec arcu nulla, pellentesque at mi in, fringilla tincidunt risus. </p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
                            <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
                        	<div class="border-top border-bottom py-2 py-md-4 blog_post_footer">
                                <div class="row">
                                    <div class="col-md-12">
                                    	<div class="share">
                                            <h5>Share :</h5>
                                            <ul class="list_none social_icons radius_social">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post_navigation">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="ion-ios-arrow-thin-left mr-3"></i>
                                        <div>
                                            <span>previous Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center flex-row-reverse text-right">
                                        <i class="ion-ios-arrow-thin-right ml-3"></i>
                                        <div>
                                            <span>Next Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="author_block">
                        <div class="course_author">
                            <div class="author_img">
                                <img class="radius_all_5" src="assets/images/client_img1.jpg" alt="client_img1">
                            </div>
                            <div class="author_meta">
                                <div class="author_intro">
                                    <h6>Alia Noor</h6>
                                </div>
                                <ul class="list_none social_icons radius_social social_small">
                                    <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                    <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                                <div class="author_desc mt-2">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,Vestibulum eu turpis risus. Nullam fringilla diam tellus, eu volutpat massa ullamcorper non. Nullam lorem felis, sollicitudin vitae semper sit amet, facilisis sit amet lacus. Suspendisse ut ligula varius, dignissim velit sit amet, maximus est. Etiam nec mauris augue. Ut viverra tortor orci, ac ultricies magna molestie ut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related_post">
                        <div class="comment-title">
                            <h5>Related posts</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog_post box_shadow1 radius_all_10">
                                    <div class="blog_img radius_ltrt_10">
                                        <a href="#">
                                            <img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1">
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
                                    <div class="blog_footer bg-white radius_lbrb_10">
                                        <ul class="list_none blog_meta">
                                            <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog_post box_shadow1 radius_all_10">
                                    <div class="blog_img radius_ltrt_10">
                                        <a href="#">
                                            <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
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
                                    <div class="blog_footer bg-white radius_lbrb_10">
                                        <ul class="list_none blog_meta">
                                            <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="comment-title">
                            <h5>(03) Comments</h5>
                        </div>
                        <ul class="list_none comment_list">
                            <li class="comment_info">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="radius_all_5" src="assets/images/client_img1.jpg" alt="client_img1">
                                    </div>
                                    <div class="comment_content">
                                        <div class="d-flex">
                                            <div class="meta_data">
                                                <h6><a href="#">Alia Noor</a></h6>
                                                <div class="comment-time">March 5, 2018, 6:05 PM</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="comment-reply btn btn-default btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="comment_info reply">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="radius_all_5" src="assets/images/client_img3.jpg" alt="client_img3">
                                    </div>
                                    <div class="comment_content">
                                        <div class="d-flex">
                                            <div class="meta_data">
                                                <h6><a href="#">Alia Noor</a></h6>
                                                <div class="comment-time">March 5, 2018, 6:05 PM</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="comment-reply btn btn-default btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="comment_info">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="radius_all_5" src="assets/images/client_img2.jpg" alt="client_img2">
                                    </div>
                                    <div class="comment_content">
                                        <div class="d-flex">
                                            <div class="meta_data">
                                                <h6><a href="#">Dany Core</a></h6>
                                                <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="comment-reply btn btn-default btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="radius_all_10 box_shadow1 p-4">
                            <div class="comment-title mb-3 mb-sm-4">
                                <h5>Write a comment</h5>
                            </div>
                            <form class="field_form" name="enq" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <input name="name" class="form-control" placeholder="Your Name" required="required" type="text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="email" class="form-control" placeholder="Your Email" required="required" type="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="website" class="form-control" placeholder="Your Website" required="required" type="text">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="3" name="message" class="form-control" placeholder="Your Comment" required="required"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button value="Submit" name="submit" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
            	<div class="sidebar">
                    <div class="widget widget_search">
                        <form class="search_form"> 
                            <input required="" class="form-control" placeholder="Search..." type="text">
                            <button type="submit" title="Subscribe" name="submit" value="Submit">
                                <span class="ti-search"></span>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                    	<h5 class="widget_title">Categories</h5>
                        <ul>
                            <li><a href="#"><span class="categories_name">Development</span></a></li>
                            <li><a href="#"><span class="categories_name">Business</span></a></li>
                            <li><a href="#"><span class="categories_name">Academics</span></a></li>
                            <li><a href="#"><span class="categories_name">Health Fitness</span></a></li>
                            <li><a href="#"><span class="categories_name">Photography</span></a></li>
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
                    <div class="widget widget_archive">
                    	<h5 class="widget_title">Archive</h5>
                        <ul>
                            <li><a href="#"><span class="categories_name">January 2019</span></a></li>
                            <li><a href="#"><span class="categories_name">February 2019</span></a></li>
                            <li><a href="#"><span class="categories_name">March 2019</span></a></li>
                            <li><a href="#"><span class="categories_name">April 2019</span></a></li>
                            <li><a href="#"><span class="categories_name">May 2019</span></a></li>
                    	</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection