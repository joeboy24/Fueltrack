
@extends('layouts.app')


@section('navlist')

  <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item dropbtn"><a href="/about" class="nav-link">Why Choose Us</a></li>
  <li class="nav-item dropdown"><a href="" class="nav-link dropbtn">How to buy</a>
    <div class="dropdown-content">
      <a class="nav-item dropdown" href="/admissions#apply"><i class="fa fa-send li_icon"></i>&nbsp;&nbsp; How to Apply</a>
      <a class="nav-item dropdown" href="/admissions#programs"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Programs Offered</a>
    </div>
  </li>
  <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
  {{-- <li class="nav-item dropdown"><a href="" class="nav-link dropbtn">Programs</a>
    <div class="dropdown-content">
      @foreach (session('program') as $program)
        <a href="/student_portal">{{ $program->program_name }}</a>
      @endforeach
    </div> 
  </li> --}}
  <li class="nav-item dropdown"><a class="nav-link dropbtn">Services</a>
    <div class="dropdown-content">
      <a href="https://portal.healthtraining.gov.gh/"><i class="fa fa-university li_icon"></i>&nbsp;&nbsp; HTI</a>
      <a href="/exam_portal"><i class="fa fa-pencil li_icon"></i>&nbsp;&nbsp; Examinations</a>
      <a href="/student_portal"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Student Portal</a>
      <a href="/staff_portal"><i class="fa fa-user-circle-o li_icon"></i>&nbsp;&nbsp; Staff Portal</a>
      <a href="/admin_portal"><i class="fa fa-unlock-alt li_icon"></i>&nbsp;&nbsp;&nbsp; Administration</a>
    </div>
  </li> 
  <li class="nav-item"><a href="#my_footer" class="nav-link">Contact</a></li>
  {{-- <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li> --}}
  <li class="nav-item cta"><a href="https://apply.healthtraining.gov.gh/application" class="nav-link"><i class="fa fa-shopping-basket color8"></i>&nbsp;&nbsp;<span>Cart</span></a></li>
	        
@endsection


@section('content')

<section class="car_header" style="background: url(/maindir/images/picanto/c2.webp); background-size: 100%; height: 750px">
  <div class="container">
    {{-- <img src="/maindir/images/picanto/c2.webp" width="100%" alt=""> --}}
    <div style="height: 100px"></div>
    <div class="row">
      <div class="car_searchby col-md-4">
        <h2 class="sb_h2">Find your dream car <i class="fa fa-car color11"></i></h2>
        <select class="search_sel" name="make" id="">
          <option value="">Select Make</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>

        <select class="search_sel" name="make" id="">
          <option value="">Select Category</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>

        <select class="search_sel" name="make" id="">
          <option value="">Select Model</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>

        <select class="search_sel" name="make" id="">
          <option value="">Select Type</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>

        <select class="search_sel" name="make" id="">
          <option value="">Select Steering</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>

        <div class="double_select">
          <select class="ds ds1" name="make" id="">
            <option value="">From Year</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>

          <select class="ds ds2" name="make" id="">
            <option value="">To Year</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>
        </div>

        <div class="">
            <input class="search_input ds1" type="text" name="min_price" placeholder="Min Price">
            <input class="search_input ds2" type="text" name="max_price" placeholder="Max Price" id="">
          </select>
        </div>
        
        <button type="button" class="sb_btn"><i class="fa fa-search"></i>&nbsp; Search</button>

        {{-- <div></div>
        <input type="range"> --}}

      </div>
    </div>
  </div>
</section>

<!-- Admissions -->
<section class="by_model">
  <div class="container">
    <div class="row">
      <div class="col-md-2 by_model_left">
        <h6>Sarch By Make</h6>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/toyota-logo.png" alt=""><span>Toyota</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/nissan-logo.png" alt=""><span>Nissan</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/honda-logo.png" alt=""><span>Honda</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/hyundai-logo.png" alt=""><span>Hyundai</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/mitsubishi-logo.png" alt=""><span>Mitsubishi</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/suzuki-logo.png" alt=""><span>Suzuki</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/mazda-logo.png" alt=""><span>Mazda</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/citroen-logo.png" alt=""><span>Citroen</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/kia-logo.png" alt=""><span>Kia</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/audi-logo.png" alt=""><span>Audi</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/mercedes-benz-logo.png" alt=""><span>Mercedes</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/saturn-logo.png" alt=""><span>Saturn</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/acura-logo.png" alt=""><span>Acura</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/chevrolet-logo.png" alt=""><span>Chevrolet</span></p></a>
        <a href="#"><p class="model_name"><img src="/maindir/images/car_logos/hino-logo.png" alt=""><span>Hino</span></p></a>
        <a href="#"><button class="show_more_gray"><i class="fa fa-folder-open">&nbsp;</i>&nbsp;View More</button></a>
      </div>

      <div class="col-md-10 by_model_right">
        <div class="key_search">
          <form action="">
          <p><span>Search &nbsp;</span><i class="fa fa-car"></i></p>
          <input type="text" placeholder="By Stock ID or Keyword">
          <button><i class="fa fa-search"></i></button>
          </form>
        </div>

        <div class="col-12">
          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c5.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c6.webp" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c10-vitz.webp" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c10-vitz2.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c9-toyota.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda1.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda2.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c8-honda3.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c9-toyota3.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c1.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>
        </div>

        <div class="col-12">
          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c5.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c6.webp" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c10-vitz.webp" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c10-vitz2.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c9-toyota.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda1.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda2.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c8-honda3.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c9-toyota3.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_20 car_thumb">
            <img src="/maindir/images/car_logos/c1.jpeg" alt="">
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>
          <a href="#"><button class="show_more_gray"><i class="fa fa-folder-open">&nbsp;</i>&nbsp;View More</button></a>
        </div>

        <div class="col-12 by_type">
          <p>&nbsp;</p>
          <h6 class="pannel_header"><span>Search By Type</span> </h6>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/mini2.png" alt="">
            <p>micro</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/sedan.png" alt="">
            <p>sedan</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/cuv.png" alt="">
            <p>cuv</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/suv.png" alt="">
            <p>suv</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/hatchback.png" alt="">
            <p>hatchback</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/roadster.png" alt="">
            <p>roadster</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/pickup.png" alt="">
            <p>pickup</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/van.png" alt="">
            <p>van</p>
          </div>

          <div class="by_type_cont">
            <img src="/maindir/images/car_types/coupe.png" alt="">
            <p>coupe</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/supercar.png" alt="">
            <p>supercar</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/campervan.png" alt="">
            <p>campervan</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/minitruck.png" alt="">
            <p>minitruck</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/hatchback.png" alt="">
            <p>cabriolet</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/roadster.png" alt="">
            <p>minivan</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/pickup.png" alt="">
            <p>truck</p>
          </div>
          <div class="by_type_cont">
            <img src="/maindir/images/car_types/van.png" alt="">
            <p>bigtruck</p>
          </div>
          <div class="by_type_cont">
            <p><i class="fa fa-warning"></i></p>
            {{-- <img src="/maindir/images/car_types/van.png" alt=""> --}}
            <p>Others</p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- Appointment -->
{{-- <section class="ftco-intro">
  <div class="container">
    <div class="row no-gutters">
            
      <div id="my_appointment" class="col-md-8 color-3 p-4">
        <h3 class="mb-2">Make an Appointment</h3>
        <form action="#" class="appointment-form">
          <div class="row">
              <div class="col-sm-4">
              <div class="form-group">
                  <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select name="" id="" class="form-control">
                <option>Department</option>
                @if (count($department) != 0)
                  @foreach ($department as $dept)
                    <option>{{$dept->dept_name}}</option>
                  @endforeach
                @endif
              </select>
              </div>
                  </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                  <div class="icon"><span class="icon-user"></span></div>
                  <input type="text" class="form-control" id="appointment_name" placeholder="Name">
                  </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                  <div class="icon"><span class="icon-paper-plane"></span></div>
                  <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                  </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-4">
              <div class="form-group">
                  <div class="icon"><span class="ion-ios-calendar"></span></div>
              <input type="text" class="form-control appointment_date" placeholder="Date">
              </div>    
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                  <div class="icon"><span class="ion-ios-clock"></span></div>
              <input type="text" class="form-control appointment_time" placeholder="Time">
              </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                  <div class="icon"><span class="icon-phone2"></span></div>
              <input type="text" class="form-control" id="phone" placeholder="Phone">
              </div>
          </div>
          </div>
          
          <div class="form-group">
          <input type="submit" value="Make an Appointment" class="btn btn-primary">
          </div>
        </form>
      </div>
      <div class="col-md-4 color-1 p-4">
        <h3 class="mb-4">Our Contact Details</h3>
        <p>Email:mrJay@pivoapps.net <br>Loc. Las Vegas </p>
        <span class="phone-number">PivoApps</span>
      </div>
    </div>
  </div>
</section> --}}

<!-- Flash Deals -->
<section class="by_model">
  <div class="container">
    <div class="row">
      <div class="col-md-2 by_model_left">
      </div>

      <div class="col-md-10 by_model_right">

        <div class="col-12">

          <h6 class="pannel_header2"><span>Flash Deals</span> </h6>

          <div class="col_25 car_thumb">
            <img src="/maindir/images/car_logos/c10-vitz.webp" alt="">
            <h5 class="flash_tag">25% off</h5>
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_25 car_thumb">
            <img src="/maindir/images/car_logos/c9-toyota.jpeg" alt="">
            <h5 class="flash_tag">20% off</h5>
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_25 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda1.jpeg" alt="">
            <h5 class="flash_tag">15% off</h5>
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>

          <div class="col_25 car_thumb">
            <img src="/maindir/images/car_logos/c7-honda2.jpeg" alt="">
            <h5 class="flash_tag">35% off</h5>
            <h6>Toyota Corolla 2017</h6>
            <p>24 Reviews</p>
            <h5>Price <span>USD&nbsp;4,500+</span></h5>
          </div>
        
          <a href="#"><button class="show_more_gray"><i class="fa fa-folder-open">&nbsp;</i>&nbsp;View More</button></a>
      </div>
    </div>
  </div>
</section>

<!-- Events and News -->
<p>&nbsp;</p>
<section class="my_section1 container">
  <h6 class="pannel_header"><span>Our Promos & Blog</span> </h6>
  <div class="row">
    <div class="col-md-4 events">
      {{-- <div class="col-md-8 offset-md-4 heading-section ftco-animate">
        <h2 class="mb-2 float_right"><i class="fa fa-events"></i> Events</h2>
      </div> --}}
      <p class="events_line"></p>

      <div class="row">
        <div class="event_date_container">
          <p class="event_day">{{ date('d', strtotime(date('d-m-Y'))) }}<span></span></p>
          <p class="event_month">{{ date('M', strtotime(date('d-m-Y'))) }}</p>
        </div>
        <div class="event_container">
          <img src="/maindir/images/picanto/2.jpeg" width="100%">
          <p class="event_text">Title</p>
          <p class="clock_map"><i class="fa fa-clock-o">&nbsp;&nbsp;&nbsp;</i>{{date('d-m-Y')}}</p>
          <p class="clock_map"><i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;&nbsp;</i>Dallas</p>
          <a href="/all_events"><p class="myA">View more...</p></a>
        </div>
      </div>

    </div>

    <div class="col-md-8 events_right">
      {{-- <div class="col-md-8 heading-section ftco-animate">
        <h2 class="mb-2">News & Updates</h2>
      </div> --}}
      <p class="events_right_line"></p>
      <div class="row">
        {{-- @foreach (session('newsblog6') as $blog) --}}
          <a href="/guestpages/{{ 1 }}"><div class="col-md-5 block-21 mb-4 d-flex events_right_div">
              <a href="/guestpages/{{ 1 }}" class="blog-img mr-4" style="background-image: url(/maindir/images/picanto/1.jpeg); border-radius: 5px"></a>
              <div class="text">
                  <h3 class="heading"><a href="/guestpages/{{ 1 }}"> <b>Honda Give Away...</b></a></h3>
                  <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> {{ date('d-m-Y') }}</a></div>
                  <div><a href="#"><span class="icon-chat"></span> {{ 3 }}</a></div>
                  </div>
              </div>
          </div></a>

          <a href="/guestpages/{{ 1 }}"><div class="col-md-5 block-21 mb-4 d-flex events_right_div">
            <a href="/guestpages/{{ 1 }}" class="blog-img mr-4" style="background-image: url(/maindir/images/picanto/8.jpeg); border-radius: 5px"></a>
            <div class="text">
                <h3 class="heading"><a href="/guestpages/{{ 1 }}"> <b>Honda Give Away...</b></a></h3>
                <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> {{ date('d-m-Y') }}</a></div>
                <div><a href="#"><span class="icon-chat"></span> {{ 3 }}</a></div>
                </div>
            </div>
        </div></a>

        <a href="/guestpages/{{ 1 }}"><div class="col-md-5 block-21 mb-4 d-flex events_right_div">
          <a href="/guestpages/{{ 1 }}" class="blog-img mr-4" style="background-image: url(/maindir/images/picanto/1.jpeg); border-radius: 5px"></a>
          <div class="text">
              <h3 class="heading"><a href="/guestpages/{{ 1 }}"> <b>Honda Give Away...</b></a></h3>
              <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> {{ date('d-m-Y') }}</a></div>
              <div><a href="#"><span class="icon-chat"></span> {{ 3 }}</a></div>
              </div>
          </div>
      </div></a>

      <a href="/guestpages/{{ 1 }}"><div class="col-md-5 block-21 mb-4 d-flex events_right_div">
        <a href="/guestpages/{{ 1 }}" class="blog-img mr-4" style="background-image: url(/maindir/images/picanto/8.jpeg); border-radius: 5px"></a>
        <div class="text">
            <h3 class="heading"><a href="/guestpages/{{ 1 }}"> <b>Honda Give Away...</b></a></h3>
            <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> {{ date('d-m-Y') }}</a></div>
            <div><a href="#"><span class="icon-chat"></span> {{ 3 }}</a></div>
            </div>
        </div>
    </div></a>
        {{-- @endforeach --}}
      </div>
        <a href="/news"><button type="button" class="btn_red_inverse">Load More</button></a>
    </div>
  </div>
</section>

{{-- <section class="my_section1 container">
  <div class="row">
    <div class="col-md-4 events">
      <div class="col-md-8 offset-md-4 heading-section ftco-animate">
        <h2 class="mb-2 float_right"><i class="fa fa-events"></i> Events</h2>
      </div><p class="events_line"></p>

      <div class="row">
        <div class="event_date_container">
          <p class="event_day">{{ date('d', strtotime(session('event')->date_added)) }}<span></span></p>
          <p class="event_month">{{ date('M', strtotime(session('event')->date_added)) }}</p>
        </div>
        <div class="event_container">
          <img src="/storage/classified/events/{{ session('event')->dp }}" width="100%">
          <p class="event_text">{{session('event')->title}}</p>
          <p class="clock_map"><i class="fa fa-clock-o">&nbsp;&nbsp;&nbsp;</i>{{session('event')->duration}}</p>
          <p class="clock_map"><i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;&nbsp;</i>{{session('event')->venue}}</p>
          <a href="/all_events"><p class="myA">View more...</p></a>
        </div>
      </div>

    </div>

    <div class="col-md-8 events_right">
      <div class="col-md-8 heading-section ftco-animate">
        <h2 class="mb-2">News & Updates</h2>
      </div><p class="events_right_line"></p>\
      <div class="row">
        @foreach (session('newsblog6') as $blog)
          <a href="/guestpages/{{ $blog->id }}"><div class="col-md-5 block-21 mb-4 d-flex events_right_div">
              <a href="/guestpages/{{ $blog->id }}" class="blog-img mr-4" style="background-image: url(/storage/classified/news_blog/{{$blog->dp}}); border-radius: 5px"></a>
              <div class="text">
                  <h3 class="heading"><a href="/guestpages/{{ $blog->id }}"> <b>{{ substr($blog->title, 0, 35) }}...</b></a></h3>
                  <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> {{ $blog->date_added }}</a></div>
                  <div><a href="#"><span class="icon-chat"></span> {{ count($blog->comment) }}</a></div>
                  </div>
              </div>
          </div></a>
        @endforeach
      </div>
        <a href="/news"><button type="button" class="btn_red_inverse">Load More</button></a>
    </div>
  </div>
</section> --}}

<!-- Covid Notice -->
{{-- <section class="my_section2 container">
  <img src="/storage/classified/system_use/0122_4bbdcc0.png" width="100%">
  <div class="blank_space" style="height: 70px"></div>
</section> --}}


<!-- Admissions -->
{{-- <section class="my_section1 myBlue2">
  <div class="blank_space" style="height: 70px"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 admi_left">
        <h2>{{ date('Y') }}</h2>
        <h2>Registration</h2>
        <h2>Find your dream car</h2>
        <h3>Gone Digital</h3>
        <a href="/sregister_course"><button type="button" class="admi_inverse">Register Now</button></a>
        <p class="phone_globe">chntc-akimoda.edu.gh/apply-now</p>
        <p class="phone_globe"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;+233 (0)24 265 6449 &nbsp;&nbsp;&nbsp; 
        <i class="fa fa-globe"></i>&nbsp;&nbsp;chntc-akimoda.edu.gh</p>
      </div>

      <div class="col-md-6 admi_right">
        <img src="/storage/classified/system_use/admi_right_yellow.png" width="100%">
      </div>
    </div>
  </div>
  <div class="blank_space" style="height: 70px"></div>
</section> --}}

<!-- Our Goals -->
{{-- <section class="ftco-section ftco-services">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-2">{{$homepage->goals_header}}</h2>
        <p>{{$homepage->goals_body}}</p>
      </div>
    </div>

    <div class="row">

        @if ($homepage->goal1_title != '')
          @if ($homepage->goal2_title == '' && $homepage->goal3_title == '' && $homepage->goal4_title == '')
            <div class="col-md-10 offset-md-1 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal3_title != '' && $homepage->goal4_title != '' || $homepage->goal2_title != '' && $homepage->goal3_title == '' && $homepage->goal4_title != '' || $homepage->goal2_title != '' && $homepage->goal3_title != '' && $homepage->goal4_title == '')
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal3_title == '' && $homepage->goal4_title != '' || $homepage->goal2_title == '' && $homepage->goal3_title != '' && $homepage->goal4_title == '' || $homepage->goal2_title != '' && $homepage->goal3_title == '' && $homepage->goal4_title == '')
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title != '' && $homepage->goal3_title != '' && $homepage->goal4_title != '')
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          @endif
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-anesthesia"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$homepage->goal1_title}}</h3>
                <p>{{$homepage->goal1_text}}</p>
              </div>
            </div>      
          </div>
        @endif

        @if ($homepage->goal2_title != '')
          @if ($homepage->goal1_title == '' && $homepage->goal3_title == '' && $homepage->goal4_title == '')
            <div class="col-md-10 offset-md-1 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal1_title == '' && $homepage->goal3_title != '' && $homepage->goal4_title != '' || $homepage->goal1_title != '' && $homepage->goal3_title == '' && $homepage->goal4_title != '' || $homepage->goal1_title != '' && $homepage->goal3_title != '' && $homepage->goal4_title == '')
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal1_title == '' && $homepage->goal3_title == '' && $homepage->goal4_title != '' || $homepage->goal1_title == '' && $homepage->goal3_title != '' && $homepage->goal4_title == '' || $homepage->goal1_title != '' && $homepage->goal3_title == '' && $homepage->goal4_title == '')
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal1_title != '' && $homepage->goal3_title != '' && $homepage->goal4_title != '')
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          @endif
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tooth-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$homepage->goal2_title}}</h3>
                <p>{{$homepage->goal2_text}}</p>
              </div>
            </div>    
          </div>
        @endif

        @if ($homepage->goal3_title != '')
          @if ($homepage->goal2_title == '' && $homepage->goal1_title == '' && $homepage->goal4_title == '')
            <div class="col-md-10 offset-md-1 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal1_title != '' && $homepage->goal4_title != '' || $homepage->goal2_title != '' && $homepage->goal1_title == '' && $homepage->goal4_title != '' || $homepage->goal2_title != '' && $homepage->goal1_title != '' && $homepage->goal4_title == '')
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal1_title == '' && $homepage->goal4_title != '' || $homepage->goal2_title == '' && $homepage->goal1_title != '' && $homepage->goal4_title == '' || $homepage->goal2_title != '' && $homepage->goal1_title == '' && $homepage->goal4_title == '')
            <div class="col-md-5 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title != '' && $homepage->goal1_title != '' && $homepage->goal4_title != '')
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          @endif
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$homepage->goal3_title}}</h3>
                <p>{{$homepage->goal3_text}}</p>
              </div>
            </div>      
          </div>
        @endif

        @if ($homepage->goal4_title != '')
          @if ($homepage->goal2_title == '' && $homepage->goal3_title == '' && $homepage->goal1_title == '')
            <div class="col-md-10 offset-md-1 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal3_title != '' && $homepage->goal1_title != '' || $homepage->goal2_title != '' && $homepage->goal3_title == '' && $homepage->goal1_title != '' || $homepage->goal2_title != '' && $homepage->goal3_title != '' && $homepage->goal1_title == '')
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title == '' && $homepage->goal3_title == '' && $homepage->goal1_title != '' || $homepage->goal2_title == '' && $homepage->goal3_title != '' && $homepage->goal1_title == '' || $homepage->goal2_title != '' && $homepage->goal3_title == '' && $homepage->goal1_title == '')
            <div class="col-md-5 d-flex align-self-stretch ftco-animate">
          @elseif ($homepage->goal2_title != '' && $homepage->goal3_title != '' && $homepage->goal1_title != '')
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          @endif
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$homepage->goal4_title}}</h3>
                <p>{{$homepage->goal4_text}}</p>
              </div>
            </div>      
          </div>
        @endif

    </div>

  </div>
  <div class="container-wrap mt-5">
    <div class="row d-flex no-gutters">
      <div class="col-md-6 img" style="background-image: url(/storage/classified/system_use/{{$homepage->headteacher_photo}});">
      </div>
      <div class="col-md-6 d-flex">
        <div class="about-wrap">
          <div class="heading-section heading-section-white mb-5 ftco-animate">
            <h2 class="mb-2">{{$homepage->meet_header}}</h2>
            <p>{{$homepage->meet_body}}</p>
          </div>

          @if ($homepage->meet1_title != '')
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>{{$homepage->meet1_title}}</h3>
                <p>{{$homepage->meet1_text}}</p>
              </div>
            </div>
          @endif

          @if ($homepage->meet2_title != '')
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>{{$homepage->meet2_title}}</h3>
                <p>{{$homepage->meet2_text}}</p>
              </div>
            </div>
          @endif

          @if ($homepage->meet3_title != '')
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>{{$homepage->meet3_title}}</h3>
                <p>{{$homepage->meet3_text}}</p>
              </div>
            </div>
          @endif

        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- Out Team -->
{{-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-3">Meet Our Experience Lecturers</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="img mb-4" style="background-image: url(/maindir/images/person_5.jpg);"></div>
          <div class="info text-center">
            <h3><a href="teacher-single.html">Tom Smith</a></h3>
            <span class="position">Lecturers</span>
            <div class="text">
              <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
              <ul class="ftco-social">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="img mb-4" style="background-image: url(/maindir/images/person_6.jpg);"></div>
          <div class="info text-center">
            <h3><a href="teacher-single.html">Mark Wilson</a></h3>
            <span class="position">Lecturers</span>
            <div class="text">
              <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
              <ul class="ftco-social">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="img mb-4" style="background-image: url(/maindir/images/person_7.jpg);"></div>
          <div class="info text-center">
            <h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
            <span class="position">Lecturers</span>
            <div class="text">
              <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
              <ul class="ftco-social">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="img mb-4" style="background-image: url(/maindir/images/person_8.jpg);"></div>
          <div class="info text-center">
            <h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
            <span class="position">System Analyst</span>
            <div class="text">
              <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
              <ul class="ftco-social">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row  mt-5 justify-conten-center">
      <div class="col-md-8 ftco-animate">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.</p>
      </div>
    </div>
  </div>
</section> -->

<!-- News -->
<section class="ftco-section"> 
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-2">CHNTC NEWS</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('/storage/classified/Nursing/n4.jpeg');">
            </a>
            <div class="text d-flex py-4">
              <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="100">
            <a href="blog-single.html" class="block-20" style="background-image: url('/maindir/images/image_2.jpg');">
            </a>
            <div class="text d-flex py-4">
              <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="200">
            <a href="blog-single.html" class="block-20" style="background-image: url('/storage/classified/Nursing/n6.jpeg');">
            </a>
            <div class="text d-flex py-4">
              <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Achievements -->
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('/storage/classified/Nursing/n7.jpeg');" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-3 aside-stretch py-5">
        <div class=" heading-section heading-section-white ftco-animate pr-md-4">
          <h2 class="mb-3">Our History</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
      <div class="col-md-9 py-5 pl-md-5">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="14">0</strong>
                <span>Years of Experience</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="4500">0</strong>
                <span>Qualified Lecturers</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="4200">0</strong>
                <span>Happy Smiling Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="320">0</strong>
                <span>Patients Per Year</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
{{-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-3">Our Best Pricing</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Basic</h3>
            <p><span class="price">$24.50</span> <span class="per">/ session</span></p>
          </div>
          <ul>
            <li>Diagnostic Services</li>
            <li>Professional Consultation</li>
            <li>Tooth Implants</li>
            <li>Surgical Extractions</li>
            <li>Teeth Whitening</li>
          </ul>
          <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Standard</h3>
            <p><span class="price">$34.50</span> <span class="per">/ session</span></p>
          </div>
          <ul>
            <li>Diagnostic Services</li>
            <li>Professional Consultation</li>
            <li>Tooth Implants</li>
            <li>Surgical Extractions</li>
            <li>Teeth Whitening</li>
          </ul>
          <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry active pb-5 text-center">
          <div>
            <h3 class="mb-4">Premium</h3>
            <p><span class="price">$54.50</span> <span class="per">/ session</span></p>
          </div>
          <ul>
            <li>Diagnostic Services</li>
            <li>Professional Consultation</li>
            <li>Tooth Implants</li>
            <li>Surgical Extractions</li>
            <li>Teeth Whitening</li>
          </ul>
          <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Platinum</h3>
            <p><span class="price">$89.50</span> <span class="per">/ session</span></p>
          </div>
          <ul>
            <li>Diagnostic Services</li>
            <li>Professional Consultation</li>
            <li>Tooth Implants</li>
            <li>Surgical Extractions</li>
            <li>Teeth Whitening</li>
          </ul>
          <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- Students Testimony -->
{{-- @if (count($testimonies) > 0)
  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-2">Students Say!</h2>
          <span class="subheading">Comments From Our Humble Students</span>
        </div>
      </div>
      <div class="row justify-content-center ftco-animate">
        <div class="col-md-8">
          <div class="carousel-testimony owl-carousel ftco-owl">

            @foreach ($testimonies as $testimony)
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(/storage/classified/gallery/{{ $testimony->photo }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ $testimony->text }}</p>
                    <p class="name">{{ $testimony->name }}</p>
                    <span class="position">{{ $testimony->position }}</span>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </section>
@endif --}}

<!-- Curious -->
{{-- <section class="ftco-quote">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
        <div class="heading-section heading-section-white mb-5 ftco-animate">
          <h2 class="mb-2">{{ $homepage->curious_header }}</h2>
        </div>
        <div class="ftco-animate">
          <p>{{ $homepage->curious_body }}</p>
          <ul class="un-styled my-5">
            @if ($homepage->cur_bul1 != '')<li><span class="icon-check"></span>{{ $homepage->cur_bul1 }}</li>@endif
            @if ($homepage->cur_bul2 != '')<li><span class="icon-check"></span>{{ $homepage->cur_bul2 }}</li>@endif
            @if ($homepage->cur_bul3 != '')<li><span class="icon-check"></span>{{ $homepage->cur_bul3 }}</li>@endif
            @if ($homepage->cur_bul4 != '')<li><span class="icon-check"></span>{{ $homepage->cur_bul4 }}</li>@endif
          </ul>
        </div>
      </div>
      <div class="col-md-6 py-5 pl-md-5">
        @include('inc.messages')
        <div class="heading-section mb-5 ftco-animate">
          <h2 class="mb-2">Ask a Question?</h2>
        </div>
        <form action="{{ action('GuestPagesController@store') }}" class="ftco-animate" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="contact" name="phone" class="form-control" placeholder="Phone" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <button type="submit" name="store_action" value="Ask_Us" class="btn btn-primary py-3 px-5">Ask Us</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section> --}}

<!-- Gallery -->
{{-- <section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row no-gutters">
      @foreach ($gallery as $item)
        <div class="col-md-3 ftco-animate">
          <a href="#" class="gallery img d-flex align-items-center" data-toggle="modal" data-target="#imgRequest{{$item->id}}" style="background-image: url(/storage/classified/gallery/{{$item->photo}});">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
            </div>
          </a>
        </div>

        <div class="modal fade" id="imgRequest{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="imgRequestLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="imgRequestLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
                <img src="/storage/classified/gallery/{{$item->photo}}" width="100%">
                
              </div>
              
            </div>
          </div>
        </div>

      @endforeach
      <a href="/gallery"  class="gallery_btn"><span>View More..</span></a>
    </div>
  </div>
</section> --}}

<!-- Newsletter -->
{{-- <section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
        <div class="col-md-8 offset-md-2 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="{{ action('GuestPagesController@store') }}" class="subscribe-form" method="POST">
                @csrf
                <div class="form-group d-flex">
                  <input type="email" name="email" class="form-control" placeholder="Enter email address">
                  <input type="submit" name="store_action" value="Subscribe" class="submit px-3" onclick="alert('Subscription Successful!')">
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

{{-- <div id="map"></div> --}}


@endsection
    
  