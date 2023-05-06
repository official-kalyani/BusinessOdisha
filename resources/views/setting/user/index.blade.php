@include('layouts.admin_layout.head-main')

<head>

    <title> | Dason - Admin & Dashboard Template</title>

    @include('layouts.admin_layout.head')

    @include('layouts.admin_layout.head-style')

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
                $title = "User List";
                ?>
                @include('layouts.admin_layout.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                    @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                              <p>{{ $message }}</p>
                          </div>
                      @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                       
                                        <a href="{{ route('users.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Add </a>
                                            
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                               
                                                <th class="align-middle">User Name</th>
                                                <th class="align-middle">Role</th>
                                               
                                                
                                                <th class="align-middle">Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach ($users as $user)
                                            <tr>
                                                
                                                <td>{{ $user->name}}</td>
                                                <td class="py-4 px-6 border-b border-grey-light">
                                                 
                                                  @foreach($user->roles as $role)
                                                 
                                                    <span class="badge bg-dark mx-auto">
                                                      {{ $role->name }}</span>
                                                  @endforeach
                                               </td>
                                                
                                                <td>
                                                    <div class="d-flex gap-3">

                                                        <a href="{{ route('users.edit',$user->id) }}" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                        
                                    


                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                    {!! $users->render() !!}
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

</body>

</html>