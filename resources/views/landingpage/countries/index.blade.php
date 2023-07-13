@extends('landingpage.layouts.app')
@section('konten')
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <h3 class="agile_w3_title">All <span>Countries</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">
                @foreach ($countries as $item)
                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="/countries/{{ $item->id }}" class="hvr-sweep-to-bottom"><img
                                src="{{$item->flag_url}}" style="height: 200px" title="Movies Pro" class="img-responsive" alt=" ">
                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <small><a style="color: black"
                                        href="/countries/{{ $item->id }}">{{ substr($item->name, 0, 19) }}
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
