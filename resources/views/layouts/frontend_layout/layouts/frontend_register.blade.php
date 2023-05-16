<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js">
    </script>
    <!-- <script type="text/javascript" src="https://use.fontawesome.com/b9bdbd120a.js"></script> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->

    <title>Seller Registration</title>
    <style>
    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    @media (min-width: 1025px) {
        .h-custom-2 {
            height: 80%;
        }
    }

    form {
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    .logo-div {
        text-align: left;
    }

    .pwd_input {
        border-radius: 0 0.25rem 0.25rem 0;
        padding: 0.75rem 0.75rem;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="d-flex align-items-center h-custom-2 px-5 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <form action="{{ url('/save-frontend-seller') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="fw-normal mb-3 pb-3 logo-div">
                                <i class="fas fa-shopping-bag fa-2x " style="color: #709085;"></i>
                                <!-- <span class="h1 fw-bold mb-0">Logo</span> -->
                            </div>

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>



                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="company_name">Company Name</label>
                                        <input type="text" id="company_name" class="form-control" name="company_name" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="seller_name">Name of Seller</label>

                                        <input type="text" id="seller_name" class="form-control" name="seller_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline" style="position: relative;">
                                        <label class="form-label" for="phone">Phone No.</label>
                                        <input type="tel" id="phone" class="form-control" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10" />
                                        <span id="error_mobile" style="position: absolute;top: 39px;left: 225px;"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline" style="position: relative;">
                                        <label class="form-label" for="email">Email</label>

                                        <input type="email" id="email" class="form-control" name="email" />
                                        <span id="error_email" style="position: absolute;top: 39px;left: 225px;"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="year_drp_down">Year of Establishment</label>
                                        <input type="date" id="year_drp_down" class="form-control"
                                            name="year_drp_down" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="gst_no">GST</label>

                                        <input type="text" id="gst_no" class="form-control" name="gst_no" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="image">Add Logo</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="pan_no">Pan Number</label>

                                        <input type="text" id="pan_no" class="form-control" name="pan_no" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="image">Password</label>
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="pan_no">Confirm password</label>

                                        <input type="password" id="cpassword" class="form-control" name="cpassword" />
                                    </div>
                                </div>
                                <span class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
                                </span>
                            </div>
                            <div class="pt-1 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" id="create">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('frontend/img/beautiful-young-family-with-child-compress.png') }}"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: center;">
                </div>


            </div>
        </div>
    </section>
    <script>
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function() {
        $("#cpassword").keyup(checkPasswordMatch);
    });
    </script>
    <script>
  $(document).ready(function(){
    $('#email').blur(function() {
        var error_email = '';
        var email = $('#email').val();
        var _token = $('input[name="_token"]').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email)) {
          $('#error_email').html('<i class="fas fa-times-circle text-danger"></i>');
          $('#email').addClass('has-error');
          $('#create').attr('disabled', 'disabled');
        } else {
          $.ajax({
            url: "{{ url('seller_email_available_check') }}",
            method: "POST",
            data: { email: email, _token: _token },
            success: function(result) {
              if (result.registered == 'failed') {
                $('#error_email').html('<i class="fas fa-check-circle text-success"></i>');
                $('#email').removeClass('has-error');
                $('#create').attr('disabled', false);
              } else {
                $('#error_email').html('<i class="fas fa-times-circle text-danger"></i>');
                $('#email').addClass('has-error');
                $('#create').attr('disabled', 'disabled');
              }
            }
          });
        }
    });
    $('#phone').blur(function() {
      
        var error_mobile = '';
        var mobile = $('#phone').val();
        var _token = $('input[name="_token"]').val();
        // var filter = /^\d{10}$/;

          $.ajax({
            url: "{{ url('seller_phone_available_check') }}",
            method: "POST",
            data: { mobile: mobile, _token: _token },
            success: function(result) {
              if (result.registered == 'failed') {
                $('#error_mobile').html('<i class="fas fa-check-circle text-success"></i>');
                $('#mobile').removeClass('has-error');
                $('#create').attr('disabled', false);
              } else {
                $('#error_mobile').html('<i class="fas fa-times-circle text-danger"></i>');
                $('#mobile').addClass('has-error');
                $('#create').attr('disabled', 'disabled');
              }
            }
          });
       
    });
  });
  

</script>
</body>

</html>