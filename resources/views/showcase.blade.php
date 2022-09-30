
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

<section class="car_header" style="background: rgb(53, 53, 53); background-size: 100%">
  <div class="container">
    {{-- <img src="/maindir/images/picanto/c2.webp" width="100%" alt=""> --}}
    <div style="height: 100px"></div>
    {{-- <div class="row">
      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Make</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Category</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Model</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Type</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Steering</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
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
      </div>

      <div class="col2_25">
        <div class="">
            <input class="search_input ds1" type="text" name="min_price" placeholder="Min Price">
            <input class="search_input ds2" type="text" name="max_price" placeholder="Max Price" id="">
          </select>
        </div>
      </div>

      <div class="col2_25">
        <button type="button" class="sb_btn2"><i class="fa fa-search"></i>&nbsp; Search</button>
      </div>
      
    </div> --}}
  </div>
</section>

<!-- Showcase By Model -->
<section class="showcase_searchby">
  <div class="container">
    <div class="row">
      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Make</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Category</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Model</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Type</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
        <select class="search_sel" name="make" id="">
          <option value="">Select Steering</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
      </div>

      <div class="col2_25">
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
      </div>

      <div class="col2_25">
        <div class="">
            <input class="search_input ds1" type="text" name="min_price" placeholder="Min Price">
            <input class="search_input ds2" type="text" name="max_price" placeholder="Max Price" id="">
          </select>
        </div>
      </div>

      <div class="col2_25">
        <button type="button" class="sb_btn2"><i class="fa fa-search"></i>&nbsp; Search</button>
      </div>
    </div>
  </div>
</section>

<!-- By Model -->
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


@endsection
    
  