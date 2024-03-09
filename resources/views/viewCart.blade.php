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
    <body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-viewcart " data-phone-cc-input="1">
        <div class="app-main ">
            <div class="main-header">
                <div class="container">
    
                    <h1 class="main-header-title">
                        Review & Checkout
                    </h1>
                </div>
            </div>
            <div class="main-body">
                <div class="container">
    
    
    
    
                    <script type="text/javascript" src="/user/templates/orderforms/lagom2/js/order.min.js?v=2.1.2"></script>
                    <script>
                        // Define state tab index value
            var statesTab = 10;
            var stateNotRequired = true;
                    </script>
                    <script type="text/javascript" src="/user/assets/js/StatesDropdown.js"></script>
    
                    <div class="main-grid">
                        <div class="main-content  main-content-m-w">
                            <div class="message message-no-data">
                                <div class="message-image">
                                    <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                                        height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                        xml:space="preserve">
                                        <polygon class="svg-icon-prime svg-icon-stroke"
                                            points="16,47.8 10,44.3 10,38 16,41.5" />
                                        <polyline class="svg-icon-outline-s" points="35.5,3 32,1 28.5,3 " />
                                        <line class="svg-icon-outline-s" x1="48.4" y1="10.4" x2="42.6" y2="7.1" />
                                        <polyline class="svg-icon-outline-s" points="59,20.6 59,16.6 55.5,14.6" />
                                        <line class="svg-icon-outline-s" x1="59" y1="35.3" x2="59" y2="28.7" />
                                        <polyline class="svg-icon-outline-s" points="55.5,49.4 59,47.4 59,43.4" />
                                        <line class="svg-icon-outline-s" x1="42.6" y1="56.9" x2="48.4" y2="53.6" />
                                        <polyline class="svg-icon-outline-s" points="28.5,61 32,63 35.5,61 " />
                                        <line class="svg-icon-outline-s" x1="15.6" y1="53.6" x2="21.4" y2="56.9" />
                                        <polyline class="svg-icon-outline-s" points="5,43.4 5,47.4 8.5,49.4" />
                                        <line class="svg-icon-outline-s" x1="5" y1="28.7" x2="5" y2="35.3" />
                                        <polyline class="svg-icon-outline-s" points="8.5,14.6 5,16.6 5,20.6" />
                                        <line class="svg-icon-outline-s" x1="21.4" y1="7.1" x2="15.6" y2="10.5" />
                                    </svg>
                                </div>
                                <h6 class="message-title">Your Shopping Cart is Empty</h6>
                                <div class="message-action">
                                    <a class="SubmitButton btn btn-primary" href="/user/domain">
                                        Start Shopping
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-sidebar main-sidebar-lg">
                            <div class="sidebar-sticky sidebar-sticky-summary">
                                <div class="panel panel-summary panel-summary-primary order-summary" id="orderSummary">
                                    <div class="loader" id="orderSummaryLoader" style="display: none;">
    
                                        <div class="spinner spinner-sm spinner-light">
                                            <div class="rect1"></div>
                                            <div class="rect2"></div>
                                            <div class="rect3"></div>
                                            <div class="rect4"></div>
                                            <div class="rect5"></div>
                                        </div>
                                    </div>
                                    <div class="panel-heading">
                                        <h2 class="panel-title">Order Summary</h2>
                                    </div>
                                    <div class="panel-body">
                                        <div class="summary-content content">
                                            <ul class="summary-list">
                                                <li class="list-item" data-subtotal>
                                                    <span class="item-name">Subtotal</span>
                                                    <span class="item-value">₹0.00 INR</span>
                                                </li>
                                            </ul>
                                            <ul class="summary-list" id="recurring">
                                                <li class="list-item faded">Totals</li>
                                                <li class="list-item" id="recurringMonthly" style="display:none;">
                                                    <span class="item-name">Monthly</span>
                                                    <span class="item-value"></span>
                                                </li>
                                                <li class="list-item" id="recurringQuarterly" style="display:none;">
                                                    <span class="item-name">Quarterly</span>
                                                    <span class="item-value"></span>
                                                </li>
                                                <li class="list-item" id="recurringSemiAnnually" style="display:none;">
                                                    <span class="item-name">Semi-Annually</span>
                                                    <span class="item-value"></span>
                                                </li>
                                                <li class="list-item" id="recurringAnnually" style="display:none;">
                                                    <span class="item-name">Annually</span>
                                                    <span class="item-value"></span>
                                                </li>
                                                <li class="list-item" id="recurringBiennially" style="display:none;">
                                                    <span class="item-name">Biennially</span>
                                                    <span class="item-value"></span>
                                                </li>
                                                <li class="list-item" id="recurringTriennially" style="display:none;">
                                                    <span class="item-name">Triennially</span>
                                                    <span class="item-value"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="price price-left-h" data-total>
                                            <span class="price-total">Total Due Today</span>
                                            <div class="price-amount amt" id="totalDueToday">₹0.00 INR</div>
                                        </div>
                                        <div class="summary-actions">
                                            <button type="button" class="btn btn-lg btn-primary-faded btn-checkout disabled"
                                                disabled data-btn-loader id="checkout" style="color: darkorchid">
                                                <span><i class="fa fa-share"></i>Checkout</span>
                                                <div class="loader loader-button hidden">
    
                                                    <div class="spinner spinner-sm">
                                                        <div class="rect1"></div>
                                                        <div class="rect2"></div>
                                                        <div class="rect3"></div>
                                                        <div class="rect4"></div>
                                                        <div class="rect5"></div>
                                                    </div>
    
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox m-t-0" id="tos-checkbox">
                                    <label>
                                        <input class="icheck-control" type="checkbox" data-tos-checkbox />
                                        <span >I have read and agree to the <a href="/privacy"
                                                target="_blank" style="color: darkorchid">Terms of Service</a></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="order-summary order-summary-mob is-fixed" id="orderSummary" data-fixed-actions
                        href="#orderSummary">
                        <button type="button" class="btn btn-lg btn-primary-faded btn-checkout disabled" disabled
                            data-btn-loader id="checkout" style="color: darkorchid">
                            <span> <i class="fa fa-share"></i> Checkout</span>
                            <div class="loader loader-button hidden">
    
                                <div class="spinner spinner-sm">
                                    <div class="rect1"></div>
                                    <div class="rect2"></div>
                                    <div class="rect3"></div>
                                    <div class="rect4"></div>
                                    <div class="rect5"></div>
                                </div>
    
                            </div>
                        </button>
                    </div>
    
                    <form method="post" action="/user/domain">
                        <input type="hidden" name="token" value="548c2de442f9dc51889f7de8425574e68f69ee33" />
                        <input type="hidden" name="a" value="empty" />
                        <div class="modal fade modal-remove-item" id="modalEmptyCart" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="lm lm-close"></i></span>
                                        </button>
                                        <h3 class="modal-title">
                                            <span>Empty Cart</span>
                                        </h3>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to empty your shopping cart?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-btn-loader>
                                            <span>Yes</span>
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
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="/user/domain">
                        <input type="hidden" name="token" value="548c2de442f9dc51889f7de8425574e68f69ee33" />
                        <input type="hidden" name="a" value="remove" />
                        <input type="hidden" name="r" value="" id="inputRemoveItemType" />
                        <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
                        <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="lm lm-close"></i></span>
                                        </button>
                                        <h3 class="modal-title">
                                            <span>Remove Item</span>
                                        </h3>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to remove this item from your cart?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-btn-loader>
                                            <span>Yes</span>
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
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal fade modal-remove-item" id="modalRemoveAddon" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lm lm-close"></i></span>
                                    </button>
                                    <h3 class="modal-title">
                                        <span>Remove Item</span>
                                    </h3>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to remove this item from your cart?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-btn-loader data-remove-addon-confirm
                                        data-pid="" data-aid="" data-type="" onclick="removeAddonConfirm($(this));">
                                        <span>Yes</span>
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
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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
                                        Recommendations
                                    </h3>
                                </div>
                                <div class="modal-body has-scroll">
                                    <div class="product-recommendations-container">
                                        <div class="product-recommendations">
                                            <h5 class="recommendation-title">Based on this product, we recommend:</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer m-t-3x">
                                    <a class="btn btn-primary btn-block btn-lg" href="#"
                                        id="btnContinueRecommendationsModal" data-dismiss="modal" role="button">
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
                                    <button type="button" class="btn btn-default btn-sm">
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