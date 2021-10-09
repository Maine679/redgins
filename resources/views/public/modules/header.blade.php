<div class="container-fluid">
  <!-- box-header -->
  <header class="box-header">
    <div class="box-logo">
      <a href="{{url('/')}}"><img src="{{asset('image/public/logo.png')}}" width="80" alt="Logo"></a>
    </div>
    <!-- box-nav -->
    <a class="box-primary-nav-trigger" href="#0">
      <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
    </a>
  </header>
  <!-- end box-header -->

  <!-- nav -->
  <nav>
    <ul class="box-primary-nav">
      <li class="box-label">About me</li>

      <li><a href="{{url('/')}}">Intro</a> <i class="ion-ios-circle-filled color"></i></li>
      <li><a href="{{url('/about')}}">About me</a></li>
      <li><a href="{{url('/services')}}">services</a></li>
      <li><a href="{{url('/portfolio')}}">portfolio</a></li>
      <li><a href="{{url('/contact')}}">contact me</a></li>


      <li class="box-label">Follow me</li>

      <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
      <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
      <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
      <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
    </ul>
  </nav>
  <!-- end nav -->

  @if(request()->is('/'))
  <!-- box-intro -->
  <section class="box-intro">
    <div class="table-cell">
      <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">design.</b>
                        <b>&nbsp;coding.</b>
                        <b>graphic.</b>
                    </span>
      </h1>
      <h5>everything you need to build your personal portfolio</h5>
    </div>

    <div class="mouse">
      <div class="scroll"></div>
    </div>
  </section>
  <!-- end box-intro -->
  @endif
</div>
