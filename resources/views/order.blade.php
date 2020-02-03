<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title  -->
    <title>Banana Crispy | Pesan</title>
    @include('Page.head')
</head>

<body>

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix" id="app">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="/"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="/"><img src="img/core-img/logo.png" alt=""></a>
            </div>

            
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="/">Beranda</a></li>
                    {{-- <li><a href="shop.html">Shop</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li> --}}
                    <li><a href="{{url('order')}}">Pesan</a></li>
                    <li><a href="{{url('login')}}">Admin</a></li>
                </ul>
            </nav>
            
            
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>

            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="checkout_details_area mt-50 clearfix">
    
                                <div class="cart-title">
                                    <h2>Pesan</h2>
                                </div>
    
                                <form action="/insert" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control" required="required" name="nama_pel" id="nama" placeholder="Nama Pelanggan" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <select class="w-100" id="nama_topp" required="required" name="nama_topp">
                                            <option>Topping</option>
                                            <option value="tiramisu">Tiramisu</option>
                                            <option value="gt">Green Tea</option>
                                            <option value="ck">Capucino Kacang</option>
                                            <option value="banana">Banana</option>
                                            <option value="oreo">Oreo</option>
                                            <option value="taro">Taro</option>
                                            <option value="cp">Coklat Putih</option>
                                            <option value="sk">Selai Kacang</option>
                                            <option value="strawberry">Strawberry</option>
                                            <option value="cap">Capucino</option>
                                            <option value="keju">Keju</option>
                                        </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="number" required="required" name="harga" class="form-control" id="harga" placeholder="Harga" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="number" required="required" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="number" required="required" name="total" class="form-control" id="zipCode" placeholder="Total Bayar" value="">
                                        </div>
                                        
                                        <div class="col-md-12 mb-3">
                                                <input type="submit" name="input" value="Pesan" class="btn amado-btn w-100">
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        {{-- <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
                    </div>
                    <!-- Product Catagories Area End --> --}}
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('Page.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    @include('Page.script')


</body>

</html>