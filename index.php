<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MFQGDFB');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AIESEC Global Talent Sign Up">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Title Page-->
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png"/>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <style>

        @media screen and (max-device-width: 1980px)
        and (-webkit-min-device-pixel-ratio: 1) and (min-device-width: 1200px) {
            img.responsive { max-width: 15%; }
        }
        @media screen and ( max-width: 480px ) {
            img.responsive { width: 50%; }
        }

    </style>
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFQGDFB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page-wrapper bg-gra-03 p-t-100 p-b-100 font-poppins" style="background: linear-gradient(to top right, #0CB9C1 0%, #0CB9C1 100%);">
    <center><img src="Aiesecwhiteblue.png" alt="Smiley face" class="responsive" onclick="window.location='https://www.aiesec.lk';" > </center><br><br>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <center><h2 class="title"  style="color:#0CB9C1;"> Global Talent Sign Up</h2></center>
                <form id='signup_form' enctype="multipart/form-data">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">First Name</label>
                                <input class="input--style-4" type="text" name="first_name" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Last Name</label>
                                <input class="input--style-4" type="text" name="last_name" required >
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">


                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="tel" placeholder="07xxxxxxxx" name="phone" pattern="[0][0-9]{9}" required>
                            </div>
                        </div>

                        <div class="input-group col-2">
                            <label class="label">Educational Qualification</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="education" value="" required>
                                    <option disabled="disabled" selected="selected" hidden>Choose option</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group col-2">
                            <div class="input-group">
                                <label class="label">Upload your CV</label>
                                <input id="cv" class="input--style-4" type="file" name="cv" accept=".pdf" required>
                            </div>
                        </div>


                    </div>
                    <div class="input-group">

                        <div class="row row-space" >
                            <div class="input-group ">
                                <input type="checkbox" class="checkmark input-icon"  required>
                                <label class="label" style="padding-left: 40px;text-indent: -15px;padding-top: 5px;">I may be contacted via Phone or E-mail </label>

                            </div>
                        </div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LfddL4UAAAAAH5VDHI75ZzDmn3M6hIAiVyOf7gz"></div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--gt" style="background: #0CB9C1;" name="submit" type="submit">Sign Up

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<script>

    $(function () {
        $('form').on('submit', function (e) {
            console.log(grecaptcha.getResponse());

            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: 'signup.php',
                type: 'POST',
                data: formData,
                success: function (data) {

                    let response = JSON.parse(data)

                    if (response.type === "fail"){

                        if (response.text === "Captcha invalid"){
                            Swal.fire({
                                title: "Captcha Invalid",
                                text: "Your Captcha was invalid. Please try again.",
                                type: "error",
                                confirmButtonText: "OK"
                            });
                        }

                        if (response.text === "Incomplete form"){
                            Swal.fire({
                                title: "Incomplete Form",
                                text: "Your form was incomplete. Please re-check.",
                                type: "error",
                                confirmButtonText: "Cool"
                            });
                        }

                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

    });


</script>


</html>
<!-- end document-->

