<div class="content-vertical home5">
    <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
        @if ($categories)
            @foreach ($categories as $category)
                <li>
                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{ $category->name }} <b class="caret"></b></a>
                    <div class="dropdown-menu vertical-megamenu" style="width: 500px;min-height: 500px;">
                        <div class="dropdown-menu-inner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="element-wrapper">
                                        <div class="title-wrapper">
                                            <div class="element-wrapper-title">{{ $category->name }} Courses</div>
                                        </div>
                                        <div class="widget-nav-menu">
                                            <div class="element-list-wrapper wn-menu">
                                                <ul class="element-menu-list">
                                                    @if ($category->course)
                                                        @foreach ($category->course as $course)
                                                    <li><a href="{{ route('web.detail', ['slug'=>$course->slug]) }}">{{ $course->title }}</a></li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="element-warapper-btn">
                                            <a href="{{ route('web.explore') }}">
                                                <div class="element-wrapper-sub-title">See All <i class="flaticon-right-arrow-1"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>