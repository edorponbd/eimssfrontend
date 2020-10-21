@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">

                            @foreach($sliders as $slider)
                                <li>
                                    <img src="{{ Storage::disk('s3')->url('eims/'.$slider->image)}}" />
                                    <div class="slider-caption">
                                        <h2><a href="#">{{$slider->title}}</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </li>
                                @endforeach
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->

            <div class="col-md-4">
                <div class="widget-item">
                    <div class="request-information">
                        <h4 class="widget-title">Request Information</h4>
                        <form class="request-info clearfix">
                            <div class="full-row">
                                <label for="cat">Campus of Interest:</label>
                                <div class="input-select">
                                    <select name="cat" id="cat" class="postform">
                                        <option value="-1">-- select --</option>
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div> <!-- /.input-select -->
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="cat2">Program of Interest:</label>
                                <div class="input-select">
                                    <select name="cat2" id="cat2" class="postform">
                                        <option value="-1">-- select --</option>
                                        <option class="level-0" value="49">Germany</option>
                                        <option class="level-0" value="56">United Kingdom</option>
                                        <option class="level-0" value="59">Italy</option>
                                        <option class="level-0" value="76">France</option>
                                        <option class="level-0" value="77">Belgium</option>
                                        <option class="level-0" value="79">Monaco</option>
                                    </select>
                                </div> <!-- /.input-select -->
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="yourname">Full Name:</label>
                                <input type="text" id="yourname" name="yourname">
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="email-id">Email Address:</label>
                                <input type="text" id="email-id" name="email-id">
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <div class="submit_field">
                                    <span class="small-text pull-left">Subscribe to our newsletter</span>
                                    <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                                </div> <!-- /.submit-field -->
                            </div> <!-- /.full-row -->


                        </form> <!-- /.request-info -->
                    </div> <!-- /.request-information -->
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">Welcome to Universe Premium Template</h2>
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, adipisci, quibusdam, ad ab quisquam esse aspernatur exercitationem aliquam at fugit omnis vitae recusandae eveniet.</strong></br></br>Inventore, aliquam sequi nisi velit magnam accusamus reprehenderit nemo necessitatibus doloribus molestiae fugit repellat repudiandae dolor. Incidunt, nulla quidem illo suscipit nihil!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorem, fugiat, commodi totam accusantium illo incidunt quis eius eum iure et fugit voluptas atque ratione nobis sed omnis quod ipsa.</br></br>Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">

                    <!-- Show Latest Blog News -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Latest Notice</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                @foreach($notices as $notice)
                                    <div class="blog-list-post clearfix">
                                        <div class="blog-list-thumb">
                                            <a href="{{$notice->id}}"><img src="data:image/png;base64,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" alt=""></a>
                                        </div>
                                        <div class="blog-list-details">
                                            <h5 class="blog-list-title"><a href="blog-single.html">{{$notice->notice_title}}</a></h5>
                                            <p class="blog-list-meta small-text"><span><a href="#">{{$notice->publish_on}}</a></span></p>
                                        </div>
                                    </div> <!-- /.blog-list-post -->
                                @endforeach
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->

                    <!-- Show Latest Events List -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">Nelson Mandela Memorial Tribute</a></h5>
                                        <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                        <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">Filming Objects And Sculpture</a></h5>
                                        <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                                    </div>
                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Our Campus</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <ul>
                                        <li><img src="images/campus/campus-logo1.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo2.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo3.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo4.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Top Professors</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                            <div class="prof-thumb">
                                <img src="images/prof/prof1.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Betty Hunt</h5>
                                <p class="small-text">Sed ut lectus ac lacus molestie posuere non tincidunt arcu.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                            <div class="prof-thumb">
                                <img src="images/prof/prof2.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Victor Johns</h5>
                                <p class="small-text">Nullam sollicitudin libero ut ullamcorper pretium.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                            <div class="prof-thumb">
                                <img src="images/prof/prof3.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Charles Conway</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Testimonial</h4>
                    </div>
                    <div class="widget-inner">
                        <div id="slider-testimonials">
                            <ul>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                            </ul>
                            <a class="prev fa fa-angle-left" href="#"></a>
                            <a class="next fa fa-angle-right" href="#"></a>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb8.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>

@endsection
