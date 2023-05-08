
@include('layouts.admin_layout.head-main')

<head>

    <title> | Dason - Admin & Dashboard Template</title>

    @include('layouts.admin_layout.head')

    <!-- select2 css -->
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/ecommerce-shop.init.js') }}"></script>
    
    @include('layouts.admin_layout.head-style')

<style>
    .textarea-container {
  margin-left: 20px;
}
.select2-container{
    width: 100% !important;
}
</style>
</head>
<body data-topbar="dark">
<!-- Begin page -->
<div id="layout-wrapper">

@include('layouts.admin_layout.menu')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Ecommerce";
                $title = "Add Product/Service";
                ?>
                @include('layouts.admin_layout.breadcrumb')
                <!-- end page title -->

                <form action="{{ url('update-service/'.$servicedata->id) }}" id="userform" name="userform" method="POST" enctype="multipart/form-data" autocomplete="off" class="row g-3">
                                @csrf
                                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product/Service Information</h4>
                                <!-- <p class="card-title-desc">Fill all information below</p> -->
                            </div>
                            <div class="card-body">
                               
                                
                                <div class="row mt-2">
                                        <div class="col-md-4">
                                            <!-- <div class="mb-3"> -->
                                                <label class="control-label">Select type</label>
                                                <select class="form-control select2" id="drp-down" name="type">
                                                    
                                                    
                                                    <option value="service" selected>Service</option>
                                                </select>
                                            <!-- </div> -->
                                        </div>
                                        <div class="col-md-8">
                                            <label class="control-label">Select Seller Name</label><br>
                                            <select class="form-control select2" id="seller-name" name="seller_name">
                                                    <option >Select seller name</option>
                                                    @foreach($sellernames as $sellername)
                                                    <option value="{{ $sellername->id }}" @if($sellername->id == $servicedata->seller_name) selected @endif>{{ $sellername->name }}</option>
                                                    @endforeach
                                                    
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                   
                                                                            
                                    <div  id="form-service"  class="service-info">
                                        
                                           <div class="row mt-2">
                                                <div class="col-md-6 col-6" >
                                                    <div class="mb-3">
                                                        <label class="control-label">Select Category</label><br>
                                                        <select class="form-control select2" id="category_id" name="category_id">
                                                        <option >Select category</option>
                                                        @foreach($categories as $category)
                                                                    <option value="{{ $category->id}}" @if($category->id ==$servicedata->category_id ) selected @endif>{{ $category->name}}</option>
                                                                    @endforeach
                                                                    <!-- @foreach($categories as $category)
                                                                    <option value="{{ $category->id}}" @if($category->id ==$servicedata->category_id ) selected @endif>{{ $category->name}}</option>
                                                                    @endforeach -->
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 col-6">
                                                        <label for="address">Address</label>
                                                        <input id="address" name="address" type="text" class="form-control" value="{{ $servicedata->address }}">
                                                </div>
                                                
                                           </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6 col-6">
                                                        <label for="phone">Phone no</label>
                                                        <div class="input-group">
                                                            <input id="phone" value="{{ $servicedata->phone }}" name="phone" type="text" class="form-control"  onkeyup="this.value=this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <input type="checkbox" name="is_whatsapp" id="whatsapp-checkbox" value="1" @if($servicedata->is_whatsapp == 1) checked @endif>
                                                                    <label class="form-check-label" for="whatsapp-checkbox">Whatsapp</label>
                                                                </span>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <label for="price">Price</label>
                                                    <input id="price" name="price" value="{{ $servicedata->price }}" type="text" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6 col-6">
                                                    <label for="unit">Unit</label>
                                                    <input id="unit" name="unit" type="text" class="form-control" value="{{ $servicedata->unit }}">
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <label for="features">Features</label>
                                                    <input id="features" name="features" type="text" class="form-control" value="{{ $servicedata->features }}">
                                                </div>
                                                
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 col-md-6">
                                                    <label for="payment_mode">Mode of payment</label>
                                                    <input id="payment_mode" name="payment_mode" type="text" class="form-control" value="{{ $servicedata->payment_mode }}">
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <label for="service_highlight">Service Highlights</label>
                                                    <input id="service_highlight" name="service_highlight" type="text" class="form-control" value="{{ $servicedata->service_highlight }}">
                                                    
                                                </div>
                                              
                                                
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 col-md-6 mt-3 mt-md-0">
                                                        <div class="form-group">
                                                            <label for="password">Availability</label>
                                                            <div class="d-flex p-1 align-items-center">
                                                            <label for="from" class="mr-2">From</label>
                                                            <input type="date" name="from_date" id="from" value="{{ $servicedata->from_date }}" class="form-control mr-2">
                                                            <label for="to" class="mr-2">To</label>
                                                            <input type="date" name="to_date" id="to" class="form-control" value="{{ $servicedata->to_date }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="">Q & A</label>
                                                    <div class="container my-3">
                                                        <div id="text-box-container">
                                                            @php 
                                                             $qa_arr = explode(',',$servicedata->question);
                                                             $ans_arr = explode(',',$servicedata->answer);
                                                             
                                                            @endphp
                                                        @foreach ($qa_arr as $index => $qa)
                                                       
                                                            <div class="text-box mb-3">
                                                                <div class="input-group">
                                                                    <input type="text" name="question[]" class="form-control textbox" value="{{ $qa }}" placeholder="Enter question">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary add-more-textbox" type="button">Add answer</button>
                                                                        <button class="btn btn-outline-secondary remove-textbox" type="button"><span><i class="fa fa-minus" style="font-size:13px;color:red"></i></span></button>
                                                                    </div>
                                                                </div>
                                                                <div class="textarea-container">
                                                                    <textarea name="answer[]" class="form-control mb-2" placeholder="Enter answer">{{ $ans_arr[$index] }}</textarea>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            
                                                        </div>
                                                        <button id="add-more-box" class="btn btn-primary" type="button">Add More Question</button>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-12 col-md-6">
                                                    <label for="">Q & A</label>
                                                    <div class="container my-3">
                                                        <div id="text-box-container">
                                                            <div class="text-box mb-3">
                                                                <div class="input-group">
                                                                    <input type="text" name="question[]" class="form-control textbox" placeholder="Enter question 1">
                                                                    <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary add-more-textbox" type="button">Add answer</button>
                                                                    <button class="btn btn-outline-secondary remove-textbox" type="button" style="display: none;"><span><i class="fa fa-minus" style="font-size:13px;color:red"></i></span></button>
                                                                    </div>
                                                                </div>
                                                                <div class="textarea-container"></div>
                                                            </div>
                                                        </div>
                                                        <button id="add-more-box" class="btn btn-primary" type="button">Add More Question</button>
                                                    </div>
                                                </div> -->
                                                
                                            </div>
                                               
                                                <div class="button-container">
                                                    <button type="submit" id="create-service" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                                </div>
                                           
                                       
                                    </div>

                                 
                                   



                                       
                                               
                                  
                                        </div> 
                                   
                                </div>
                            </div>
                            <!-- end of row -->
                            
                           
                            
                           
</form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Page-content -->

        @include('layouts.admin_layout.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('layouts.admin_layout.right-sidebar') 
@include('layouts.admin_layout.vendor-scripts')

<!-- select 2 plugin -->
<script src="{{ asset('libs/select2/js/select2.min.js')}}"></script>

<!-- dropzone plugin -->
<script src="{{ asset('libs/dropzone/min/dropzone.min.js')}}"></script>

<!-- init js -->
<script src="{{ asset('js/pages/ecommerce-select2.init.js') }}"></script>


<!--tinymce js-->
<script src="{{ asset('libs/tinymce/tinymce.min.js') }}"></script>
<script src=" {{ asset('js/pages/task-create.init.js') }}"></script>
</body>

</html>