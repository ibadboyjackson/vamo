@extends('templates')
@section('style')
@stop

@section('scripts')
@stop

@section('content')
    <!-- Start banner -->
    <div class="clearfix"></div>
    <div class="inner-page-header blog-section">
        <div class="full-width section-bg">
            <div class="blog-site-title">
                <h2>Derniers News</h2>
            </div>
            <div class="site-page-breadcrumb">
                    <span>
                        <a style="" href="index.html#">Accueil /</a>
                                 News
                    </span>
            </div>
        </div>
    </div>
    </div>
    <!-- / END HOMEPAGE DESIGN AREA -->
    <section id="blognews" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="singlepost">
                        <img alt="image" src="{{ asset('assets/images/blog/blog_detail.jpg') }}">
                        <h2 class="post-title">The Unlimate Packing List For Femail Travelers</h2>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                            <span><i class="fa fa-comments"></i>comments</span>
                            <span><i class="fa fa-eye"></i>views</span>
                        </div>
                        <p class="content">
                            You should read our short articles about how to have the best vacation this summer. Those are not just suggestions for other moments you check…
                        </p>
                        <br>
                        <br>
                        <h3 class="post-title">Make It Short & Memorable</h3>
                        <p class="content">
                            Your travel blog domain name should be relatively short, easy to type, easy to spell, easy to remember, and easy to share. I recommend brainstorming by writing down a bunch of words you think will best describe your blog.
                            <br>
                            <br>
                            <br> Adventure? Food? Culture? South America? What do you want to write about? Who are you? What is your passion? Write everything down and start playing with different combinations of words. Try using a thesaurus. Ask your friends for advice & suggestions.
                        </p>
                        <br>
                        <br>
                        <h3 class="post-title">Avoid Hyphens & Numbers</h3>
                        <p class="content">
                            This can be difficult to do these days, but it helps to avoid using hyphens or numbers in your domain name because otherwise you’ll be forced to explain it to someone. For example:
                            <br>
                            <br>
                            <span>POTENTIAL READER: “You have a blog? Cool! Where do I find it?”<br></span>
                            <span>YOU: “Oh, it’s called expert hyphen vagabond the number 100 dot com.”</span>
                            <br>
                            <br>
                            <br> As you can see, this type of domain isn’t the greatest for word-of-mouth marketing, which happens to be the best kind of promotion.
                            <br>
                            <br>
                            <br>
                        </p>
                        <br>
                        <br>
                        <h3 class="post-title">Avoid Overused Words</h3>
                        <p class="content">
                            Avoid trademarked company names or words that may be overused in the industry. Sure, you can pick something like Nomadic Bob, Adventurous Wendy, or Wandering Clarence. But domain names like that won’t stand out very much in the travel blogging niche because those ideas have already been taken by others who are more established than you.
                            <br>
                            <br>
                            <br> You’ll have better luck in the long-run with something more original.
                        </p>
                    </div>
                    <!--start author-->
                    <div class="authorsinglepost">
                        <div class="imgsocialauthorsinglepost">
                            <img alt="" class="imgauthorsinglepost" src="{{ asset('assets/images/blog/author.jpg') }}">
                        </div>
                        <div class="socialauthorsinglepost">
                            <ul class="author-social">
                                <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="blog-details.html"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="blog-details.html"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <span class="nameauthorsinglepost">About The Theodore</span>
                        </div>
                        <p class="descriptionauthorsinglepost">
                            <br>
                            <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh
                        </p>
                    </div>
                    <!--end author-->
                    <div class="clearfix"></div>
                    <div class="section-title ">
                        <h2>Post Comments (3)</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                    <!--all comments-->
                    <ul class="commentlist">
                        <!--first comment-->
                        <li class="comment">
                            <div class="comment-body">
                                <div class="commentavatar">
                                    <img alt='' src='{{ asset('assets/images/blog/avatar1.jpg') }}' class='avatar' />
                                </div>
                                <div class="commentauthor">
                                    <a class="authorcomment" href="blog-details.html#">Admin</a> <a href="blog-details.html#" class="comment-date">December 4, 2013 at 2:32 pm</a>
                                </div>
                                <div class="commentcontent">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc.</p>
                                </div>
                                <div class="commentreply">
                                    <a href='blog-details.html#'>reply</a>
                                </div>
                            </div>
                            <!--end first comment-->
                            <!--start second comment-->
                            <ul class="children">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="commentavatar">
                                            <img alt='' src='{{ asset('assets/images/blog/avatar2.jpg') }}' class='avatar' />
                                        </div>
                                        <div class="commentauthor">
                                            <a class="authorcomment" href="blog-details.html#">Admin</a> <a href="blog-details.html#" class="comment-date">December 4, 2013 at 2:32 pm</a>
                                        </div>
                                        <div class="commentcontent">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc.</p>
                                        </div>
                                        <div class="commentreply">
                                            <a href='blog-details.html#'>reply</a>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="commentavatar">
                                                    <img alt='' src='{{ asset('assets/images/blog/avatar1.jpg') }}' class='avatar' />
                                                </div>
                                                <div class="commentauthor">
                                                    <a class="authorcomment" href="blog-details.html#">Admin</a> <a href="blog-details.html#" class="comment-date">December 4, 2013 at 2:32 pm</a>
                                                </div>
                                                <div class="commentcontent">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc.</p>
                                                </div>
                                                <div class="commentreply">
                                                    <a href='blog-details.html#'>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="comment">
                            <div class="comment-body">
                                <div class="commentavatar">
                                    <img alt='' src='{{ asset('assets/images/blog/avatar3.jpg') }}' class='avatar' />
                                </div>
                                <div class="commentauthor">
                                    <a class="authorcomment" href="blog-details.html#">Admin</a> <a href="blog-details.html#" class="comment-date">December 4, 2013 at 2:32 pm</a>
                                </div>
                                <div class="commentcontent">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat.</p>
                                </div>
                                <div class="commentreply">
                                    <a href='blog-details.html#'>Reply</a>
                                </div>
                            </div>
                        </li>
                        <!--end second comment-->
                    </ul>
                    <!--end comments list-->
                    <!--start comment form-->
                    <div class="comment-respond">
                        <div class="section-title ">
                            <h2>LEAVE A REPLY</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <form action="blog-details.html#" class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="Email" />
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <input class="button" type="submit" value="SEND" />
                        </form>
                    </div>
                    <!--end comment form-->
                    <!--end all block comments-->
                    <section class="related-posts">
                        <div class="section-title ">
                            <h2>Related Posts</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div class="related-posts-list owl-carousel">
                            <div class="related-post item">
                                <div class="left-img">
                                    <figure>
                                        <img alt="image" src="{{ asset('assets/images/blog/blog1.jpg') }}">
                                    </figure>
                                </div>
                                <div class="right-content">
                                    <div class="post-details">
                                        <h2>Enchanted Caribian Journey</h2>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-comments"></i>comments</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                        <p>You should read our short articles about how to have the best vacation this summer. Those are not just suggestions for other moments you check…</p>
                                        <a class="readmore" href="{{ route('detail') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="related-post item">
                                <div class="left-img">
                                    <figure>
                                        <img alt="image" src="{{ asset('assets/images/blog/blog1.jpg') }}">
                                    </figure>
                                </div>
                                <div class="right-content">
                                    <div class="post-details">
                                        <h2>Enchanted Caribian Journey</h2>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-comments"></i>comments</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                        <p>You should read our short articles about how to have the best vacation this summer. Those are not just suggestions for other moments you check…</p>
                                        <a class="readmore" href="{{ route('detail') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="related-post item">
                                <div class="left-img">
                                    <figure>
                                        <img alt="image" src="{{ asset('assets/images/blog/blog1.jpg') }}">
                                    </figure>
                                </div>
                                <div class="right-content">
                                    <div class="post-details">
                                        <h2>Enchanted Caribian Journey</h2>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-comments"></i>comments</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                        <p>You should read our short articles about how to have the best vacation this summer. Those are not just suggestions for other moments you check…</p>
                                        <a class="readmore" href="{{ route('detail') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-sidebar sidebar">
                        <div class="sidebar-block widget">
                            <div class="widget-search clearfix">
                                <form>
                                    <div class="search-form">
                                        <input type="text" class="search-input" placeholder="Enter what you want to find">
                                        <button class="search-submit" type="submit" value=""><i class="fa fa-search"></i> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-block widget">
                            <div class="section-title ">
                                <h2>categories</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                            <ul class="sidebar-category">
                                <li>
                                    <a href="blog-details.html#">all <span class="fr">(125)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">family <span class="fr">(26)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">adventure <span class="fr">(66)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">romantic  <span class="fr">(59)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">wildlife  <span class="fr">(55)</span></a>
                                </li>
                                <li class="active">
                                    <a href="blog-details.html#">beach  <span class="fr">(89)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">honeymoon  <span class="fr">(27)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">island  <span class="fr">(45)</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html#">parks  <span class="fr">(72)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-block widget">
                            <div class="section-title">
                                <h2>popular posts</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                            <div class="widget-popular">
                                <div class="post-small clearfix">
                                    <a class="post-img black-hover" href="blog-details.html#">
                                        <img class="img-responsive radius-0" src="{{ asset('assets/images/insta/insta10.jpg') }}" alt="">

                                    </a>
                                    <div class="post-desc">
                                        <h4>history of mauritius</h4>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-small clearfix">
                                    <a class="post-img black-hover" href="blog-details.html#">
                                        <img class="img-responsive radius-0" src="{{ asset('assets/images/insta/insta1.jpg') }}" alt="">

                                    </a>
                                    <div class="post-desc">
                                        <h4>history of mauritius</h4>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-small clearfix">
                                    <a class="post-img black-hover" href="blog-details.html#">
                                        <img class="img-responsive radius-0" src="{{ asset('assets/images/insta/insta11.jpg') }}" alt="">

                                    </a>
                                    <div class="post-desc">
                                        <h4>history of mauritius</h4>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i>12/15/18</span>
                                            <span><i class="fa fa-eye"></i>views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block widget">
                            <div class="section-title ">
                                <h2>popular tags</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                            <ul class="widget-tags clearfix">
                                <li><a href="blog-details.html#">flights</a></li>
                                <li><a href="blog-details.html#">travelling</a></li>
                                <li><a href="blog-details.html#">Sale</a></li>
                                <li><a href="blog-details.html#">cruises</a></li>
                                <li><a href="blog-details.html#">Sale</a></li>
                                <li><a href="blog-details.html#">travelling</a></li>
                                <li><a href="blog-details.html#">travelling</a></li>
                                <li><a href="blog-details.html#">Illegal</a></li>
                                <li><a href="blog-details.html#">flights</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="section-title ">
                                <h2>Gallery</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                            <ul class="instagram-list">
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta1.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta2.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta3.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta4.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta5.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta6.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta7.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta8.jpg') }}"></a></li>
                                <li><a href="blog-details.html#"><img alt="image" src="{{ asset('assets/images/insta/insta9.jpg') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START CALL TO ACTION DESIGN AREA -->
    <section id="download" class="call-to-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-area-text ">
                        <div class="col-md-8">
                            <h2>are you still intarested to tour?</h2>
                            <p>We offer a wide range of procedures to help you get the perfect smile</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="booking-form.html" role="button" data-toggle="modal">book a tour!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END CALL TO ACTION DESIGN AREA -->
@stop
