<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> -->
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
        <div class="left_side site_logo"><a href="#"><img src="{{ asset('customer-images/BO_logo.png')}}"></a></div>
        <div class="right_side">
            <ul class="header_link">
                <!-- <li><a href="#">People Search</a></li> -->
                <li><a href="#">Advertise with us</a></li>
                <li><a href="#">Free Listing</a></li>
                <!-- <li><span class="dot"></span></li> -->
                @if(Auth::check())
                  <li>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name}} 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="{{url('/logout')}}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                      
                    </div>
                  </div>
                  
                    
                    
                
                    <!-- <button type="button" class="btn btn-link" data-toggle="modal" data-target="#logoutModal">
                      Logout
                  </button> -->
                  

                  </li>
                @else
                  <li><a href="#">Login / SIgnup</a></li>
                @endif
                <!-- <li><a href="#">FR</a></li> -->
            </ul>
        </div>
        </div>
    </div>
</header>
<div class="cover_image_section">
    <div class="container">
        <div class="header_container">
            <div class="header_container_content">
                <div class="home_greeting">
                    Live. Shop. Taste.
                    <span class="authFirstname">Discover</span>
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
        <img src="{{ asset('customer-images/final_svg_cover-01.svg') }}">
    </div>
</div>
<div class="service_category_section bg_white">
    <div class="container-fluid">
        <div class="our_cat_section_heading">
            <div class="left_side">
              <h2 class="heading_styling">Service <span class="title_left">Cat</span>egory</h2>
              <p>Buy and Sell Everything from Used Our Top Category</p>
            </div>
            <!-- <div class="right_side">
              <button class="button_view_all">View All</button>
            </div> -->
          </div>
    </div>
    <div class="container-fluid">
        <div class="our_cat_section_section">
            <a href="#" class="our_cat_section_box">
              <div class="our_cat_section_link">
                <h5>Hotels</h5>
                <h6>09 Ads</h6>
                <img src="{{ asset('customer-images/Service_icons/hotel.png') }}" alt="icons">
              </div>
            </a>
            <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Restaurants</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/tableware.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Home Decor</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/home-decor.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Automobile</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/electric-car.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Rent & Hire</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/hotel.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Education</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/key.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Contractors</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/works.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Hospitals</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/hospital.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>PG/Hostels</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/bunk-bed.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Pet Shops</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/pet-shop.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Dentists</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/dental-care.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Estate Agent</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/agent.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Consultants</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/discussion.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>GYM</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/gym.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Driving Schools</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/car.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Event Organisers</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/garland.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Courier Service</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/delivery-man.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Packers & Movers</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/delivery-box-(2).png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Travel</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Service_icons/plane.png') }}" alt="icons">
                </div>
              </a>
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
              <p>Buy and Sell Everything from Used Our Top Category</p>
            </div>
            <!-- <div class="right_side">
              <button class="button_view_all">View All</button>
            </div> -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="our_cat_section_section">
            <a href="#" class="our_cat_section_box">
              <div class="our_cat_section_link">
                <h5>Drugs & Pharmaceutical</h5>
                <h6>09 Ads</h6>
                <img src="{{ asset('customer-images/Product_category_icon/pill.png') }}" alt="icons">
              </div>
            </a>
            <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Hospital & Diagnostics</h5>
                  <h6>09 Ads</h6>
                  <img src="{{ asset('customer-images/Product_category_icon/medical-report.png') }}" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Food &<br>Beverages</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/food.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Industrial Plants & Machinery</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/stamping.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Industrial<br>Supplies</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/factory.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Building & Construction</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/helmet.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Apparel & Garments</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/wardrobe.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Electronics & Electrical</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/fuse-box.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Packaging Machines & Goods</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/manufacturing.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Chemicals, Dyes & Solvents</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/chemical-substances.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Mechanical Parts & Spares</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/timing-belt.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Lab Instruments & Supplies</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/search.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Furniture & Supplies</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/furniture.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Automobile, Parts & Spares</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/piston.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Agriculture & Farming</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/harvest.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Housewares & Supplies</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/cleaning.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Hand & Machine Tools</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/hand-drill.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Handicrafts & Decoratives</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/knitting.png" alt="icons">
                </div>
              </a>
              <a href="#" class="our_cat_section_box">
                <div class="our_cat_section_link">
                  <h5>Kitchen Utensils & Appliances</h5>
                  <h6>09 Ads</h6>
                  <img src="images/Product_category_icon/kitchen-utensil.png" alt="icons">
                </div>
              </a>
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
                  <p>Buy and Sell Everything from Used Our Top Category</p>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
  </div>
  <div class="Trending_products bg_grey">
    <div class="product_category_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="left_side">
                  <h2 class="heading_styling">Trending <span class="title_left">Pro</span>ducts</h2>
                  <p>Buy and Sell Everything from Used Our Top Category</p>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
          <div class="product_thumbnail"><img src="images/photocopier-machine-125x125.jpg"></div>
          <div class="product_meta"><h3><a href="#">Office Automation Products</a></h3>
            <ul>
              <li><a href="#">Multifunction Printer</a></li>
              <li><a href="#">Xerox Machines</a></li>
              <li><a href="#">Fingerprint Scanners</a></li>
            </ul>
          </div>
          </div>

          <div class="sub_category_set">
            <div class="product_thumbnail"><img src="images/lighting-controllers1-125x125.jpg"></div>
            <div class="product_meta"><h3><a href="#">Control & Automation</a></h3>
              <ul>
                <li><a href="#">VFD</a></li>
                <li><a href="#">PLC</a></li>
                <li><a href="#">HMI</a></li>
              </ul>
            </div>
            </div>

            <div class="sub_category_set">
              <div class="product_thumbnail"><img src="images/street-light-125x125.jpg"></div>
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
  </div>

  <div class="search_by_cities bg_white">
    <div class="search_by_cities_section">
        <div class="container-fluid">
            <div class="our_cat_section_heading">
                <div class="left_side">
                  <h2 class="heading_styling">Search <span class="title_left">by</span>Cities</h2>
                  <p>Buy and Sell Everything from Used Our Top Category</p>
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
          <img src="images/city/bhubneswar.webp" class="city_image">
          <div class="city_name">Bhubaneswar</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/puri.webp" class="city_image">
          <div class="city_name">Puri</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/cuttack.webp" class="city_image">
          <div class="city_name">Cuttack</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/angul.webp" class="city_image">
          <div class="city_name">Angul</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/berhampur.webp" class="city_image">
          <div class="city_name">Berhampur</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/rourkela.webp" class="city_image">
          <div class="city_name">Rourkela</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/jajpur.webp" class="city_image">
          <div class="city_name">Jajpur</div>
        </a>
      </div>
      <div class="search_by_cities_section_area">
        <a href="#" class="search_by_cities_box">
          <img src="images/city/keonjhar.webp" class="city_image">
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
        <div class="footer_logo"><a href="#"><img src="images/BO_logo.png"></a></div>
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
          Welcome to Justdial, your 'one stop shop' where you are assisted with day-to-day and exclusive planning and purchasing activities. We take pride in our iconic customer support number, 8888888888 and the fact that we own a strong hold on local business information pan India.</p>

          <p>Our service extends from providing address and contact details of business establishments around the country, to making orders and reservations for leisure, medical, financial, travel and domestic purposes. We enlist business information across varied sectors like Hotels, Restaurants, Auto Care, Home Decor, Personal and Pet Care, Fitness, Insurance, Real Estate, Sports, Schools, etc. from all over the country. Holding information right from major cities like Mumbai, Delhi, Bangalore, Hyderabad, Chennai, Ahmedabad and Pune our reach stretches out to other smaller cities across the country too.</p>

          <p>Our 'Free Listing' feature gives a platform to showcase varied specialities. We then furnish you with the information via phone, SMS, web, App and WAP as well as, create a space for you to share your experiences through our 'Rate & Review' feature. Through the 'Best Deals', 'Last Minute Deals' and 'Live Quotes', we make sure that you are offered the best bargains in the market.
          </p>
      </div>

      <div class="footer_top">
        <div class="row">
          <div class="col-lg-2 col-md-6">
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
          <div class="col-lg-2 col-md-6">
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
          <div class="col-lg-2 col-md-6">
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
          <div class="col-lg-2 col-md-6">

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
          <div class="col-lg-2 col-md-6">

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

          <div class="col-lg-2 col-md-6">

            <div class="footer-widget">
            <h2 class="footer-title">Communication</h2>
            <div class="footer-contact-info">
            <div class="footer-address">
            <img src="images/call-calling yellow (1).svg" alt="Callus">
            <p><span>Call Us</span> <br> +017 123 456 78 </p>
            </div>
            <div class="footer-address">
            <img src="images/sms-tracking yellow (1).svg" alt="Callus">
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
        <p class="mb-0">All Copyrights Reserved © 2023 - Listee.</p>
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

  <div class="container">
    <h2>Frequently Asked Questions</h2>
    <div class="accordion">
      <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false">
          <span class="accordion-title">Why is the moon sometimes out during the day?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-2" aria-expanded="false">
          <span class="accordion-title">Why is the sky blue?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-3" aria-expanded="false">
          <span class="accordion-title">Will we ever discover aliens?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-4" aria-expanded="false">
          <span class="accordion-title">How much does the Earth weigh?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false">
          <span class="accordion-title">How do airplanes stay up?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
    </div>
  </div>
<script>
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




</script>

</body>
</html>