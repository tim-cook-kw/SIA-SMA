@extends('layouts.page.app')
@section('content')
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
                <ul class="grid_container gutter_medium grid_col3">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    <li class="grid_item events">
                        <div class="gallery_item">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small1_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item1.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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
                                <img src="assets/images/gallery_item_small2_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item2.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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
                                    <img src="assets/images/gallery_item_small3_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small4_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item3.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item4.jpg" class="image_popup d-none"></a>
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
                                <img src="assets/images/gallery_item_small5_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item5.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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
                                    <img src="assets/images/gallery_item_small6_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small7_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item6.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item7.jpg" class="image_popup d-none"><i class="ion-image"></i></a>
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
                                <img src="assets/images/gallery_item_small8_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item8.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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
                                <img src="assets/images/gallery_item_small9_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item9.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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
                                <img src="assets/images/gallery_item_small10_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item10.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
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