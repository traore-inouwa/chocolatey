<!DOCTYPE html>
<html>
  <head> 
    
    <style>
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dark Bootstrap Admin </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
<!-- Custom Font Icons CSS-->
<link rel="stylesheet" href="admin/css/font.css">
<!-- Google fonts - Muli-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
<!-- theme stylesheet-->
<link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="admin/css/custom.css">
<!-- Favicon-->
<link rel="shortcut icon" href="admin/img/favicon.ico">
<!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </style>

  </head>
  <body>


    
    @include('admin.header')
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           
            <h1>Add new staff</h1>

            <div class="row col-md-12 mt-2">
                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>


                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
<br/>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
          


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>