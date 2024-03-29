@extends('layouts.app')

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-2">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="blog-grid.html">Blog</a>
                                    </li>
                                    <li><a href="#">Blog Right Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Our Latest News</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Blog Details-->
    <section class="blog-page pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pr--100">
                        <div class="isotope_item vrbloglist">
                            <div class="item-image">
                                <a href="#">
                                    <img src="images/blog/blog-post-1.jpg" alt="blog" class="img-fluid">
                                </a>
                                <span class="category-blog"><a href="#">iOs</a> <a href="#">Android</a></span>
                            </div>
                            <div class="item-info blog-info">
                                <div class="entry-blog">
                                    <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                    <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                    </span>
                                    <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                                </div>
                                <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="isotope_item vrbloglist">
                            <div class="item-image">
                                <a href="#">
                                    <img src="images/blog/blog-post-1.jpg" alt="blog" class="img-fluid">
                                </a>
                                <span class="category-blog"><a href="#">iOs</a> <a href="#">Android</a></span>
                            </div>
                            <div class="item-info blog-info">
                                <div class="entry-blog">
                                    <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                    <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                    </span>
                                    <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                                </div>
                                <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="isotope_item vrbloglist">
                            <div class="item-image">
                                <a href="#">
                                    <img src="images/blog/blog-post-1.jpg" alt="blog" class="img-fluid">
                                </a>
                                <span class="category-blog"><a href="#">iOs</a> <a href="#">Android</a></span>
                            </div>
                            <div class="item-info blog-info">
                                <div class="entry-blog">
                                    <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                    <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                    </span>
                                    <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                                </div>
                                <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Details-->

                <!--Start Sidebar-->
                <div class="col-lg-4 m-mt30">
                    <div class="sidebar">
                        <!--Start block for offer/ads-->
                        <div class="offer-image">
                            <img src="images/blog/strategy-guide.jpg" alt="offer" class="img-fluid" />
                        </div>
                        <!--End block for offer/ads-->
                        <!--Start Recent post-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Recent post</h3>
                            <div class="media">
                                <div class="post-image bdr-radius">
                                    <a href="#">
                                        <img src="images/blog/blog-small.jpg" alt="girl" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="media-body post-info">
                                    <h5><a href="#">Stock Market App Development - Time, Cost, Features</a></h5>
                                    <p>September 24, 2019</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="post-image bdr-radius">
                                    <a href="#">
                                        <img src="images/blog/blog-small2.jpg" alt="girl" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="media-body post-info">
                                    <h5><a href="#">Stock Market App Development - Time, Cost, Features</a></h5>
                                    <p>September 24, 2019</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="post-image bdr-radius">
                                    <a href="#">
                                        <img src="images/blog/blog-small.jpg" alt="girl" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="media-body post-info">
                                    <h5><a href="#">Stock Market App Development - Time, Cost, Features</a></h5>
                                    <p>September 24, 2019</p>
                                </div>
                            </div>
                        </div>
                        <!--Start Recent post-->
                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Blog Category</h3>
                            <div class="blog-categories">
                                <ul>
                                    <li>
                                        <a href="#">Business <span class="categories-number">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Financial <span class="categories-number">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Uncategorized <span class="categories-number">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Web Design <span class="categories-number">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">WordPress <span class="categories-number">(5)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End Blog Category-->
                        <!--Start Tags-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Most Used Tags</h3>
                            <div class="tabs">
                                <a href="#">webdesign</a>
                                <a href="#">design </a>
                                <a href="#">graphicdesign </a>
                                <a href="#">website </a>
                                <a href="#">marketing </a>
                                <a href="#">branding </a>
                                <a href="#">webdevelopment </a>
                                <a href="#">webdesigner </a>
                                <a href="#">graphicdesign </a>
                                <a href="#">website </a>
                                <a href="#">marketing </a>
                                <a href="#">branding </a>
                            </div>
                        </div>
                        <!--End Tags-->
                        <!--Start block for offer/ads-->
                        <div class="offer-image mt60">
                            <img src="images/blog/sidebar-image.jpg" alt="offer" class="img-fluid" />
                        </div>
                        <!--End block for offer/ads-->
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>

@endsection
