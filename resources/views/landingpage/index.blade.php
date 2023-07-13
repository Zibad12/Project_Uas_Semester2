@extends('landingpage.layouts.app')
@section('konten')
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <!--/agileinfo_tabs-->
            <div class="agileinfo_tabs">
                <!--/tab-section-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Recent</li>
                        <li>Popularity</li>
                        <li>Top Rating </li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab1">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            @if (Auth::check())
                                                <div data-video="{{ substr($satu->video_url, -11) }}" id="video"> <img
                                                        src="{{ $satu->poster_url }}" alt="" class="img-responsive"
                                                        style="height: 400px" />
                                                </div>
                                            @else
                                                <div class="video-grid-single-page-agileits">
                                                    <img src="{{ $satu->poster_url }}" style="height: 400px" alt=""
                                                        class="img-responsive">
                                                </div>
                                            @endif

                                        </div>
                                        <div class="player-text">
                                            <p class="fexi_header">{{ $satu->title }}</p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>{{ substr($satu->description, 0, 200) }}</p>
                                            <p class="fexi_header_para"><span>Release
                                                    On<label>:</label></span>{{ $satu->release_date }} </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre/{{ $satu->genre_id }}">{{ $satu->genre->name }}</a>
                                            </p>
                                            <p class="d-flex flex-column fexi_header_para fexi_header_para1">
                                                <span>Star Rating<label>:</label></span>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= ceil($satu->rating / 2))
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    @else
                                                        <a href="#"><i class="fa fa-star-o"
                                                                aria-hidden="true"></i></a>
                                                    @endif
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        @foreach ($recent as $item)
                                            <div class="w3l-movie-gride-agile">
                                                <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom">
                                                    <img src="{{ $item->poster_url }}" title="Movies Pro"
                                                        style="height: 260px" class="img-responsive" alt=" ">
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                            aria-hidden="true"></i></div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <small><a style="color: black"
                                                                href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                                            </a>
                                                        </small>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= ceil($item->rating / 2))
                                                                        <li><a href="#"><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @else
                                                                        <li><a href="#"><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @endif
                                                                @endfor
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">
                                                    <p>NEW</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab2">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            @if (Auth::check())
                                                <div data-video="{{ substr($dua->video_url, -11) }}" id="video2"> <img
                                                        src="{{ $dua->poster_url }}" alt=""
                                                        class="img-responsive" style="height: 400px" />
                                                </div>
                                            @else
                                                <div class="video-grid-single-page-agileits">
                                                    <img src="{{ $dua->poster_url }}" style="height: 400px"
                                                        alt="" class="img-responsive">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="player-text">
                                            <p class="fexi_header">{{ $dua->title }}</p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>{{ substr($dua->description, 0, 200) }}</p>
                                            <p class="fexi_header_para"><span>Release
                                                    On<label>:</label></span>{{ $dua->release_date }} </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre/{{ $dua->genre_id }}">{{ $dua->genre->name }}</a>
                                            </p>
                                            <p class="d-flex flex-column fexi_header_para fexi_header_para1">
                                                <span>Star Rating<label>:</label></span>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= ceil($dua->rating / 2))
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    @else
                                                        <a href="#"><i class="fa fa-star-o"
                                                                aria-hidden="true"></i></a>
                                                    @endif
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        @foreach ($populer as $item)
                                            <div class="w3l-movie-gride-agile">
                                                <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom">
                                                    <img src="{{ $item->poster_url }}" title="Movies Pro"
                                                        style="height: 260px" class="img-responsive" alt=" ">
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                            aria-hidden="true"></i></div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <small><a style="color: black"
                                                                href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                                            </a>
                                                        </small>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= ceil($item->rating / 2))
                                                                        <li><a href="#"><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @else
                                                                        <li><a href="#"><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @endif
                                                                @endfor
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">
                                                    <p>NEW</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab3">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            @if (Auth::check())
                                                <div data-video="{{ substr($tiga->video_url, -11) }}" id="video3">
                                                    <img src="{{ $tiga->poster_url }}" alt=""
                                                        class="img-responsive" style="height: 400px" />
                                                </div>
                                            @else
                                                <div class="video-grid-single-page-agileits">
                                                    <img src="{{ $tiga->poster_url }}" style="height: 400px"
                                                        alt="" class="img-responsive">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="player-text">
                                            <p class="fexi_header">{{ $tiga->title }}</p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>{{ substr($tiga->description, 0, 200) }}</p>
                                            <p class="fexi_header_para"><span>Release
                                                    On<label>:</label></span>{{ $tiga->release_date }} </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre/{{ $tiga->genre_id }}">{{ $tiga->genre->name }}</a>
                                            </p>
                                            <p class="d-flex flex-column fexi_header_para fexi_header_para1">
                                                <span>Star Rating<label>:</label></span>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= ceil($tiga->rating / 2))
                                                        <a href="#"><i class="fa fa-star"
                                                                aria-hidden="true"></i></a>
                                                    @else
                                                        <a href="#"><i class="fa fa-star-o"
                                                                aria-hidden="true"></i></a>
                                                    @endif
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        @foreach ($toprating as $item)
                                            <div class="w3l-movie-gride-agile">
                                                <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom">
                                                    <img src="{{ $item->poster_url }}" title="Movies Pro"
                                                        style="height: 260px" class="img-responsive" alt=" ">
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                            aria-hidden="true"></i></div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <small><a style="color: black"
                                                                href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                                            </a>
                                                        </small>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= ceil($item->rating / 2))
                                                                        <li><a href="#"><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @else
                                                                        <li><a href="#"><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></a></li>
                                                                    @endif
                                                                @endfor
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">
                                                    <p>NEW</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//tab-section-->
            <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
            <!--/movies-->
            <div class="w3_agile_latest_movies">

                <div id="owl-demo" class="owl-carousel owl-theme">
                    @foreach ($recent as $item)
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                                <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom"><img
                                        style="height: 350px " src="{{ $item->poster_url }}" title="Movies Pro"
                                        class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <small><a style="color: black"
                                                href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                            </a>
                                        </small>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= ceil($item->rating / 2))
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    @else
                                                        <li><a href="#"><i class="fa fa-star-o"
                                                                    aria-hidden="true"></i></a></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben one">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--//movies-->
            <h3 class="agile_w3_title">Requested <span>Movies</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">
                @foreach ($request as $item)
                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom"><img style="height: 350px "
                                src="{{ $item->poster_url }}" title="Movies Pro" class="img-responsive" alt=" ">
                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <small><a style="color: black"
                                        href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                    </a>
                                </small>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= ceil($item->rating / 2))
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </li>
                                            @else
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                        @endfor
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <!--//requested-movies-->
            <!--/top-movies-->
            <h3 class="agile_w3_title">Top<span>Movies</span> </h3>
            <div class="top_movies">
                <div class="tab_movies_agileinfo">
                    <div class="w3_agile_featured_movies two">
                        <div class="col-md-7 wthree_agile-movies_list">
                            @foreach ($populer as $item)
                                <div class="w3l-movie-gride-agile">
                                    <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom">
                                        <img src="{{ $item->poster_url }}" title="Movies Pro" style="height: 260px"
                                            class="img-responsive" alt=" ">
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <small><a style="color: black"
                                                    href="/movies/{{ $item->id }}">{{ substr($item->title, 0, 19) }}
                                                </a>
                                            </small>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>{{ date('Y', strtotime($item->release_date)) }}</p>
                                            <div class="block-stars">
                                                <ul class="w3l-ratings">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= ceil($item->rating / 2))
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                        @else
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                        aria-hidden="true"></i></a></li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-5 video_agile_player">
                            <div class="video-grid-single-page-agileits">
                                @if (Auth::check())
                                    <div data-video="{{ substr($dua->video_url, -11) }}" id="video2"> <img
                                            src="{{ $dua->poster_url }}" alt="" class="img-responsive"
                                            style="height: 400px" />
                                    </div>
                                @else
                                    <div class="video-grid-single-page-agileits">
                                        <img src="{{ $dua->poster_url }}" style="height: 400px" alt=""
                                            class="img-responsive">
                                    </div>
                                @endif
                            </div>
                            <div class="player-text">
                                <p class="fexi_header">{{ $dua->title }}</p>
                                <p class="fexi_header_para"><span class="conjuring_w3">Story
                                        Line<label>:</label></span>{{ substr($dua->description, 0, 200) }}</p>
                                <p class="fexi_header_para"><span>Release
                                        On<label>:</label></span>{{ $dua->release_date }} </p>
                                <p class="fexi_header_para">
                                    <span>Genres<label>:</label> </span>
                                    <a href="genre/{{ $dua->genre_id }}">{{ $dua->genre->name }}</a>
                                </p>
                                <p class="d-flex flex-column fexi_header_para fexi_header_para1">
                                    <span>Star Rating<label>:</label></span>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= ceil($dua->rating / 2))
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        @else
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        @endif
                                    @endfor
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="cleafix"></div>
                </div>
            </div>

            <!--//top-movies-->
        </div>
    </div>
    <!--//content-inner-section-->
@endsection
