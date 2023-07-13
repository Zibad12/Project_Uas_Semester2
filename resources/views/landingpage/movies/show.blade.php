@extends('landingpage.layouts.app')
@section('konten')
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title">{{ $movie->title }}</h3>
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-8 latest-news-agile-left-content">
                    <div class="single video_agile_player">
                        @if (Auth::check())
                            <div data-video="{{ substr($movie->video_url, -11) }}" id="video"> <img
                                    src="{{ $movie->poster_url }}" alt="" class="img-responsive"
                                    style="height: 400px" />
                            </div>
                        @else
                            <div class="video-grid-single-page-agileits">
                                <img src="{{ $movie->poster_url }}" style="height: 350px" alt=""
                                    class="img-responsive">
                            </div>
                        @endif

                        <p>{{ $movie->description }}</p>
                    </div>
                    <div class="single-agile-shar-buttons">
                        <h5>Share This :</h5>
                        <ul>
                            <li>
                                <div class="fb-like" data-href="https://www.facebook.com/w3layouts"
                                    data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
                                    data-share="false"></div>
                                <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                            </li>
                            <li>
                                <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts"
                                    data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                                        class="fb-xfbml-parse-ignore" target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a>
                                </div>
                            </li>
                            <li class="news-twitter">
                                <a href="https://twitter.com/w3layouts" class="twitter-follow-button"
                                    data-show-count="false">Follow @w3layouts</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?screen_name=w3layouts"
                                    class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                                <!-- Place this tag where you want the +1 button to render. -->
                                <div class="g-plusone" data-size="medium"></div>

                                <!-- Place this tag after the last +1 button tag. -->
                                <script type="text/javascript">
                                    (function() {
                                        var po = document.createElement('script');
                                        po.type = 'text/javascript';
                                        po.async = true;
                                        po.src = 'https://apis.google.com/js/platform.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </li>
                        </ul>
                    </div>
                    <div class="admin-text">
                        <h5>WRITTEN BY ADMIN</h5>
                        <div class="admin-text-left">
                            <a href="#"><img src="{{ asset('web/images/admin.jpg') }}" alt=""></a>
                        </div>
                        <div class="admin-text-right">
                            <p>Video App adalah sebuah platform yang dirancang khusus untuk penggemar film. Dengan
                                menggunakan website ini, pengguna dapat menjelajahi berbagai film dari berbagai genre dan
                                negara. Aplikasi ini menyediakan informasi lengkap tentang film, termasuk judul, poster,
                                deskripsi, tanggal rilis, negara asal, genre, dan rating. Selain itu, pengguna juga dapat
                                menonton trailer film langsung di halaman detail film. </p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="all-comments-info">
                        <h5>LEAVE A COMMENT</h5>
                        <div class="agile-info-wthree-box">
                            @if (Auth::check())
                                <form action="/movies" method="post">
                                    @csrf
                                    <div class="col-md-12 form-info">
                                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                                        <textarea placeholder="Message" required="" name="comment"></textarea>
                                        <input type="submit" value="SEND">
                                    </div>
                                    <div class="clearfix"> </div>
                                </form>
                            @else
                                <p>Please login to leave a comment.</p>
                            @endif

                        </div>
                    </div>

                    <div class="response">
                        <h4>Responses</h4>
                        @foreach ($comments as $item)
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('web/images/admin.jpg') }}" alt="">
                                    </a>
                                    <h5><a href="#">{{ $item->user->name }}</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>{{ $item->comment }}</p>
                                    <ul>
                                        <li>{{ $item->date }}</li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-4 latest-news-agile-right-content">
                    <div class="clearfix"> </div>
                    <div class="agile-info-recent">
                        <h4 class="side-t-w3l-agile">Latest <span>Movies</span></h3>
                            <div class="w3ls-recent-grids">
                                @foreach ($latesmovies as $item)
                                    <div class="w3l-recent-grid">
                                        <div class="wom">
                                            <a href="/movies/{{ $item->id }}"><img src="{{ $item->poster_url }}"
                                                    alt=" " class="img-responsive"></a>
                                        </div>
                                        <div class="wom-right">
                                            <h5><a href="/movies/{{ $item->id }}">{{ $item->title }}</a></h5>
                                            <p><?= substr($item->description, 0, '50') ?></p>
                                            <ul class="w3l-sider-list">
                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>On
                                                    {{ $item->release_date }}</li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--//content-inner-section-->
@endsection
