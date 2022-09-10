<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BS-Bogo Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{url('public')}}/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{url('public')}}/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{url('public')}}/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">


    
                                            
                                            
                                            
                                            
<li class="special-link"><a href="{{url('index')}}">Home</a></li>
                           
    <!-- HEADER AREA END -->
   
 

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class= "row">
        @foreach($list_produk as $produk)
               <div class="col mt-5">
                    <div class="section-title-area text-center">
                         <div class="modal-product-info">                                
                            <h1 class="added-cart"><i class="fa fa-check-circle"></i>Checkout Successfully </h1>                                          
                         </div>
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->


</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{url('public')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{url('public')}}/js/main.js"></script>
  
</body>
</html>

