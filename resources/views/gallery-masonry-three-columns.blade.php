@extends('layouts.page.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Gallery masonry 3 columns</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery masonry 3 columns</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION GALLERY -->
<section>
	<div class="container">	
    	<div class="row">
            <div class="col-md-12 text-center">
                <ul class="list_none grid_filter">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    <li><a href="#" data-filter=".library">Library</a></li>
                    <li><a href="#" data-filter=".campus">Campus</a></li>
                    <li><a href="#" data-filter=".events">Events</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="grid_container gutter_medium grid_col3 masonry">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small16_360X270.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item16.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
							</div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item library campus">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small17_360X395.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item17.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
							</div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item library">
                        <div class="gallery_item">
                            <div class="carousel_slide1 owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-autoplay-timeout="3000">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small18_360X430.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small19_360X430.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item18.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item19.jpg" class="image_popup d-none"></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item campus">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small20_360X200.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item20.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item library campus">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small21_360X540.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item21.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item campus">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small22_360X450.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item22.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <div class="carousel_slide1 owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3500">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small23_360X350.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small24_360X350.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item23.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item24.jpg" class="image_popup d-none"><i class="ion-image"></i></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item library">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small25_360X540.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item25.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small11_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item11.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <div class="carousel_slide1 owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-autoplay-timeout="4000">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small12_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small13_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item12.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item13.jpg" class="image_popup d-none"></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item library">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small14_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item14.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small15_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item15.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection