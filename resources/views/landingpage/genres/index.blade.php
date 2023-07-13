@extends('landingpage.layouts.app')
@section('konten')
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <h3 class="agile_w3_title">All <span>Genres</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">
                @foreach ($genres as $item)
                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="/genres/{{ $item->id }}" class="hvr-sweep-to-bottom"><img
                                src="https://support.musicgateway.com/wp-content/uploads/2021/06/most-popular-movie-genres.png" title="Movies Pro" class="img-responsive" alt=" ">
                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <small><a style="color: black"
                                        href="/genres/{{ $item->id }}">{{ substr($item->name, 0, 19) }}
                                    </a>
                                </small>
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
