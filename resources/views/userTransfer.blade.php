<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Shopping Cart
        - JiXi Cloud
    </title>

</head>

@extends('layout.app')
@section('content')
    <body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-domaintransfer "
        data-phone-cc-input="1">
    
        <div class="app-main ">
            <div class="main-header">
                <div class="container">
    
                    <h1 class="main-header-title">
                        Transfer Domain
                    </h1>
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
                                    <a menuItemName="Cloud Hosting" href="/user/store/cloud-hosting" class="list-group-item"
                                        id="Secondary_Sidebar-Categories-Cloud_Hosting">
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
                                    <a menuItemName="Domain Registration" href="/user/cart.php?a=add&domain=register"
                                        class="list-group-item" id="Secondary_Sidebar-Actions-Domain_Registration">
                                        <i class="fas fa-ticket ls ls-dns"></i>&nbsp;
    
                                        Register a New Domain
    
                                    </a>
                                    <a menuItemName="Domain Transfer" href="/user/cart.php?a=add&domain=transfer"
                                        class="list-group-item active" id="Secondary_Sidebar-Actions-Domain_Transfer">
                                        <i class="fas fa-ticket ls ls-transfer"></i>&nbsp;
    
                                        Transfer in a Domain
    
                                    </a>
                                    <a menuItemName="View Cart" href="/user/cart.php?a=view" class="list-group-item"
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
                                            Transfer in a Domain
    
                                            <i class="ml-2 caret"></i>
                                        </a>
                                        <ul class="dropdown-menu has-scroll">
                                            <li class="dropdown-title h6">Categories</li>
                                            <li>
                                                <a menuItemName="Cloud Hosting" href="/user/store/cloud-hosting" class=""
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
                                                <a menuItemName="Domain Transfer"
                                                    href="/user/cart.php?a=add&domain=transfer" class=" active"
                                                    id="Secondary_Sidebar-Actions-Domain_Transfer">
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
                            <h5 >Transfer now to extend your domain by 1 year!*</h5>
                            <form method="post" action="/user/cart.php" id="frmDomainTransfer">
                                <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                                <input type="hidden" name="a" value="addDomainTransfer">
                                <input name="epp" type="hidden" value="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div id="transferUnavailable"
                                                    class="alert alert-warning slim-alert text-center hidden"></div>
                                                <div class="form-group">
                                                    <label for="inputTransferDomain">Domain Name</label>
                                                    <input type="text" class="form-control" name="domain"
                                                        id="inputTransferDomain" value="" placeholder="example.com"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="manual"
                                                        title="Please enter your domain" />
                                                </div>
                                                <button type="submit" id="btnTransferDomain"
                                                    class="btn btn-primary SubmitButton btn-transfer ">
                                                    <span id="addToCart"><i class="ls ls-basket m-r-8"></i>Order Now</span>
                                                    <span class="loader loader-button">
    
                                                        <div class="spinner spinner-sm">
                                                            <div class="rect1"></div>
                                                            <div class="rect2"></div>
                                                            <div class="rect3"></div>
                                                            <div class="rect4"></div>
                                                            <div class="rect5"></div>
                                                        </div>
    
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="text-light">* Excludes certain TLDs and recently renewed domains</p>
                        </div>
                    </div>
                    <div class="modal modal-lg fade" id="modal-epp-code">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lm lm-close"></i></span>
                                    </button>
                                    <h3 class="modal-title">Authorization Code</h3>
                                </div>
                                <div class="modal-body">
                                    <p>To initiate a transfer you will need to obtain the authorization code from your
                                        current registrar. These can often be referred to as either the epp code or auth
                                        code. They act as a password and are unique to the domain name.</p>
                                    <div class="form-group">
                                        <label for="inputAuthCode">Authorization Code</label>
                                        <div class="form-tooltip">
                                            <input type="text" class="form-control" name="eppModal" data-trigger="manual"
                                                id="inputAuthCode" placeholder="Epp Code / Auth Code" data-toggle="tooltip"
                                                data-placement="left" title="Required" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-btn-loader data-epp-submit>
                                        <span>Confirm</span>
                                        <div class="loader loader-button hidden">
    
                                            <div class="spinner spinner-sm spinner-light">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                                <div class="rect4"></div>
                                                <div class="rect5"></div>
                                            </div>
    
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
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
        <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true"
            style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="lm lm-close"></i></button>
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="loader">
    
                            <div class="spinner ">
                                <div class="rect1"></div>
                                <div class="rect2"></div>
                                <div class="rect3"></div>
                                <div class="rect4"></div>
                                <div class="rect5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary modal-submit">
                            Submit
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <form action="#" id="frmGeneratePassword" class="form-horizontal">
            <div class="modal fade" id="modalGeneratePassword" style="display: none">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                    class="lm lm-close"></i></button>
                            <h5 class="modal-title">
                                Generate Password
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-lagom alert-danger hidden" id="generatePwLengthError">
                                Please enter a number between 8 and 64 for the password length
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="generatePwLength" class="col-md-4 control-label">Password Length</label>
                                <div class="col-md-8">
                                    <input type="number" min="8" max="64" value="12" step="1"
                                        class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="generatePwOutput" class="col-md-4 control-label">Generated Password</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-default btn-sm">
                                        <i class="ls ls-plus"></i>
                                        Generate new password
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm copy-to-clipboard"
                                        data-clipboard-target="#inputGeneratePasswordOutput">
                                        <i class="ls ls-copy"></i>
                                        Copy
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert"
                                data-clipboard-target="#inputGeneratePasswordOutput">
                                Copy to clipboard and Insert
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    
    
        <div class="overlay"></div>
    </body>
@endsection
</html>