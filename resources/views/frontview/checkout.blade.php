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

 

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9---">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li ><a href="{{url('index')}}">Home</a>
                                           
                                        </li>

                                        <li ><a href="{{url('shop')}}">Shop</a>
                                            
                                        </li>
                                        <li ><a href="{{url('checkout')}}">Checkout</a>
                                            
                                        </li>
                                        <li ><a href="{{url('cart')}}">Keranjang</a>
                                            
                                        </li>
                                        <li ><a href="#">Registrasi</a>
                                            
                                        </li>
                                        
                                               
                                        </li>
                                        
                                        <li class="special-link"><a href="{{url('login')}}">Log In</a></li><li >
                                          
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="#" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="{{url('login')}}/#login">Sign in</a></li>
                                        <li><a href="{{url('register')}}/#register">Register</a></li>
                                        <li><a href="{{url('account')}}/#account">My Account</a></li>
                                        <li><a href="{{url('wishlist')}}/#wishlist">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                        <div class="mini-cart-icon">
                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div>
                        <!-- mini-cart -->
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
    
    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Keranjang</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
            @foreach($list_produk as $produk)
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">{{$produk->nama}}</a></h6>
                        <span class="mini-cart-quantity">1 x {{$produk->harga}},-</span>
                    </div>
                </div>
            @endforeach       
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>Rp.520.000,-</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">Lihat Keranjang</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <li class="special-link"><a href="{{url('index')}}">Home</a></li><li >
    
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                            <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-toggle="collapse">Click here to login</a></h5>
                            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn_coupon-code-form ltn__form-box">
                                    <p>Please login your accont.</p>
                                    <form action="#" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                        <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                        <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                            <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-toggle="collapse">Click here to enter your code</a></h5>
                            <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn__coupon-code-form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <form action="#" >
                                        <input type="text" name="coupon-code" placeholder="Coupon code">
                                        <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">DATA DIRI</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="#" >
                                    <h6>Masukan Data diri Anda</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__lastname" placeholder="Nama Panggilan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="Email ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="Nomor Telepon">
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Provinsi</label>
                                                <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($list_provinsi as $provinsi)
                                                    <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Kota/Kabupaten</label>
                                                <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
                                                <option value="">Pilih Provinsi terlebih dahulu</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Kecamatan</label>
                                                <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
                                                <option value="">Pilih Kabupaten terlebih dahulu</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Desa</label>
                                                <select name="" id="desa" class="form-control">
                                                <option value="">Pilih Kecamatan terlebih dahulu</option>
                                                </select>
                                            </div>                
                                            </div>
                                        </div>
                                    </div>
                                                            
                                    </div>
                                    <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                                    <h6>Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-1" aria-expanded="false">
                                    Check payments
                                </h5>
                                <div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h5 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true"> 
                                    Cash on delivery 
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>                          
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false" >
                                    PayPal <img src="{{url('public')}}/img/icons/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            
                        </div>
                        <button class="special-link"><a href="">Place Order</a></button>
                        
                        
                    </div>
                </div>
       
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-1 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="{{url('public')}}/img/logo.png" alt="Logo">
                                </div>
                            </div>
                            <p>BOGO STORE-Store Terbaik Diindonesia</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Ketapang, Kalimantan Barat, Indonesia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:example@example.com">bogostore@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                           
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                            <h5 class="mt-30">We Accept</h5>
                            <img src="{{url('public')}}/img/icons/payment-4.png" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>Copyright by Indra Brahmana Putra <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-right">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{url('public')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{url('public')}}/js/main.js"></script>

    
@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/" + id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/" + id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/" + id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush
  
</body>
</html>

