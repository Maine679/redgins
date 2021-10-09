@extends('public.layouts.app')

@section('content')

    @extends('public.modules.header')

  <!-- portfolio div -->
  <div class="portfolio-div">
    <div class="portfolio">
      <div class="no-padding portfolio_container">
        <!-- single work -->
        <div class="col-md-3 col-sm-6  fashion logo">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/01.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mockups in seconds</span>
                  <em>Fashion / Logo</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 ads graphics">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/03.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Floating mockups</span>
                  <em>Ads / Graphics</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-6 col-sm-12 photography">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/02.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Photorealistic smartwatch</span>
                  <em>Photography</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 fashion ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/04.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Held by hands</span>
                  <em>Fashion / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 graphics ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/05.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mobile devices</span>
                  <em>Graphics / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-6 col-sm-12 photography">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/010.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Photorealistic smartwatch</span>
                  <em>Photography</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 graphics ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/06.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mobile devices</span>
                  <em>Graphics / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 graphics ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/07.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mobile devices</span>
                  <em>Graphics / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 graphics ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/08.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mobile devices</span>
                  <em>Graphics / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->

        <!-- single work -->
        <div class="col-md-3 col-sm-6 graphics ads">
          <a href="{{url('/single-project')}}" class="portfolio_item">
            <img src="{{asset('image/public/portfolio/09.jpg')}}" alt="image" class="img-responsive"/>
            <div class="portfolio_item_hover">
              <div class="portfolio-border clearfix">
                <div class="item_info">
                  <span>Mobile devices</span>
                  <em>Graphics / Ads</em>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end single work -->
      </div>
      <!-- end portfolio_container -->
    </div>
    <!-- portfolio -->
  </div>
  <!-- end portfolio div -->

@endsection
