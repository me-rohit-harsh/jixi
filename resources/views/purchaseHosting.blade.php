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
    <script src="https://kit.fontawesome.com/62cca11a06.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://jixicloud.com/user/templates/lagom2/core/styles/default/assets/css/vars/minified.css">
<link rel="stylesheet" href="https://jixicloud.com/user/templates/lagom2/assets/css/theme.css">
    <script>
        var csrfToken = '68a9b3bb7218b23e182704f0d0527e515865e108',
            markdownGuide = 'Markdown Guide',
            locale = 'en',
            saved = 'saved',
            saving = 'autosaving',
            whmcsBaseUrl = "/user",
            requiredText = 'Required',
            recaptchaSiteKey = "";
    </script>

    <script src="/user/templates/lagom2/assets/js/scripts.min.js?v=2.1.2"></script>
    <script src="/user/templates/lagom2/assets/js/core.min.js?v=2.1.2"></script>




    <!-- Dynamic Template Compatibility -->
    <!-- Please update your theme to include or have a comment on the following to negate dynamic inclusion -->
    <link rel="stylesheet" type="text/css" href="/user/assets/css/fontawesome-all.min.css" />
<style>
    .panel-domain-search-secondary{
        background: #A642AE;
    }
</style>
</head>

<body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-configureproductdomain "
    data-phone-cc-input="1">
















    <div class="app-nav ">
        <div class="app-nav-header " id="header">
            <div class="container">
                <button class="app-nav-toggle navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <a class="logo" href="/"><img src="/assets/img/logo_main.svg" title="JiXi Cloud"
                        alt="JiXi Cloud" /></a>
                <ul class="top-nav">



                    <li menuItemName="View Cart" class="  nav-item-cart" id="Secondary_Navbar-View_Cart">
                        <a href="/user/cart.php?a=view">
                            <i class="fas fa-test lm lm-basket"></i>
                            <span class="item-text">View Cart</span>
                            <span class="nav-badge badge badge-primary-faded "><span>1</span></span> </a>
                    </li>
                    <li menuItemName="Currencies-147" class="dropdown  nav-item-currency"
                        id="Secondary_Navbar-Currencies-147">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="item-text">INR</span>
                            <b class="ls ls-caret"></b> </a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="app-nav-menu" id="main-menu">
            <div class="container">
                <ul class="menu menu-primary" data-nav>

















                    <li menuItemName="footer_extended.products" class="dropdown  nav-item-text-only"
                        id="Primary_Navbar-footer_extended.products">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                <polygon class="svg-icon-prime svg-icon-stroke"
                                    points="59,47.4 59,36.2 32,48 5,36.2 5,47.4 32,63 " />
                                <polygon class="svg-icon-prime-l svg-icon-stroke"
                                    points="32,44.3 11.2,32.3 5,35.9 32,51.5 59,35.9 52.8,32.3 " />
                                <line class="svg-icon-outline-s" x1="32" y1="32.7" x2="32" y2="43.2" />
                                <polyline class="svg-icon-outline-s" points="5.5,16.9 32,32.2 58.5,16.9 " />
                                <polygon class="svg-icon-outline-s"
                                    points="5,16.6 5,28.1 32,43.7 59,28.1 59,16.6 32,1 " />
                                <line class="svg-icon-outline-s" x1="37" y1="34.8" x2="44" y2="30.7" />
                            </svg>
                            <span class="item-text">Products</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">

                            <li menuItemName="Cloud Hosting" class=" "
                                id="Primary_Navbar-footer_extended.products-Cloud_Hosting">
                                <a href="/user/store/cloud-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    Cloud Hosting
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Domains" class="dropdown  nav-item-text-only" id="Primary_Navbar-Domains">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 64 64" x="0px" y="0px" width="64px" height="64px">
                                <ellipse class="svg-icon-prime svg-icon-stroke" cx="31.45" cy="32.38" rx="7.48"
                                    ry="7.48" />
                                <path class="svg-icon-outline-s"
                                    d="M54.14,54.29A30.57,30.57,0,0,1,32.2,63a30.34,30.34,0,0,1-21.85-8.71A31.18,31.18,0,0,1,1,32.38a31.18,31.18,0,0,1,9.35-21.91A31.18,31.18,0,0,1,32.2,1a31.37,31.37,0,0,1,21.94,9.47A30.67,30.67,0,0,1,63,32.38,30.67,30.67,0,0,1,54.14,54.29Z" />
                                <path class="svg-icon-outline-s" d="M1,32.89a15.35,15.35,0,0,1,.09-2" />
                                <path class="svg-icon-outline-s dashed-21"
                                    d="M5.79,23.9a24.23,24.23,0,0,1,4.57-3.36C16,17.3,23.7,15.3,32.24,15.3s16.28,2,21.88,5.24a21.48,21.48,0,0,1,6.51,5.51" />
                                <path class="svg-icon-outline-s" d="M62.7,29.74a8,8,0,0,1,.2,2" />
                                <path class="svg-icon-outline-s"
                                    d="M63,31.08C63,36,59.72,41,54.12,44.23a45,45,0,0,1-22,5.65,44.17,44.17,0,0,1-21.78-5.65C4.76,41,1,36.52,1,31.59" />
                                <path class="svg-icon-outline-s" d="M32.87,63a16.42,16.42,0,0,1-2-.11" />
                                <path class="svg-icon-outline-s dashed-22"
                                    d="M24.38,59.6a23.31,23.31,0,0,1-4.11-5.32C17,48.67,15,40.93,15,32.38s2-16.29,5.23-21.89a20.92,20.92,0,0,1,6.23-7l1-.65" />
                                <path class="svg-icon-outline-s" d="M30.89,1.3a7.81,7.81,0,0,1,2-.27" />
                                <path class="svg-icon-outline-s"
                                    d="M31.41,1c4.93,0,9.44,3.86,12.67,9.46a44.62,44.62,0,0,1,5.81,21.89,44.69,44.69,0,0,1-5.81,21.9C40.85,59.88,36.34,63,31.41,63" />
                            </svg>

                            <span class="item-text">Domains</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">

                            <li menuItemName="Register a New Domain" class=" "
                                id="Primary_Navbar-Domains-Register_a_New_Domain">
                                <a href="/user/cart.php?a=add&domain=register">
                                    <i class="fas fa-test lm lm-globe"></i>
                                    Register a New Domain
                                </a>
                            </li>

                            <li menuItemName="Transfer Domains to Us" class=" "
                                id="Primary_Navbar-Domains-Transfer_Domains_to_Us">
                                <a href="/user/cart.php?a=add&domain=transfer">
                                    <i class="fas fa-test ls ls-transfer"></i>
                                    Transfer Domains to Us
                                </a>
                            </li>

                            <li menuItemName="Divider-131" class="nav-divider " id="Primary_Navbar-Domains-Divider-131">
                                -----
                            </li>

                            <li menuItemName="Domain Pricing" class=" " id="Primary_Navbar-Domains-Domain_Pricing">
                                <a href="/user/domain/pricing">
                                    <i class="fas fa-test ls ls-document-info"></i>
                                    Domain Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Website & Security" class="  nav-item-text-only"
                        id="Primary_Navbar-Website_&_Security">
                        <a href="#">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                <polygon class="svg-icon-prime-l svg-icon-stroke"
                                    points="31,27.5 59,3.8 54,1 26,17.2 26,24.7" />
                                <polygon class="svg-icon-prime svg-icon-stroke"
                                    points="31,19.9 31,27.5 38.5,31.9 38.5,48 45,48 59,31.8 59,3.8" />
                                <polygon class="svg-icon-outline-s"
                                    points="33,63 19,63 5,46.8 5,18.8 10,16 38,32.2 38,60.3" />
                                <polyline class="svg-icon-outline-s" points="5.5,19.1 33,34.9 33,62.5" />
                                <line class="svg-icon-outline-s" x1="33.5" y1="34.6" x2="37.5" y2="32.5" />
                            </svg>
                            <span class="item-text">Website & Security</span>
                        </a>
                    </li>
                    <li menuItemName="Support" class="dropdown  nav-item-text-only" id="Primary_Navbar-Support">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" width="64" height="64"
                                viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="svg-icon-outline-s"
                                    d="M13.1148 27.5496C13.1148 25.922 13.702 24.0903 14.7472 22.4575C15.7924 20.8247 17.21 19.5247 18.6881 18.8432L38.2908 9.80629C39.7688 9.12487 41.1864 9.11793 42.2316 9.787C43.2769 10.4561 43.8641 11.7464 43.8641 13.374V26.4946C43.8641 28.1222 43.2769 29.9538 42.2316 31.5866C41.1864 33.2193 39.7688 34.5195 38.2908 35.2009L30.3321 38.8698L21.9913 49.1974C20.8459 50.616 19.2646 50.4425 19.2646 48.8986V43.972L18.6881 44.2378C17.21 44.9192 15.7924 44.9262 14.7472 44.2571C13.702 43.5881 13.1148 42.2977 13.1148 40.6701V27.5496Z" />
                                <path class="svg-icon-outline-s dashed-40"
                                    d="M32.1611 12.5133V6.64023C32.1611 5.01259 31.5739 3.72231 30.5286 3.05323C29.4834 2.38416 28.0658 2.3911 26.5878 3.07253L6.98511 12.1095C5.50697 12.7909 4.08938 14.091 3.04419 15.7237C1.99899 17.3565 1.4118 19.1882 1.4118 20.8158V33.9363C1.4118 35.5639 1.99899 36.8543 3.04419 37.5233C4.08938 38.1924 5.50697 38.1854 6.98511 37.504L7.56165 37.2382V42.1648C7.56165 43.7088 9.14292 43.8822 10.2883 42.4636L12.8925 39.6738" />
                                <path class="svg-icon-prime-l svg-icon-stroke"
                                    d="M26.3246 31.1608C25.2825 32.7888 24.697 34.6151 24.697 36.238V49.3202C24.697 50.9431 25.2825 52.2296 26.3246 52.8967C27.3668 53.5638 29.1827 54.5099 30.254 55.701C30.5095 55.985 30.5633 56.1603 30.8064 56.4592C31.1581 56.8916 31.0031 56.8673 32.4671 57.7974C33.9311 58.7275 38.6214 61.7522 38.6214 61.7522L40.8473 47.8096L56.5439 39.8214C58.0177 39.142 59.4312 37.8457 60.4733 36.2177C61.5155 34.5897 62.5113 32.7798 62.5113 31.1569L62.3705 23.5844C61.8264 21.464 56.8214 18.0753 54.5267 17.6004C53.6723 17.4235 51.911 17.6004 49.7994 18.5466L30.254 27.5571C28.7802 28.2365 27.3668 29.5328 26.3246 31.1608Z" />
                                <path class="svg-icon-prime svg-icon-stroke"
                                    d="M31.9288 39.321C31.9288 37.6981 32.5142 35.8718 33.5564 34.2438C34.5985 32.6158 36.012 31.3195 37.4858 30.6401L57.0311 21.6296C58.5049 20.9501 59.9184 20.9432 60.9605 21.6103C62.0027 22.2774 62.5881 23.564 62.5881 25.1868V38.269C62.5881 39.8919 62.0027 41.7182 60.9605 43.3462C59.9184 44.9742 58.5049 46.2705 57.0311 46.9499L49.0957 50.6082L40.7794 60.9055C39.6373 62.3199 38.0606 62.1471 38.0606 60.6076V55.6954L37.4858 55.9605C36.012 56.6399 34.5985 56.6468 33.5564 55.9797C32.5142 55.3126 31.9288 54.0261 31.9288 52.4032V39.321Z" />
                                <path class="svg-icon-outline-i" d="M37.7524 37.3866L56.6174 28.6221" />
                                <path class="svg-icon-outline-i" d="M37.7524 43.6824L47.7968 39.0159" />
                                <path class="svg-icon-outline-i" d="M37.7524 50.1659L52.8171 43.167" />
                            </svg>
                            <span class="item-text">Support</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">

                            <li menuItemName="Contact Us" class=" " id="Primary_Navbar-Support-Contact_Us">
                                <a href="/user/contact.php">
                                    <i class="fas fa-test ls ls-chat-clouds"></i>
                                    Contact Us
                                </a>
                            </li>

                            <li menuItemName="Divider-138" class="nav-divider " id="Primary_Navbar-Support-Divider-138">
                                -----
                            </li>

                            <li menuItemName="Network Status" class=" " id="Primary_Navbar-Support-Network_Status">
                                <a href="/user/serverstatus.php">
                                    <i class="fas fa-test ls ls-spark"></i>
                                    Network Status
                                </a>
                            </li>

                            <li menuItemName="Knowledgebase" class=" " id="Primary_Navbar-Support-Knowledgebase">
                                <a href="/user/knowledgebase">
                                    <i class="fas fa-test ls ls-document-info"></i>
                                    Knowledgebase
                                </a>
                            </li>

                            <li menuItemName="News" class=" " id="Primary_Navbar-Support-News">
                                <a href="/user/announcements">
                                    <i class="fas fa-test ls ls-document"></i>
                                    News
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Register" class=" nav-item-btn is-right d-md-none d-lg-flex"
                        id="Primary_Navbar-Register">

                        <a class="btn btn-outline btn-default" href="/user/register.php">
                            <span>Register</span>
                        </a>
                    </li>
                    <li menuItemName="Login" class=" nav-item-btn is-right d-md-none d-lg-flex"
                        id="Primary_Navbar-Login">

                        <a class="btn btn-primary" href="/user/login.php">
                            <span>Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="app-main ">
        <div class="main-header">
            <div class="container">

                <h1 class="main-header-title">
                    Choose a Domain...
                </h1>
            </div>
        </div>
        <div class="main-body">
            <div class="container">




                <script type="text/javascript" src="/user/templates/orderforms/lagom2/js/order.min.js?v=2.1.2"></script>
                <div class="main-content ">
                    <form id="frmProductDomain">
                        <input type="hidden" id="frmProductDomainPid" value="1" />
                        <div class="panel panel-choose-domain">
                            <div class="panel-body panel-domain-option">
                                <div class="content">
                                    <label class="radio">
                                        <input type="radio" class="icheck-control" name="domainoption" value="register"
                                            id="selregister" checked /><span>Register a new domain</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" class="icheck-control" name="domainoption" value="transfer"
                                            id="seltransfer" /><span>Transfer your domain from another registrar</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" class="icheck-control" name="domainoption" value="owndomain"
                                            id="selowndomain" /><span>I will use my existing domain and update my
                                            nameservers</span>
                                    </label>
                                </div>
                            </div>
                            <div class="panel-body panel-domain-search panel-domain-search-secondary">
                                <div class="inline-form " id="domainregister">
                                    <div class="inline-form-element w-100">
                                        <input class="form-control input-lg" type="text" placeholder="Search domain"
                                            id="registersld" value="" autocapitalize="none" data-toggle="tooltip"
                                            data-placement="top" data-trigger="manual"
                                            title="Please enter your domain" />
                                    </div>
                                    <div class="inline-form-element">
                                        <div class="dropdown" data-dropdown-select>
                                            <div class="dropdown-toggle" data-toggle="dropdown" href="#"
                                                aria-expanded="true">
                                                <input name="domaintld" id="registertld" type="hidden"
                                                    data-dropdown-select-value value=".com">
                                                <div class="tld-select">
                                                    <span data-dropdown-select-value-view>
                                                        .com

                                                    </span>
                                                    <b class="caret"></b>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-search pull-right">
                                                <div class="dropdown-header input-group align-center">
                                                    <i class="input-group-icon lm lm-search"></i>
                                                    <input class="form-control" placeholder="Search..." type="text"
                                                        data-dropdown-select-search>
                                                </div>
                                                <div class="dropdown-menu-items has-scroll" data-dropdown-select-list>
                                                    <div class="dropdown-menu-item active" data-value=".com">
                                                        <a class="">.com</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".in">
                                                        <a class="">.in</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".net">
                                                        <a class="">.net</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".org">
                                                        <a class="">.org</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".info">
                                                        <a class="">.info</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".us">
                                                        <a class="">.us</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".uk">
                                                        <a class="">.uk</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".co.uk">
                                                        <a class="">.co.uk</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".co.in">
                                                        <a class="">.co.in</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".xyz">
                                                        <a class="">.xyz</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".site">
                                                        <a class="">.site</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".co">
                                                        <a class="">.co</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".shop">
                                                        <a class="">.shop</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".online">
                                                        <a class="">.online</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".tech">
                                                        <a class="">.tech</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".store">
                                                        <a class="">.store</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".club">
                                                        <a class="">.club</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".pro">
                                                        <a class="">.pro</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".website">
                                                        <a class="">.website</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".live">
                                                        <a class="">.live</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".buzz">
                                                        <a class="">.buzz</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".top">
                                                        <a class="">.top</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".co.za">
                                                        <a class="">.co.za</a>
                                                    </div>
                                                    <div class="dropdown-menu-item " data-value=".one">
                                                        <a class="">.one</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu-item dropdown-menu-no-data">
                                                    <span class="text-info text-large">
                                                        No Records Found
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-form-element">
                                        <button class="btn btn-lg btn-primary" type="submit">
                                            <span>Check</span>
                                            <div class="loader loader-button">

                                                <div class="spinner spinner-sm spinner-light">
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
                                <div class="inline-form hidden" id="domaintransfer">
                                    <div class="inline-form-element w-100">
                                        <input class="form-control input-lg" type="text" id="transfersld"
                                            placeholder="Search domain" value="" autocapitalize="none"
                                            data-toggle="tooltip" data-placement="top" data-trigger="manual"
                                            title="Please enter your domain" />
                                    </div>
                                    <div class="inline-form-element">
                                        <div class="dropdown" data-dropdown-select>
                                            <div class="dropdown-toggle" data-toggle="dropdown" href="#"
                                                aria-expanded="true">
                                                <input name="domaintld" id="transfertld" type="hidden"
                                                    data-dropdown-select-value value=".com">
                                                <div class="tld-select">
                                                    <span data-dropdown-select-value-view>
                                                        .com

                                                    </span>
                                                    <b class="caret"></b>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-search pull-right">
                                                <div class="dropdown-header input-group align-center">
                                                    <i class="input-group-icon lm lm-search"></i>
                                                    <input class="form-control" placeholder="Search..." type="text"
                                                        data-dropdown-select-search>
                                                </div>
                                                <div class="dropdown-menu-items has-scroll" data-dropdown-select-list>
                                                    <div class="dropdown-menu-item" data-value=".com">
                                                        <a class="">.com</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".in">
                                                        <a class="">.in</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".net">
                                                        <a class="">.net</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".org">
                                                        <a class="">.org</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".info">
                                                        <a class="">.info</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".us">
                                                        <a class="">.us</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".uk">
                                                        <a class="">.uk</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".co.uk">
                                                        <a class="">.co.uk</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".co.in">
                                                        <a class="">.co.in</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".xyz">
                                                        <a class="">.xyz</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".site">
                                                        <a class="">.site</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".co">
                                                        <a class="">.co</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".shop">
                                                        <a class="">.shop</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".online">
                                                        <a class="">.online</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".tech">
                                                        <a class="">.tech</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".store">
                                                        <a class="">.store</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".club">
                                                        <a class="">.club</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".pro">
                                                        <a class="">.pro</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".website">
                                                        <a class="">.website</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".live">
                                                        <a class="">.live</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".buzz">
                                                        <a class="">.buzz</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".top">
                                                        <a class="">.top</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".co.za">
                                                        <a class="">.co.za</a>
                                                    </div>
                                                    <div class="dropdown-menu-item" data-value=".one">
                                                        <a class="">.one</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu-item dropdown-menu-no-data">
                                                    <span class="text-info text-large">
                                                        No Records Found
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-form-element">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            <span>Transfer</span>
                                            <div class="loader loader-button">

                                                <div class="spinner spinner-sm spinner-light">
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
                                <div class="inline-form hidden" id="domainowndomain">
                                    <div class="inline-form-element w-100">
                                        <input type="text" id="owndomainsld" value="" placeholder="example"
                                            class="form-control input-lg" autocapitalize="none" data-toggle="tooltip"
                                            data-placement="top" data-trigger="manual"
                                            title="Please enter your domain" />
                                    </div>
                                    <div class="inline-form-element">
                                        <input type="text" id="owndomaintld" value="" placeholder="com"
                                            class="form-control input-lg" autocapitalize="none" data-toggle="tooltip"
                                            data-placement="top" data-trigger="manual" title="Required" />
                                    </div>
                                    <div class="inline-form-element">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            <span>Use</span>
                                            <div class="loader loader-button">

                                                <div class="spinner spinner-sm spinner-light">
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
                        </div>
                    </form>

                    <form method="post" action="/user/cart.php?a=add&pid=1&domainselect=1"
                        id="frmProductDomainSelections">
                        <input type="hidden" name="token" value="68a9b3bb7218b23e182704f0d0527e515865e108" />

                        <input type="hidden" id="resultDomainOption" name="domainoption" />
                        <input type="hidden" id="resultDomain" name="domains[]" />
                        <input type="hidden" id="resultDomainPricingTerm" />
                        <div id="DomainSearchResults" class="hidden">
                            <div id="searchDomainInfo" class="domain-checker-result-headline">
                                <div id="primaryLookupResult">
                                    <div id="idnLanguageSelector"
                                        class="message message-no-data idn-language-selector idn-language hidden">
                                        <p class="text-center">
                                            We detected the domain you entered is an international domain name. In order
                                            to continue, please select your desired domain language.
                                        </p>
                                        <div class="form-group w-100 m-b-0">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <select name="idnlanguage" class="form-control">
                                                        <option value="">Choose IDN Language</option>
                                                        <option value="afr">Afrikaans</option>
                                                        <option value="alb">Albanian</option>
                                                        <option value="ara">Arabic</option>
                                                        <option value="arg">Aragonese</option>
                                                        <option value="arm">Armenian</option>
                                                        <option value="asm">Assamese</option>
                                                        <option value="ast">Asturian</option>
                                                        <option value="ave">Avestan</option>
                                                        <option value="awa">Awadhi</option>
                                                        <option value="aze">Azerbaijani</option>
                                                        <option value="ban">Balinese</option>
                                                        <option value="bal">Baluchi</option>
                                                        <option value="bas">Basa</option>
                                                        <option value="bak">Bashkir</option>
                                                        <option value="baq">Basque</option>
                                                        <option value="bel">Belarusian</option>
                                                        <option value="ben">Bengali</option>
                                                        <option value="bho">Bhojpuri</option>
                                                        <option value="bos">Bosnian</option>
                                                        <option value="bul">Bulgarian</option>
                                                        <option value="bur">Burmese</option>
                                                        <option value="car">Carib</option>
                                                        <option value="cat">Catalan</option>
                                                        <option value="che">Chechen</option>
                                                        <option value="chi">Chinese</option>
                                                        <option value="chv">Chuvash</option>
                                                        <option value="cop">Coptic</option>
                                                        <option value="cos">Corsican</option>
                                                        <option value="scr">Croatian</option>
                                                        <option value="cze">Czech</option>
                                                        <option value="dan">Danish</option>
                                                        <option value="div">Divehi</option>
                                                        <option value="doi">Dogri</option>
                                                        <option value="dut">Dutch</option>
                                                        <option value="eng">English</option>
                                                        <option value="est">Estonian</option>
                                                        <option value="fao">Faroese</option>
                                                        <option value="fij">Fijian</option>
                                                        <option value="fin">Finnish</option>
                                                        <option value="fre">French</option>
                                                        <option value="fry">Frisian</option>
                                                        <option value="gla">Gaelic; Scottish Gaelic</option>
                                                        <option value="geo">Georgian</option>
                                                        <option value="ger">German</option>
                                                        <option value="gon">Gondi</option>
                                                        <option value="gre">Greek</option>
                                                        <option value="guj">Gujarati</option>
                                                        <option value="heb">Hebrew</option>
                                                        <option value="hin">Hindi</option>
                                                        <option value="hun">Hungarian</option>
                                                        <option value="ice">Icelandic</option>
                                                        <option value="inc">Indic</option>
                                                        <option value="ind">Indonesian</option>
                                                        <option value="inh">Ingush</option>
                                                        <option value="gle">Irish</option>
                                                        <option value="ita">Italian</option>
                                                        <option value="jpn">Japanese</option>
                                                        <option value="jav">Javanese</option>
                                                        <option value="kas">Kashmiri</option>
                                                        <option value="kaz">Kazakh</option>
                                                        <option value="khm">Khmer</option>
                                                        <option value="kir">Kirghiz</option>
                                                        <option value="kor">Korean</option>
                                                        <option value="kur">Kurdish</option>
                                                        <option value="lao">Lao</option>
                                                        <option value="lat">Latin</option>
                                                        <option value="lav">Latvian</option>
                                                        <option value="lit">Lithuanian</option>
                                                        <option value="ltz">Luxembourgish</option>
                                                        <option value="mac">Macedonian</option>
                                                        <option value="may">Malay</option>
                                                        <option value="mal">Malayalam</option>
                                                        <option value="mlt">Maltese</option>
                                                        <option value="mao">Maori</option>
                                                        <option value="mol">Moldavian</option>
                                                        <option value="mon">Mongolian</option>
                                                        <option value="nep">Nepali</option>
                                                        <option value="nor">Norwegian</option>
                                                        <option value="ori">Oriya</option>
                                                        <option value="oss">Ossetian</option>
                                                        <option value="per">Persian</option>
                                                        <option value="pol">Polish</option>
                                                        <option value="por">Portuguese</option>
                                                        <option value="pan">Punjabi</option>
                                                        <option value="pus">Pushto</option>
                                                        <option value="raj">Rajasthani</option>
                                                        <option value="rum">Romanian</option>
                                                        <option value="rus">Russian</option>
                                                        <option value="smo">Samoan</option>
                                                        <option value="san">Sanskrit</option>
                                                        <option value="srd">Sardinian</option>
                                                        <option value="scc">Serbian</option>
                                                        <option value="snd">Sindhi</option>
                                                        <option value="sin">Sinhalese</option>
                                                        <option value="slo">Slovak</option>
                                                        <option value="slv">Slovenian</option>
                                                        <option value="som">Somali</option>
                                                        <option value="spa">Spanish</option>
                                                        <option value="swa">Swahili</option>
                                                        <option value="swe">Swedish</option>
                                                        <option value="syr">Syriac</option>
                                                        <option value="tgk">Tajik</option>
                                                        <option value="tam">Tamil</option>
                                                        <option value="tel">Telugu</option>
                                                        <option value="tha">Thai</option>
                                                        <option value="tib">Tibetan</option>
                                                        <option value="tur">Turkish</option>
                                                        <option value="ukr">Ukrainian</option>
                                                        <option value="urd">Urdu</option>
                                                        <option value="uzb">Uzbek</option>
                                                        <option value="vie">Vietnamese</option>
                                                        <option value="wel">Welsh</option>
                                                        <option value="yid">Yiddish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="field-error-msg help-block text-center text-danger">
                                                Please select the language of the domain you wish to register.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="domain-available message message-lg message-success message-h">
                                        <div class="message-content m-w-lg">
                                            <div class="message-icon">
                                                <i class="lm lm-check"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-title">
                                                    <strong class="word-break-all"></strong>
                                                </div>
                                                <div class="domain-price">
                                                    <div class="price price-sm price-left"></div>
                                                </div>
                                            </div>
                                            <div class="message-actions">
                                                <div class="btn-group btn-group-remove">
                                                    <button type="submit"
                                                        class="btn btn-lg btn-primary-faded btn-add-to-cart"
                                                        data-product-domain=true data-whois="0" data-domain="">
                                                        <span class="to-add">Add to Cart</span>
                                                        <span class="added"><i class="lm lm-check"></i>Added</span>
                                                        <span class="unavailable" style="display: none;">Taken</span>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-lg btn-primary btn-remove-domain hidden"
                                                        data-system-template="lagom2" data-domain=""
                                                        data-toggle="tooltip" title="Remove">
                                                        <i class="lm lm-trash"></i>
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
                                    </div>
                                    <div class="domain-unavailable message message-lg message-danger message-h">
                                        <div class="message-icon">
                                            <i class="lm lm-close"></i>
                                        </div>
                                        <div class="message-body">
                                            <p class="message-title"><strong>:domain</strong> is unavailable</p>
                                        </div>
                                    </div>
                                    <div class="domain-invalid message message-lg message-danger message-h">
                                        <div class="message-icon">
                                            <i class="lm lm-close"></i>
                                        </div>
                                        <div class="message-body">
                                            <p class="message-title">Invalid domain name provided</p>
                                            <p class="text-light">
                                                Domains must begin with a letter or a number<span
                                                    class="domain-length-restrictions"> and be between <span
                                                        class="min-length"></span> and <span class="max-length"></span>
                                                    characters in length</span>
                                                <br />
                                                Please check your entry and try again.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="domain-error message message-lg message-danger message-h">
                                        <div class="message-icon">
                                            <i class="lm lm-close"></i>
                                        </div>
                                        <div class="message-body">
                                            <p class="message-title"></p>
                                        </div>
                                    </div>
                                    <div class="transfer-eligible message message-lg message-success message-h">
                                        <div class="message-icon">
                                            <i class="lm lm-check"></i>
                                        </div>
                                        <div class="message-body">
                                            <p class="message-title">Your domain is eligible for transfer</p>
                                            <p class="text-light">
                                                <span class="transfer-eligible-desc-uk hidden">Please ensure that you
                                                    change your domains IPSTAG once you have placed this order and not
                                                    before, the tag will be in your order confirmation email.</span>
                                                <span class="transfer-eligible-desc hidden">Please ensure you have
                                                    unlocked your domain at your current registrar before
                                                    continuing.</span>
                                            </p>
                                            <div class="domain-price">
                                                <span class="domain-price-text">Transfer to us and extend by 1 year*
                                                    for</span>
                                                <div class="price price-sm price-left"></div>
                                            </div>
                                        </div>
                                        <div class="message-actions">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="ls ls-share m-r-8"></i>Continue
                                            </button>
                                        </div>
                                    </div>
                                    <div class="transfer-not-eligible message message-lg message-danger message-h">
                                        <div class="message-icon">
                                            <i class="lm lm-close"></i>
                                        </div>
                                        <div class="message-body">
                                            <p class="message-title">Not Eligible for Transfer</p>
                                            <p class="text-light">
                                                The domain you entered does not appear to be registered.
                                                <br />
                                                If the domain was registered recently, you may need to try again later.
                                                <br />
                                                Alternatively, you can perform a search to register this domain.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section spotlight-tlds new" id="spotlightTlds">
                                <div class="section-header">
                                    <h2 class="section-title">Most Popular</h2>
                                </div>
                                <div class="section-body">
                                    <div class="spotlights">
                                        <div class="spotlight-col swiper-slide col">
                                            <div class="spotlight" id="spotlightcom">
                                                <div class="spotlight-body">
                                                    <div class="spotlight-top">
                                                        <div class="spotlight-price">
                                                            <span>₹599.00 INR</span>
                                                        </div>
                                                        <div class="spotlight-content">
                                                            <span class="extension"><span>.</span>com</span>
                                                        </div>
                                                        <div class="spotlight-footer domain-lookup-result">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block unavailable btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block invalid btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <div class="btn-group btn-group-remove">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary-faded btn-add-to-cart hidden"
                                                                    data-whois="0" data-domain="">
                                                                    <span class="to-add">Add</span>
                                                                    <span class="added"><i
                                                                            class="ls ls-check"></i>Added</span>
                                                                    <span class="unavailable">Taken</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-remove-domain hidden"
                                                                    data-system-template="lagom2" data-domain=""
                                                                    data-toggle="tooltip" title="Remove">
                                                                    <i class="ls ls-trash"></i>
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
                                                            <button type="button"
                                                                class="btn btn-primary-faded btn-sm btn-loading">
                                                                <span class="invisible"></span>

                                                                <div class="spinner spinner-sm">
                                                                    <div class="rect1"></div>
                                                                    <div class="rect2"></div>
                                                                    <div class="rect3"></div>
                                                                    <div class="rect4"></div>
                                                                    <div class="rect5"></div>
                                                                </div>


                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spotlight-col swiper-slide col">
                                            <div class="spotlight" id="spotlightin">
                                                <div class="spotlight-body">
                                                    <div class="spotlight-top">
                                                        <div class="spotlight-price">
                                                            <span>₹499.00 INR</span>
                                                        </div>
                                                        <div class="spotlight-content">
                                                            <span class="extension"><span>.</span>in</span>
                                                        </div>
                                                        <div class="spotlight-footer domain-lookup-result">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block unavailable btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block invalid btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <div class="btn-group btn-group-remove">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary-faded btn-add-to-cart hidden"
                                                                    data-whois="0" data-domain="">
                                                                    <span class="to-add">Add</span>
                                                                    <span class="added"><i
                                                                            class="ls ls-check"></i>Added</span>
                                                                    <span class="unavailable">Taken</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-remove-domain hidden"
                                                                    data-system-template="lagom2" data-domain=""
                                                                    data-toggle="tooltip" title="Remove">
                                                                    <i class="ls ls-trash"></i>
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
                                                            <button type="button"
                                                                class="btn btn-primary-faded btn-sm btn-loading">
                                                                <span class="invisible"></span>

                                                                <div class="spinner spinner-sm">
                                                                    <div class="rect1"></div>
                                                                    <div class="rect2"></div>
                                                                    <div class="rect3"></div>
                                                                    <div class="rect4"></div>
                                                                    <div class="rect5"></div>
                                                                </div>


                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spotlight-col swiper-slide col">
                                            <div class="spotlight" id="spotlightnet">
                                                <div class="spotlight-body">
                                                    <div class="spotlight-top">
                                                        <div class="spotlight-price">
                                                            <span>₹829.00 INR</span>
                                                        </div>
                                                        <div class="spotlight-content">
                                                            <span class="extension"><span>.</span>net</span>
                                                        </div>
                                                        <div class="spotlight-footer domain-lookup-result">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block unavailable btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block invalid btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <div class="btn-group btn-group-remove">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary-faded btn-add-to-cart hidden"
                                                                    data-whois="0" data-domain="">
                                                                    <span class="to-add">Add</span>
                                                                    <span class="added"><i
                                                                            class="ls ls-check"></i>Added</span>
                                                                    <span class="unavailable">Taken</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-remove-domain hidden"
                                                                    data-system-template="lagom2" data-domain=""
                                                                    data-toggle="tooltip" title="Remove">
                                                                    <i class="ls ls-trash"></i>
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
                                                            <button type="button"
                                                                class="btn btn-primary-faded btn-sm btn-loading">
                                                                <span class="invisible"></span>

                                                                <div class="spinner spinner-sm">
                                                                    <div class="rect1"></div>
                                                                    <div class="rect2"></div>
                                                                    <div class="rect3"></div>
                                                                    <div class="rect4"></div>
                                                                    <div class="rect5"></div>
                                                                </div>


                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spotlight-col swiper-slide col">
                                            <div class="spotlight" id="spotlightorg">
                                                <div class="spotlight-body">
                                                    <div class="spotlight-top">
                                                        <div class="spotlight-price">
                                                            <span>₹699.00 INR</span>
                                                        </div>
                                                        <div class="spotlight-content">
                                                            <span class="extension"><span>.</span>org</span>
                                                        </div>
                                                        <div class="spotlight-footer domain-lookup-result">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block unavailable btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-faded btn-disabled btn-block invalid btn-unavailable hidden"
                                                                disabled="disabled">
                                                                Unavailable
                                                            </button>
                                                            <div class="btn-group btn-group-remove">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary-faded btn-add-to-cart hidden"
                                                                    data-whois="0" data-domain="">
                                                                    <span class="to-add">Add</span>
                                                                    <span class="added"><i
                                                                            class="ls ls-check"></i>Added</span>
                                                                    <span class="unavailable">Taken</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-remove-domain hidden"
                                                                    data-system-template="lagom2" data-domain=""
                                                                    data-toggle="tooltip" title="Remove">
                                                                    <i class="ls ls-trash"></i>
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
                                                            <button type="button"
                                                                class="btn btn-primary-faded btn-sm btn-loading">
                                                                <span class="invisible"></span>

                                                                <div class="spinner spinner-sm">
                                                                    <div class="rect1"></div>
                                                                    <div class="rect2"></div>
                                                                    <div class="rect3"></div>
                                                                    <div class="rect4"></div>
                                                                    <div class="rect5"></div>
                                                                </div>


                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section suggested-domains hidden">
                                <div class="section-header">
                                    <h2 class="section-title">Suggested Domains</h2>
                                    <p class="section-desc">Domain name suggestions may not always be available.
                                        Availability is checked in real-time at the point of adding to the cart.</p>
                                </div>
                                <ul class="domain-lookup-result list-group hidden" id="domainSuggestions">
                                    <li class="domain-suggestion list-group-item hidden">
                                        <div class="content">
                                            <span class="domain"></span><span class="extension"></span>
                                            <span class="promo hidden">
                                                <span class="sales-group-hot label label-danger hidden">Hot</span>
                                                <span class="sales-group-new label label-success hidden">New</span>
                                                <span class="sales-group-sale label label-purple hidden">Sale</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <span class="price price-xs price-right"></span>
                                            <div class="btn-group btn-group-remove">
                                                <button type="button"
                                                    class="btn btn-sm btn-primary-faded btn-add-to-cart" data-whois="1"
                                                    data-domain="">
                                                    <span class="to-add">Add to Cart</span>
                                                    <span class="added"><i class="ls ls-check"></i>Added</span>
                                                    <span class="unavailable">Taken</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-remove-domain hidden"
                                                    data-system-template="lagom2" data-domain="" title="Remove">
                                                    <i class="ls ls-trash"></i>
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
                                            <button type="button"
                                                class="btn btn-primary domain-contact-support hidden">Contact Support to
                                                Purchase</button>
                                        </div>
                                    </li>
                                </ul>
                                <div class="more-suggestions hidden">
                                    <a id="moreSuggestions" href="#" onclick="loadMoreSuggestions(); return false;">Give
                                        me more suggestions!</a>
                                    <span id="noMoreSuggestions" class="no-more small hidden">That's all the results we
                                        have for you! If you still haven't found what you're looking for, please try a
                                        different search term or keyword.</span>
                                </div>
                            </div>
                        </div>
                        <div id="bottom-action-anchor" class="bottom-action-anchor"></div>
                        <div class="bottom-action-sticky hidden" data-fixed-actions href="#bottom-action-anchor">
                            <div class="container">
                                <div class="sticky-content">
                                    <div class="badge badge-circle-lg" id="cartItemCount">0</div>
                                    <span class="m-l-1x">domain(s) selected</span>
                                </div>
                                <div class="sticky-actions">
                                    <button id="btnDomainContinue" type="submit" class="btn btn-lg btn-primary"
                                        disabled="disabled" data-btn-loader>
                                        <span><i class="ls ls-share"></i><span class="btn-text">Continue</span></span>
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
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="hidden" id="divProductHasRecommendations" data-value=""></div>
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


        <div class="main-footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright">Copyright &copy; 2024 JiXi Cloud. All Rights Reserved.</div>
                    <ul class="footer-nav footer-nav-h">
                        <li class="dropdown dropup" data-language-select>
                            <a data-toggle="dropdown" href="">
                                <span class="language-flag english"></span>
                                <spam>English</span>
                                    <b class="ls ls-caret"></b>
                            </a>
                            <div class="dropdown-menu dropdown-language-search  dropdown-menu-right">
                                <input type="hidden" data-language-select-value value="English">
                                <input type="hidden" data-language-select-backlink
                                    value="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;">
                                <input type="hidden" data-language-select-lang value="Select">
                                <div class="dropdown-header input-group align-center">
                                    <i class="input-group-icon lm lm-search"></i>
                                    <input class="form-control" placeholder="Search..." type="text"
                                        data-language-select-search>
                                </div>
                                <div class="nav-divider"></div>
                                <div class="dropdown-menu-items has-scroll" data-language-select-list>
                                    <div class="dropdown-menu-item " data-value="arabic" data-language="العربية">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=arabic">
                                            <span class="language-flag arabic"></span>
                                            <span class="language-text">العربية</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="azerbaijani"
                                        data-language="Azerbaijani">
                                        <a
                                            href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=azerbaijani">
                                            <span class="language-flag azerbaijani"></span>
                                            <span class="language-text">Azerbaijani</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="catalan" data-language="Català">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=catalan">
                                            <span class="language-flag catalan"></span>
                                            <span class="language-text">Català</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="chinese" data-language="中文">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=chinese">
                                            <span class="language-flag chinese"></span>
                                            <span class="language-text">中文</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="croatian" data-language="Hrvatski">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=croatian">
                                            <span class="language-flag croatian"></span>
                                            <span class="language-text">Hrvatski</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="czech" data-language="Čeština">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=czech">
                                            <span class="language-flag czech"></span>
                                            <span class="language-text">Čeština</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="danish" data-language="Dansk">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=danish">
                                            <span class="language-flag danish"></span>
                                            <span class="language-text">Dansk</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="dutch" data-language="Nederlands">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=dutch">
                                            <span class="language-flag dutch"></span>
                                            <span class="language-text">Nederlands</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item active" data-value="english" data-language="English">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=english">
                                            <span class="language-flag english"></span>
                                            <span class="language-text">English</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="estonian" data-language="Estonian">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=estonian">
                                            <span class="language-flag estonian"></span>
                                            <span class="language-text">Estonian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="farsi" data-language="Persian">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=farsi">
                                            <span class="language-flag farsi"></span>
                                            <span class="language-text">Persian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="french" data-language="Français">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=french">
                                            <span class="language-flag french"></span>
                                            <span class="language-text">Français</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="german" data-language="Deutsch">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=german">
                                            <span class="language-flag german"></span>
                                            <span class="language-text">Deutsch</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="hebrew" data-language="עברית">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=hebrew">
                                            <span class="language-flag hebrew"></span>
                                            <span class="language-text">עברית</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="hungarian" data-language="Magyar">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=hungarian">
                                            <span class="language-flag hungarian"></span>
                                            <span class="language-text">Magyar</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="italian" data-language="Italiano">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=italian">
                                            <span class="language-flag italian"></span>
                                            <span class="language-text">Italiano</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="macedonian" data-language="Macedonian">
                                        <a
                                            href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=macedonian">
                                            <span class="language-flag macedonian"></span>
                                            <span class="language-text">Macedonian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="norwegian" data-language="Norwegian">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=norwegian">
                                            <span class="language-flag norwegian"></span>
                                            <span class="language-text">Norwegian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="portuguese-br"
                                        data-language="Português">
                                        <a
                                            href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=portuguese-br">
                                            <span class="language-flag portuguese-br"></span>
                                            <span class="language-text">Português</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="portuguese-pt"
                                        data-language="Português">
                                        <a
                                            href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=portuguese-pt">
                                            <span class="language-flag portuguese-pt"></span>
                                            <span class="language-text">Português</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="romanian" data-language="Română">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=romanian">
                                            <span class="language-flag romanian"></span>
                                            <span class="language-text">Română</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="russian" data-language="Русский">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=russian">
                                            <span class="language-flag russian"></span>
                                            <span class="language-text">Русский</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="spanish" data-language="Español">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=spanish">
                                            <span class="language-flag spanish"></span>
                                            <span class="language-text">Español</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="swedish" data-language="Svenska">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=swedish">
                                            <span class="language-flag swedish"></span>
                                            <span class="language-text">Svenska</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="turkish" data-language="Türkçe">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=turkish">
                                            <span class="language-flag turkish"></span>
                                            <span class="language-text">Türkçe</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="ukranian" data-language="Українська">
                                        <a href="/user/store/cloud-hosting/basic?carttpl=lagom2&amp;language=ukranian">
                                            <span class="language-flag ukranian"></span>
                                            <span class="language-text">Українська</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-menu-item dropdown-menu-no-data">
                                    <span class="text-info text-large">
                                        No Records Found
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="lm lm-go-top"></i>
                            </a>
                        </li>
                    </ul>
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
    <script src="/user/templates/lagom2/assets/js/vendor.js?v=2.1.2"></script>
    <script src="/user/templates/lagom2/assets/js/lagom-app.js?v=2.1.2"></script>
    <script src="/user/templates/lagom2/assets/js/whmcs-custom.min.js?v=2.1.2"></script>
</body>

</html>