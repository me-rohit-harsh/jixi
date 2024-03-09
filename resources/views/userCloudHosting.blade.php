<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Cloud Hosting
        - JiXi Cloud
    </title>
</head>

<body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-products " data-phone-cc-input="1">












@extends('layout.app')

@section('content')
    <div class="app-main ">
        <div class="main-header">
            <div class="container">
    
                <h1 class="main-header-title">
                    Cloud Hosting with 2X Faster Speed
                </h1>
                <p>Best cloud hosting with reliable infrastructure, scalability, and robust security..</p>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
    
    
    
                <script type="text/javascript" src="/user/templates/orderforms/lagom2/js/order.min.js?v=2.1.2"></script>
                <div class="main-grid">
                    <div class="main-sidebar hidden-xs hidden-sm hidden-md ">
                        <div menuItemName="Categories" class="panel panel-sidebar">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fas fa-shopping-cart"></i>&nbsp;
    
                                    Categories
    
    
                                    <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                                </h3>
                            </div>
    
    
                            <div class="list-group">
                                <a menuItemName="Cloud Hosting" href="/user/store/cloud-hosting"
                                    class="list-group-item active" id="Secondary_Sidebar-Categories-Cloud_Hosting">
                                    <i class="ls ls-hosting"></i>
    
                                    Cloud Hosting
    
                                </a>
                            </div>
    
                        </div>
    
    
                        <div menuItemName="Actions" class="panel panel-sidebar">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fas fa-plus"></i>&nbsp;
    
                                    Actions
    
    
                                    <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                                </h3>
                            </div>
    
    
                            <div class="list-group">
                                <a menuItemName="Domain Registration" href="{{route('jixi.cart')}}" class="list-group-item"
                                    id="Secondary_Sidebar-Actions-Domain_Registration">
                                    <i class="fas fa-ticket ls ls-dns"></i>&nbsp;
    
                                    Register a New Domain
    
                                </a>
                                <a menuItemName="Domain Transfer" href="/user/transfer" class="list-group-item"
                                    id="Secondary_Sidebar-Actions-Domain_Transfer">
                                    <i class="fas fa-ticket ls ls-transfer"></i>&nbsp;
    
                                    Transfer in a Domain
    
                                </a>
                                <a menuItemName="View Cart" href="/user/cart" class="list-group-item"
                                    id="Secondary_Sidebar-Actions-View_Cart">
                                    <i class="fas fa-ticket ls ls-basket"></i>&nbsp;
    
                                    View Cart
    
                                </a>
                            </div>
    
                        </div>
    
    
                    </div>
                    <div class="main-content">
                        <div class="categories-collapsed visible-xs visible-sm visible-md clearfix">
                            <div class="categories-sidebar">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="btn btn-default">
                                        Cloud Hosting
    
                                        <i class="ml-2 caret"></i>
                                    </a>
                                    <ul class="dropdown-menu has-scroll">
                                        <li class="dropdown-title h6">Categories</li>
                                        <li>
                                            <a menuItemName="Cloud Hosting" href="/user/store/cloud-hosting" class=" active"
                                                id="Secondary_Sidebar-Categories-Cloud_Hosting">
                                                Cloud Hosting
                                            </a>
                                        </li>
                                        <li class="dropdown-title h6">Actions</li>
                                        <li>
                                            <a menuItemName="Domain Registration"
                                                href="/user/cart.php?a=add&domain=register" class=""
                                                id="Secondary_Sidebar-Actions-Domain_Registration">
                                                Register a New Domain
                                            </a>
                                        </li>
                                        <li>
                                            <a menuItemName="Domain Transfer" href="/user/cart.php?a=add&domain=transfer"
                                                class="" id="Secondary_Sidebar-Actions-Domain_Transfer">
                                                Transfer in a Domain
                                            </a>
                                        </li>
                                        <li>
                                            <a menuItemName="View Cart" href="/user/cart.php?a=view" class=""
                                                id="Secondary_Sidebar-Actions-View_Cart">
                                                View Cart
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section products" id="products">
                            <div class="row row-eq-height row-eq-height-sm">
                                <div class="col">
                                    <div class="package" id="product1">
                                        <div class="package-side package-side-left">
                                            <div class="package-header">
                                                <h3 class="package-title">Basic Plan</h3>
                                                <div class="package-price">
                                                    <div class="price">
    
                                                        <div class="price-amount">
                                                            ₹129.00 INR
                                                        </div>
                                                        <div class="price-cycle ">
                                                            Monthly </div>
    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="package-body">
                                                <div class="package-content">
                                                    <p><strong>Host 3 Websites</strong><br />
                                                        <strong>25 GB NVMe SSD Storage</strong><br />
                                                        <strong>2GB Live Ram</strong><br />
                                                        <strong>Free SSL Certificate</strong><br />
                                                        <strong>Unlimited Bandwidth</strong><br />
                                                        <strong>7 SUB-Domains</strong><br />
                                                        <strong>Unlimited Emails</strong><br />
                                                        <strong>Daily cPanel Backups</strong><br />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-footer package-side package-side-right">
                                            <div class="package-price">
                                                <div class="price">
                                                    <div class="price-amount">
                                                        ₹129.00 INR
                                                    </div>
                                                    <div class="price-cycle ">
                                                        Monthly </div>
    
                                                </div>
                                            </div>
    
                                            <a href="/user/store/cloud-hosting/basic"
                                                class="btn btn-lg btn-primary btn-order-now SubmitButton " id="product1-order-button">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col">
                                    <div class="package" id="product2">
                                        <div class="package-side package-side-left">
                                            <div class="package-header">
                                                <h3 class="package-title">Plus Plan</h3>
                                                <div class="package-price">
                                                    <div class="price">
    
                                                        <div class="price-amount">
                                                            ₹169.00 INR
                                                        </div>
                                                        <div class="price-cycle ">
                                                            Monthly </div>
    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="package-body">
                                                <div class="package-content">
                                                    <p><strong>Host 10 Websites</strong><br />
                                                        <strong>50GB NVMe SSD Storage</strong><br />
                                                        <strong>3GB Live Ram</strong><br />
                                                        <strong>Free SSL Certificate</strong><br />
                                                        <strong>Unlimited Bandwidth</strong><br />
                                                        <strong>10 SUB-Domains</strong><br />
                                                        <strong>Unlimited Emails</strong><br />
                                                        <strong>Daily cPanel Backups</strong><br />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-footer package-side package-side-right">
                                            <div class="package-price">
                                                <div class="price">
                                                    <div class="price-amount">
                                                        ₹169.00 INR
                                                    </div>
                                                    <div class="price-cycle ">
                                                        Monthly </div>
    
                                                </div>
                                            </div>
    
                                            <a href="/user/store/cloud-hosting/plus-plan"
                                                class="btn btn-lg btn-primary btn-order-now  SubmitButton" id="product2-order-button">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col">
                                    <div class="package" id="product3">
                                        <div class="package-side package-side-left">
                                            <div class="package-header">
                                                <h3 class="package-title">Premium Plan</h3>
                                                <div class="package-price">
                                                    <div class="price">
    
                                                        <div class="price-amount">
                                                            ₹229.00 INR
                                                        </div>
                                                        <div class="price-cycle ">
                                                            Monthly </div>
    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="package-body">
                                                <div class="package-content">
                                                    <p><strong>Host 50 Websites</strong><br />
                                                        <strong>100GB NVMe SSD Storage</strong><br />
                                                        <strong>4GB Live Ram</strong><br />
                                                        <strong>Free SSL Certificate</strong><br />
                                                        <strong>Unlimited Bandwidth</strong><br />
                                                        <strong>Unlimited SUB-Domains</strong><br />
                                                        <strong>Unlimited Emails</strong><br />
                                                        <strong>Daily cPanel Backups</strong><br />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-footer package-side package-side-right">
                                            <div class="package-price">
                                                <div class="price">
                                                    <div class="price-amount">
                                                        ₹229.00 INR
                                                    </div>
                                                    <div class="price-cycle ">
                                                        Monthly </div>
    
                                                </div>
                                            </div>
    
                                            <a href="/user/store/cloud-hosting/premium-plan"
                                                class="btn btn-lg btn-primary btn-order-now  SubmitButton" id="product3-order-button">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-lg fade modal-recomendations" id="recommendationsModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                        class="lm lm-close"></i></button>
                                <h3 class="modal-title">
                                    Added to Cart
                                </h3>
                            </div>
                            <div class="modal-body has-scroll">
                                <div class="product-recommendations-container">
                                    <div class="product-recommendations">
                                        <h5 class="recommendation-title">Based on your order, we recommend:</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-t-3x">
                                <a class="btn btn-primary btn-block btn-lg" href="#" id="btnContinueRecommendationsModal"
                                    data-dismiss="modal" role="button">
                                    <span><i class="ls ls-share"></i>Continue</span>
                                    <div class="loader loader-button hidden">
    
                                        <div class="spinner spinner-sm">
                                            <div class="rect1"></div>
                                            <div class="rect2"></div>
                                            <div class="rect3"></div>
                                            <div class="rect4"></div>
                                            <div class="rect5"></div>
                                        </div>
    
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-recommendation clonable w-hidden hidden">
                        <div class="header">
                            <div class="cta">
                                <div class="price">
                                    <span class="w-hidden hidden">FREE!</span>
                                    <span class="breakdown-price"></span>
                                    <span class="setup-fee"><small>&nbsp;Setup Fee</small></span>
                                </div>
                                <button type="button" class="btn btn-sm btn-add">
                                    <span class="text">Add to Cart</span>
                                    <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                                </button>
                            </div>
                            <div class="expander">
                                <i class="fas fa-chevron-right rotate" data-toggle="tooltip" data-placement="right"
                                    title="Click to learn more."></i>
                            </div>
                            <div class="content">
                                <div class="headline truncate"></div>
                                <div class="tagline truncate">
                                    A description (tagline) is not available for this product.
                                </div>
                            </div>
                        </div>
                        <div class="body clearfix">
                            <p></p>
                        </div>
                    </div>
                </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            </div>
        </div>
    
    
    
    </div>
    <div id="fullpage-overlay" class="hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="/user/assets/img/overlay-spinner.svg">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>
    
    
    
    
    
    <div class="overlay"></div>
@endsection
</body>

</html>