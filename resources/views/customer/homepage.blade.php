<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kaushan+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    

    <link rel="stylesheet" href="{{ asset('css/style_3_1.css') }}">
</head>
<body>
@include('customer.customer_navbar')
<div class="cover_image_section">
    <div class="container">
        <div class="header_container">
            <div class="header_container_content">
                <div class="home_greeting">
                    Discover & connect.
                    <span class="authFirstname">Your own web directory.</span>
                </div>   
            </div>
            <div class="form_div row">
                <div class="catogory_search col">
                    <input type="text" class="form-control" placeholder="What?(e.g. Plumber)">
                </div>
                <div class="location_search col">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Something clever..">
                        <div class="input-group-append">
                          <button class="btn btn-dark search_icon" type="button"><span class="material-symbols-outlined">search</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular_links">
                <ul>
                    <li class="quick_links"><a href="#">Restaurants</a></li>
                    <li class="quick_links"><a href="#">Dentists</a></li>
                    <li class="quick_links"><a href="#">Medical Clinics</a></li>
                    <li class="quick_links"><a href="#">Car Repair</a></li>
                    <li class="quick_links"><a href="#">Grocery Stores</a></li>
                </ul>
            </div>
        </div>   
    </div>
    <div class="string_img">
        <img src="{{ asset('customer-images/final-svg-cover-01.svg') }}">
    </div>
</div>
<div class="service_category_section bg_white">
    <div class="container-fluid">
        <div class="our_cat_section_heading">
            <div class="center_title">
              <h2 class="heading_styling">Service <span class="highlight_title">Cat</span>egory</h2>
              <p>Click and find the services near you.</p>
            </div>
            <!-- <div class="right_side">
              <button class="button_view_all">View All</button>
            </div> -->
          </div>
    </div>
    <div class="container-fluid">
        <div class="our_cat_section_section">
          @foreach($services as $service)
            <a href="{{url('/servicecategory/'.$service->id)}}" class="our_cat_section_box">
              <div class="our_cat_section_link">
                <h5>{{ $service->name }}</h5>
                <h6>09 Ads</h6>
                <img src="{{ asset('uploads/category/'.$service->thumbnail) }}" alt="icons">
              </div>
            </a>
            @endforeach
              <a href="#" class="our_cat_section_box view_all_box">
                <div class="our_cat_section_link">
                  <!-- <img src="images/Service_icons/menu.png" alt="icons"> -->
                  <h5>View<br>All</h5>
                </div>
              </a>
        </div>
    </div>

</div> 


<div class="product_category_section bg_grey">
    <div class="container-fluid">
        <div class="our_cat_section_heading">
            <div class="center_title">
              <h2 class="heading_styling">Product <span class="highlight_title">Cat</span>egory</h2>
              <p>We are the bridge that connects buyers and sellers in one place.</p>
            </div>
            <!-- <div class="right_side">
              <button class="button_view_all">View All</button>
            </div> -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="our_cat_section_section">
          @foreach($products as $product)
            <a href="#" class="our_cat_section_box">
              <div class="our_cat_section_link">
                <h5>{{ $product->name }}</h5>
                <h6>09 Ads</h6>
                <img src="{{ asset('uploads/category/'.$product->thumbnail) }}" alt="icons">
              </div>
            </a>
           @endforeach
              <a href="#" class="our_cat_section_box view_all_box">
                <div class="our_cat_section_link">
                  <!-- <img src="images/Service_icons/hotel.png" alt="icons"> -->
                  <h5>View<br>All</h5>
                </div>
              </a>
            
    
        </div>
    </div>

</div> 
<div class="Trending_services bg_white">
    <div class="product_category_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="center_title">
                  <h2 class="heading_styling">Trending <span class="highlight_title">Ser</span>vices</h2>
                  <p>Find services at your fingertips.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
      <div class="container-fluid row mx-auto">
        <div class="category_detail_section col">
            <div class="left_side col">
                <div class="row">
                    <div class="col category_banner_section">
        <div class="category_banner">
          <div class="banner_content">
                            <h2>Electronics & Electrical Goods & Supplies</h2>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>
                </div>
            </div>
        </div>
        <div class="category_detail_section col">
            <div class="left_side col">
                <div class="row">
                    <div class="col category_banner_section">
        <div class="category_banner">
          <div class="banner_content">
                            <h2>Electronics & Electrical Goods & Supplies</h2>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile Start -->
    <div class="container-fluid">
        <div class="mobile_product_service_box row">
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        </div>
        <!-- <div class="mobile_product_service_box row">
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
            </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
            </div>
          </div>
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
        </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
            </div>
            </div>
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
          </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
        </div> 
      </div>
    </div> -->
    </div>
    <!-- mobile end -->
  </div>
    <div class="Trending_services bg_grey">
    <div class="product_category_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                  <div class="center_title">
                    <h2 class="heading_styling">Trending <span class="highlight_title">Pro</span>ducts</h2>
                  <p>Business marketplace for you.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
      <div class="container-fluid row mx-auto">
        <div class="category_detail_section col">
            <div class="left_side col">
                <div class="row">
                    <div class="col category_banner_section">
        <div class="category_banner">
          <div class="banner_content">
                            <h2>Electronics & Electrical Goods & Supplies</h2>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg')}}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>
                </div>
            </div>
        </div>
        <div class="category_detail_section col">
            <div class="left_side col">
                <div class="row">
                    <div class="col category_banner_section">
        <div class="category_banner">
          <div class="banner_content">
                            <h2>Electronics & Electrical Goods & Supplies</h2>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
                    </div>
                    <div class="col px-0">
        <div class="sub_category_columns">
                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Office Automation Products</a></h2>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
                                <div class="product_meta col-7">
                                    <h2>
                                        <a href="#">Control & Automation</a>
                                    </h2>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

                            <div class="sub_category_set row">
                                <div class="product_thumbnail col-5"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}">
                                </div>
                                <div class="product_meta col-7"><h2><a href="#">Commercial Lights</a></h2>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile Start -->
    <div class="container-fluid">
        <div class="mobile_product_service_box row">
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
            <div class="mobile_product_service_box_column col">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        </div>
        <!-- <div class="mobile_product_service_box row">
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
            </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
            </div>
          </div>
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
        </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
            <div class="mobile_product_service_box_column col">
              <div class="mobile_product_service_box_image">
                <img src="images/photocopier-machine-125x125.jpg">
          </div>
              <div class="mobile_product_service_category">
                <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
                <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
                <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
        </div> 
      </div>
    </div> -->
    </div>
    <!-- mobile end -->
  </div>
  <div class="search_by_cities bg_white">
      <div class="product_category_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="center_title">
                  <h2 class="heading_styling">Search <span class="highlight_title">by</span>Cities</h2>
                  <p>Search and explore any city. One-stop solution.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
  
    
    <div class="container-fluid search_by_cities_flex">
      @foreach($cities as $city)
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('uploads/city/'.$city->image) }}" class="city_image">
          <div class="city_name">{{ $city->city}}</div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  <footer>
    <div class="footer container-fluid">
      <div class="footer_Popular_cat_meta">
        <h2>Popular Categories</h2>
        <p>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
          <a href="#" class="footer_popular_cat_item">Body Massage Centres</a>
        </p>
      </div>
      <div class="footer_social">
        <div class="footer_logo"><a href="#"><img src="{{ asset('customer-images/BO_logo.png') }}"></a></div>
        <div class="social_icon">
          <ul>
            <li>
              <a href="#" target="_blank"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
              </li>
              <li>
              <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
              </li>
              <li>
              <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
              <li>
              <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </li>
          </ul>
        </div>
      </div>
      <div class="footer_about_company">
          <p>
            Welcome to Odisha Business, your one-stop solution where you are assisted with day-to-day exclusive planning, purchasing, and other activities. We are proud to say we own the stronghold in business information pan India. </p>

          <p>We have an extensive database and user-friendly interface, we aim to simplify your search process and connect you with the information you need. Whether you're seeking restaurants, hotels, doctors, order food, grocery, events, local business, or cities, our web directory provides comprehensive listings with essential details like contact information, addresses, ratings, and reviews. </p>

          <!-- <p>Our 'Free Listing' feature gives a platform to showcase varied specialities. We then furnish you with the information via phone, SMS, web, App and WAP as well as, create a space for you to share your experiences through our 'Rate & Review' feature. Through the 'Best Deals', 'Last Minute Deals' and 'Live Quotes', we make sure that you are offered the best bargains in the market.
          </p> -->
      </div>

      <div class="footer_top">
        <div class="row">
          <div class="col">
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">About us</h2>
              <ul>
                <li>
                  <a href="#">Our product</a>
                </li>
                <li>
                  <a href="#">Documentation</a>
                </li>
                <li>
                  <a href="#">Our Services</a>
                </li>
                <li>
                  <a href="#">Get Started Us</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">About us</h2>
              <ul>
                <li>
                  <a href="#">Our product</a>
                </li>
                <li>
                  <a href="#">Documentation</a>
                </li>
                <li>
                  <a href="#">Our Services</a>
                </li>
                <li>
                  <a href="#">Get Started Us</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">About us</h2>
              <ul>
                <li>
                  <a href="#">Our product</a>
                </li>
                <li>
                  <a href="#">Documentation</a>
                </li>
                <li>
                  <a href="#">Our Services</a>
                </li>
                <li>
                  <a href="#">Get Started Us</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">

            <div class="footer-widget footer-menu">
            <h2 class="footer-title">Quick links</h2>
            <ul>
            <li>
            <a href="#">Market Place</a>
            </li>
            <li>
            <a href="#">Documentation</a>
            </li>
            <li>
            <a href="#">Customers</a>
            </li>
            <li>
            <a href="#">Carriers</a>
            </li>
            <li>
            <a href="#">Our Blog</a>
            </li>
            </ul>
            </div>
            
          </div>
          <div class="col">

            <div class="footer-widget footer-menu">
            <h2 class="footer-title">Top Cities</h2>
            <ul>
            <li>
            <a href="#">Manhatten</a>
            </li>
            <li>
            <a href="#">Los Angeles</a>
            </li>
            <li>
            <a href="#">Houston</a>
            </li>
            <li>
            <a href="#">Chicago</a>
            </li>
            <li>
            <a href="#">Alabama</a>
            </li>
            </ul>
            </div>
            
          </div>

          <div class="col">

            <div class="footer-widget">
            <h2 class="footer-title">Communication</h2>
            <div class="footer-contact-info">
            <div class="footer-address">
            <img src="{{ asset('customer-images/call-calling yellow (1).svg') }}" alt="Callus">
            <p><span>Call Us</span> <br> +017 123 456 78 </p>
            </div>
            <div class="footer-address">
            <img src="{{ asset('customer-images/sms-tracking yellow (1).svg') }}" alt="Callus">
            <p><span>Send Message</span> <br> listee@example.com </p>
            </div>
            </div>
            </div>
            
          </div>
        </div>
      </div>
      


    </div>
    <div class="footer-bottom">
      <div class="copyright">
        <div class="row">
        <div class="col-md-6">
        <div class="copyright-text">
        <p class="mb-0">All Copyrights Reserved © 2023 - Business Odisha.</p>
        </div>
        </div>
        <div class="col-md-6">
        
        <div class="copyright-menu">
        <ul class="policy-menu">
        <li>
        <a href="#">Privacy </a>
        </li>
        <li>
        <a href="#">Faq </a>
        </li>
        <li>
        <a href="#">Terms</a>
        </li>
        </ul>
        </div>
        
        </div>
        </div>
        </div>
    </div>
  </footer>
</body>
</html>
