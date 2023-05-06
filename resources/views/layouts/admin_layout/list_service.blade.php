@include('layouts.admin_layout.head-main')

<head>

    <title> | Dason - Admin & Dashboard Template</title>

    @include('layouts.admin_layout.head')

    @include('layouts.admin_layout.head-style')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    
</head>


<!-- Begin page -->
<body data-topbar="dark">
<div id="layout-wrapper">

@include('layouts.admin_layout.menu')

    
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Ecommerce";
                $title = "Service List";
                ?>
                @include('layouts.admin_layout.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <span id="status" class="alert alert-success"></span>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                            <form action="" method="POST">
                                                @csrf
                                                <input type="text" class="form-control" placeholder="Search..." id="search">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                       
                                        <a href="{{ url('/add-product-service') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Add </a>
                                            
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                               
                                                <th class="align-middle">ID</th>
                                                <th class="align-middle">Name</th>
                                                <th class="align-middle">Address</th>
                                                <th class="align-middle">Phone</th>
                                                <th class="align-middle">Payment_mode</th>
                                                
                                                <th class="align-middle">Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($count > 0)
                                        @foreach ($services as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>
                                                    @php 
                                                    $service_name =  $data->user->name??'';
                                                    @endphp
                                                    {{ $service_name}}</td>
                                                <td>{{ $data->address}}</td>
                                                <td>{{ $data->phone}}</td>
                                                <td>{{ $data->payment_mode}}</td>
                                              
                                               
                                               
                                                
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="{{ url('service-edit/'.$data->id) }}" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <!-- <a href="{{ url('service-edit/'.$data->id) }}" class="text-success">Approve</a> -->

                                                        <input  data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approve" data-off="Reject" {{ $data->status ? 'checked' : '' }} >
                
                                                        <form action="{{ url('service-delete/'.$data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                            @else                                            
                                            <tr>
                                               <td colspan="6" style="
                                                text-align: center;">No record found</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $services->links() }}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->




            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.admin_layout.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('layouts.admin_layout.right-sidebar') 
@include('layouts.admin_layout.vendor-scripts')
<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>
<script>
$('#search').on('keyup', function(){
    search();
});
</script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var service_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ url("servicestschange") }}',
            data: {'status': status, 'service_id': service_id},
            success: function(data){

                setTimeout(function() {
                $('#status').hide();
                }, 1000);
                if (data.success) {
                    $('#status').show();
                    $('#status').html(data.success);
                }
             

            }
        });
    })
  })
</script>
</body>

</html>