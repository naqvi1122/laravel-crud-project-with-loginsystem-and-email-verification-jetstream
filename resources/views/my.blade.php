<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>update your information</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="\css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Update your information</h2>
                </div>
                <div class="card-body">
                    <form action="{{$url}}" method="POST">
                    @csrf
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6"  pattern="[a-zA-Z'-'\s]*" type="text" name="name" value="{{$info->name}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" value="{{$info->email}}" data-sb-validations="required" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">phone</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="phone" data-sb-validations="required" value="{{$info->phone}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="msg" value="{{$info->msg}}" data-sb-validations="required" placeholder="Message sent to the employer"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">update</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->