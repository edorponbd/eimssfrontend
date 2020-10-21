<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <p><i class="fa fa-phone"></i> {{isset($gschool_info)?$gschool_info->phone:''}}</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:email@universe.com">{{isset($gschool_info)?$gschool_info->email:''}}</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="{{url('/')}}" title="Universe" rel="home">
                        <img src="{{isset($gschool_info)?$gschool_info->logo:''}}" alt="">
                        @if(isset($gschool_info->logo))
                            <img src="{{ Storage::disk('s3')->url('eims/'.$gschool_info->logo)}}" alt="{{$gschool_info->school_name}}">
                            @endif

                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Apply Now</a></li>
                </ul>
                <div class="search-form">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Search the site..." title="Search the site..." class="field_search">
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    @include("layouts.partials.menu")


</header> <!-- /.site-header -->
