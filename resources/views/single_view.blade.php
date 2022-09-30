
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
    <div style="height: 100px"></div>
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

        <div class="row">
          <div class="col-md-12">
            <div class="sv_header">
              <p>Stock Id: IK17290</p>
              <h4>Toyota Corolla 2017</h4>
              <p class="color7"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
              </p>
              <p>72 Reviews</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="single_img_cont" id="single_img_cont"
             style="background: url(/maindir/images/car_logos/c6.webp); background-size: 100%; background-position: center;
             background-repeat: no-repeat;">
            </div>
            {{-- <img src="/maindir/images/car_logos/c6.webp" alt=""> --}}
            <div class="related_imgs" id="related_imgs">
              <img src="/maindir/images/car_logos/c6.webp" width="16%" alt="">
              <img src="/maindir/images/car_logos/c9-toyota.jpeg" width="15%" alt="">
              <img src="/maindir/images/car_logos/c5.jpeg" width="16%" alt="">
              <img src="/maindir/images/car_logos/c6.webp" width="16%" alt="">
              <img src="/maindir/images/car_logos/c9-toyota.jpeg" width="100" alt="">
              <img src="/maindir/images/car_logos/c6.webp" width="16%" alt="">
              <img src="/maindir/images/car_logos/c5.jpeg" width="16%" alt="">
              <img src="/maindir/images/car_logos/c6.webp" width="16%" alt="">
              <img src="/maindir/images/car_logos/c9-toyota.jpeg" width="100" alt="">
              <img src="/maindir/images/car_logos/c5.jpeg" width="16%" alt="">
            </div>

            <table class="vehicle_det">
              <p>&nbsp;</p>
              <h6 class="vehicle_det_header">Toyota Corolla 2017 - Car Details</h6>
              <tbody>
                <tr>
                  <td class="td1">Stock Id:</td>
                  <td>IK17290</td>
                  <td class="td1">Inventory Location:</td>
                  <td>Nagoya - Japan</td>
                </tr>
                <tr>
                  <td class="td1">Model Code:</td>
                  <td>DBA-NZE164G</td>
                  <td class="td1">Year:</td>
                  <td>2017</td>
                </tr>
                <tr>
                  <td class="td1">Mileage:</td>
                  <td>117,000km</td>
                  <td class="td1">Color:</td>
                  <td>Dark Gray</td>
                </tr>
                <tr>
                  <td class="td1">Transmission:</td>
                  <td>Auto</td>
                  <td class="td1">Drive:</td>
                  <td>4WD</td>
                </tr>
                <tr>
                  <td class="td1">Steering:</td>
                  <td>LHD</td>
                  <td class="td1">Seats:</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td class="td1">Engine Type:</td>
                  <td>1NZ</td>
                  <td class="td1">Door:</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td class="td1">Engine Size:</td>
                  <td>1,490cc</td>
                  <td class="td1">Body Type:</td>
                  <td>Station Wagon</td>
                </tr>
                <tr>
                  <td class="td1">Fuel:</td>
                  <td>Petrol</td>
                  <td class="td1">Body Length:</td>
                  <td>4.40m</td>
                </tr>
                <tr>
                  <td class="td1">Vehicle Weight:</td>
                  <td>1,200kg</td>
                  <td class="td1">Gross Vehicle Weight:</td>
                  <td>1,475kg</td>
                </tr>
                <tr>
                  <td class="td1">Max Loading Capacity:</td>
                  <td>-</td>
                  {{-- <td class="td1">Body Type:</td>
                  <td>Station Wagon</td> --}}
                </tr>
              </tbody>
            </table>

            <div class="car_accessory">
              <h6 class="vehicle_det_header">Accessories</h6>
              <p class="active_acc">Airbag</p>
              <p>CD Player</p>
              <p class="active_acc">Power Steering</p>
              <p class="active_acc">Leather Seat</p>
              <p>Alloy Wheels</p>
              <p>Rear Spoiler</p>
              <p class="active_acc">Wheel Spanner</p>
              <p class="active_acc">Central Locking</p>
              <p>Power Seat</p>
              <p class="active_acc">Navigation</p>
              <p class="active_acc">Sun Roof</p>
            </div>
          </div>

          <div class="col-md-4">
            <table class="price_calc">
              <thead>
                <th>Total Price Calculator</th>
                <th class="align_right">
                  <select name="" id="">
                    <option value="1">USD</option>
                    <option value="2">EUR</option>
                    <option value="3">GBP</option>
                    <option value="4">CAD</option>
                  </select>
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>Vehicle Price</td>
                  <td class="align_right vprice color6">$2,700</td>
                </tr>
                <tr>
                  <td></td>
                  <td class="align_right color6"><p class="small_p color10">Cancel $200</p></td>
                </tr>
                <tr>
                  <td><p class="small_p">Save</p></td>
                  <td class="align_right color6">12%</td>
                </tr>
                {{-- <tr class="line_br"><td><p></p></td></tr> --}}
                <tr class="tr_br">
                  <td>Destination Country</td>
                  <td class="align_right color6">
                    <select name="" id="">
                      <option value="1">Canada</option>
                      <option value="2">Ghana</option>
                    </select>
                  </td>
                </tr>
                <tr class="tr_br">
                  <td>Shipment</td>
                  <td class="align_right color6">
                    <select name="" id="">
                      <option value="1">Container</option>
                      <option value="2">RoRo</option>
                    </select>
                  </td>
                </tr>
                <tr class="tr_br">
                  <td>Freight</td>
                  <td class="align_right color6"><label for="check1">$1,720&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" id="check1"></label></td>
                </tr>
                <tr class="tr_br">
                  <td>Inspection</td>
                  <td class="align_right color6"><label for="check2">$250&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" id="check2"></label></td>
                </tr>
                <tr class="tr_br">
                  <td>Insurance</td>
                  <td class="align_right color6"><label for="check3">$100&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" id="check3"></label></td>
                </tr>
              </tbody>
            </table>
            <button class="inquiry_btn bg11 color8"><i class="fa fa-envelope-open-o">&nbsp;</i>&nbsp;&nbsp;Inquiry</button>
            <button class="buynow_btn bg6 color8"><i class="fa fa-shopping-basket">&nbsp;</i>&nbsp;&nbsp;Buy Now</button>
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


@endsection
    
  