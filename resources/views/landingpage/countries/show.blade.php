@extends('landingpage.layouts.app')
@section('konten')
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <h3 class="agile_w3_title">All Countries<span>{{ $country->name }}</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">
                @foreach ($movies as $item)
                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="/movies/{{ $item->id }}" class="hvr-sweep-to-bottom"><img style="height: 350px" src="{{ $item->poster_url }}"
                                title="Movies Pro" class="img-responsive" alt=" ">
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
        </div>
    </div>
    <!--//content-inner-section-->
@endsection
