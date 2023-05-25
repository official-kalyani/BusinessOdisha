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
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kaushan+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    

    <link rel="stylesheet" href="{{ asset('css/style_3.css') }}">
</head>
<body>
<header class="main_header">
    <div class="container">
        <div class="header_flex">
        <div class="left_side site_logo"><a href="#"><img src="{{ asset('customer-images/Logo_white.png') }}"></a></div>
        <div class="right_side">
            <ul class="header_link">
                <!-- <li><a href="#">People Search</a></li> -->
                <li><a href="#">Advertise with us</a></li>
                <li><a href="#">Free Listing</a></li>
               
                @if($customerName)
                <li>
                {{ $customerName }} <i class="fa fa-user" aria-hidden="true"></i>
               
                <!-- <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ $customerName }} 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item" href="{{url('/logout')}}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                    
                  </div>
                </div> -->
                
                </li>
                <li> <a  href="{{url('/logout')}}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a></li>
              @else
                <li><a href="#">Login / Signup</a></li>
              @endif
            </ul>
        </div>

        <!-- mobile header sidebar -->
        <div class="right_side_mobile">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Advertise with us</a>
            <a href="#">Free Listing</a>
            <a href="#">Login / SIgnup</a>
          </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        </div>
        </div>
    </div>
</header>
<div class="cover_image_section">
    <div class="container">
        <div class="header_container">
            <div class="header_container_content">
                <div class="home_greeting">
                    Discover & connect.
                    <span class="authFirstname">Your own web directory.</span>
                </div>   
            </div>
            <div class="form_div">
                <div class="catogory_search">
                    <input type="text" class="form-control form-control" placeholder="What?(e.g. Plumber)">
                </div>
                <div class="location_search">
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
            <div class="left_side">
              <h2 class="heading_styling">Service <span class="title_left">Cat</span>egory</h2>
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
            <a href="#" class="our_cat_section_box">
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
            <div class="left_side">
              <h2 class="heading_styling">Product <span class="title_left">Cat</span>egory</h2>
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
                <div class="left_side">
                  <h2 class="heading_styling">Trending <span class="title_left">Ser</span>vices</h2>
                  <p>Find services at your fingertips.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="category_detail_section container-fluid">
      <div class="left_side">
        <div class="category_banner">
          <div class="banner_content">
            <h3>Electronics & Electrical Goods & Supplies</h3>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>

      <div class="left_side">
        <div class="category_banner">
          <div class="banner_content">
            <h3>Electronics & Electrical Goods & Supplies</h3>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
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
    <!-- mobile Start -->
    <div class="container-fluid">
      <div class="mobile_product_service_box">
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
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
      <!-- <div class="service_or_product_cat_mobile">
      <div class="category_heading">
      <div class="left_side">
          <h2>Electronics & Electrical Goods & Supplies</h2>
      </div>
      <div class="right_side">
          <button class="button_view_all">View All</button>
      </div>
      </div>
      
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div> 
      </div>
    </div> -->
    </div>
    <!-- mobile end -->
  </div>
  <div class="Trending_products bg_grey">
    <div class="product_category_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="left_side">
                  <h2 class="heading_styling">Trending <span class="title_left">Pro</span>ducts</h2>
                  <p>Business marketplace for you.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="category_detail_section container-fluid">
      <div class="left_side">
        <div class="category_banner">
          <div class="banner_content">
            <h3>Electronics & Electrical Goods & Supplies</h3>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
          </div>
      </div>

      <div class="left_side">
        <div class="category_banner">
          <div class="banner_content">
            <h3>Electronics & Electrical Goods & Supplies</h3>
            <ul>
              <li><a href="#">Voltage & Power Stabilizers</a></li>
              <li><a href="#">GPS and Navigation Devices</a></li>
              <li><a href="#">Biometrics & Access Control Devices</a></li>
              <li><a href="#">CCTV, Surveillance Systems and Parts</a></li>
            </ul>
            <a href="#" class="view_all_cat_btn">View All</a>
          </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
                <ul>
                  <li><a href="#">Flood Lights</a></li>
                  <li><a href="#">Street Lights</a></li>
                  <li><a href="#">Panel Light</a></li>
                </ul>
              </div>
              </div>
        </div>
        <div class="sub_category_columns">
          <div class="sub_category_set">
          <div class="product_thumbnail"><img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="{{ asset('customer-images/lighting-controllers1-125x125.jpg') }}"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="{{ asset('customer-images/street-light-125x125.jpg') }}"></div>
              <div class="product_meta"><h3><a href="#">Commercial Lights</a></h3>
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
    <!-- mobile Start -->
    <div class="container-fluid">
      <div class="mobile_product_service_box">
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
          <div class="mobile_product_service_box_image">
            <img src="{{ asset('customer-images/photocopier-machine-125x125.jpg') }}">
          </div>
          <div class="mobile_product_service_category">
            <a href="#" class="mobile_product_service_category_items">Multifunction Printer</a>
            <a href="#" class="mobile_product_service_category_items">Xerox Machines</a>
            <a href="#" class="mobile_product_service_category_items">Fingerprint Scanners</a>
          </div>
        </div>
        <div class="mobile_product_service_box_column">
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
      <!-- <div class="service_or_product_cat_mobile">
      <div class="category_heading">
      <div class="left_side">
          <h2>Electronics & Electrical Goods & Supplies</h2>
      </div>
      <div class="right_side">
          <button class="button_view_all">View All</button>
      </div>
      </div>
      
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Office Automation Products</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <div class="left_side">
              <a href="#" class="mobile_category_image"><img src="images/photocopier-machine-125x125.jpg"></a>
            </div>
            <div class="right_side">
            <a href="#" class="mobile_category_item">Multifunction Printer</a>
            <a href="#" class="mobile_category_item">Xerox Machines</a>
            <a href="#" class="mobile_category_item">Fingerprint Scanners</a>
            </div>
          </div>
        </div> 
      </div>
    </div> -->
    </div>
    <!-- mobile end -->
  </div>

  <div class="search_by_cities bg_white">
    <div class="search_by_cities_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="left_side">
                  <h2 class="heading_styling">Search <span class="title_left">by</span>Cities</h2>
                  <p>Search and explore any city. One-stop solution.</p>
                </div>
                <!-- <div class="right_side">
                  <button class="button_view_all">View All</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid search_by_cities_flex">
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/bhubneswar.webp') }}" class="city_image">
          <div class="city_name">Bhubaneswar</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/puri.webp') }}" class="city_image">
          <div class="city_name">Puri</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/cuttack.webp') }}" class="city_image">
          <div class="city_name">Cuttack</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/angul.webp') }}" class="city_image">
          <div class="city_name">Angul</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/berhampur.webp') }}" class="city_image">
          <div class="city_name">Berhampur</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/rourkela.webp') }}" class="city_image">
          <div class="city_name">Rourkela</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/jajpur.webp') }}" class="city_image">
          <div class="city_name">Jajpur</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="{{ asset('customer-images/city/keonjhar.webp') }}" class="city_image">
          <div class="city_name">Keonjhar</div>
        </a>
      </div>
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
  
<!-- <script>
  const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

</script> -->

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>

</body>
</html>