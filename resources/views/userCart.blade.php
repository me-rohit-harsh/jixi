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
    <body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-domainregister "
        data-phone-cc-input="1">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <div class="app-main ">
            <div class="main-header">
                <div class="container">
    
                    <h1 class="main-header-title">
                        Register Domain
                    </h1>
                </div>
            </div>
            <div class="main-body">
                <div class="container">
    
    
    
                    <script type="text/javascript" src="/user/templates/orderforms/lagom2/js/order.min.js?v=2.1.2"></script>
                    <div class="main-grid">
                        <div class="main-sidebar hidden-sm hidden-md">
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
                                        <i class="fas fa-solid fa-cloud"></i>
    
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
                                    <a menuItemName="Domain Registration" href="/user/domain" class="list-group-item active"
                                        id="Secondary_Sidebar-Actions-Domain_Registration">
                                      <i class="fas fa-solid fa-globe"></i>
    
                                        Register a New Domain
    
                                    </a>
                                    <a menuItemName="Domain Transfer" href="/user/transfer" class="list-group-item"
                                        id="Secondary_Sidebar-Actions-Domain_Transfer">
                                      <i class="fas fa-solid fa-arrow-right"></i>
                                        Transfer in a Domain
    
                                    </a>
                                    <a menuItemName="View Cart" href="/user/cart" class="list-group-item"
                                        id="Secondary_Sidebar-Actions-View_Cart">
                                        <i class="fa fa-shopping-cart"></i>
    
                                        View Cart
    
                                    </a>
                                </div>
    
                            </div>
    
    
                        </div>
                        <div class="main-content ">
                            <div class="categories-collapsed visible-xs visible-sm visible-md clearfix">
                                <div class="categories-sidebar">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-default">
                                            Register a New Domain
    
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
                                                    href="/user/domain?a=add&domain=register" class=" active"
                                                    id="Secondary_Sidebar-Actions-Domain_Registration">
                                                    Register a New Domain
                                                </a>
                                            </li>
                                            <li>
                                                <a menuItemName="Domain Transfer"
                                                    href="/user/domain?a=add&domain=transfer" class=""
                                                    id="Secondary_Sidebar-Actions-Domain_Transfer">
                                                    Transfer in a Domain
                                                </a>
                                            </li>
                                            <li>
                                                <a menuItemName="View Cart" href="/user/cart" class=""
                                                    id="Secondary_Sidebar-Actions-View_Cart">
                                                    View Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="search-box search-box-secondary">
                                <form method="post" action="/user/domain" id="frmDomainChecker">
                                    <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                                    <input type="hidden" name="a" value="checkDomain">
                                    <div class="domain-search-input search-group">
                                        <div class="search-field search-field-lg">
                                            <i class="search-field-icon fa-solid fa-magnifying-glass"></i>
                                            <input class="form-control form-control-lg" type="text" name="domain"
                                                placeholder="Find your new domain name" value="" id="inputDomain"
                                                data-toggle="tooltip" data-delay="100" data-placement="top"
                                                data-trigger="manual" title="Enter a domain or keyword" />
                                        </div>
                                        <div class="search-group-btn">
                                            <button class="btn SubmitButton btn-lg btn-primary domain-check-availability " type="button"
                                                id="btnCheckAvailability">
                                                <span>Search</span>
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
                                </form>
                            </div>
                            <div id="DomainSearchResults" class="hidden">
                                <div class="domain-checker-result-headline" id="searchDomainInfo">
                                    <div id="primaryLookupResult" class="hidden">
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
                                                        <button type="button"
                                                            class="btn btn-lg btn-primary-faded btn-add-to-cart"
                                                            data-whois="0" data-domain="">
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
                            <div class="section domain-pricing">
                                <div class="featured-tlds swiper-tld swiper-container">
                                    <div class="row swiper-wrapper">
                                        <div class=" col-sm-6 swiper-slide">
                                            <div class="featured-tld">
                                                <div class="img-container">
                                                    <img src="https://jixicloud.com/user/assets/img/tld_logos/com.png">
                                                </div>
                                                <div class="featured-tld-price com">
                                                    ₹599.00 INR/yr </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 swiper-slide">
                                            <div class="featured-tld">
                                                <div class="img-container">
                                                    <img src="https://jixicloud.com/user/assets/img/tld_logos/net.png">
                                                </div>
                                                <div class="featured-tld-price net">
                                                    ₹829.00 INR/yr </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="section domain-pricing">
                                <div class="section-header">
                                    <h2 class="section-title">Browse extensions by category</h2>
                                </div>
                                <div class="section-body">
    
                                    <link rel="stylesheet" type="text/css"
                                        href="/user/assets/css/dataTables.responsive.css">
                                    <script type="text/javascript"
                                        src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js">
                                    </script>
    
    
                                    <script type="text/javascript">
                                        function checkAll(){
                let checkAll = $('#selectAll');
                let checkboxes = $('.domids').not(':disabled');
                checkAll.on('ifChecked ifUnchecked', function(e) {
                    if (e.type == 'ifChecked') {
                        checkboxes.iCheck('check');
                    } else {
                        checkboxes.iCheck('uncheck');
                    }
                });
                checkboxes.on('ifChanged', function(e){
                    if(checkboxes.filter(':checked').length > 0){
                        $('#domainSelectedCounter').addClass('badge-primary');
                        $('.bottom-action-sticky').removeClass('hidden');           
                    }
                    else{
                        $('#domainSelectedCounter').removeClass('badge-primary');
                        $('.bottom-action-sticky').addClass('hidden');   
                    }
                    $('#domainSelectedCounter').text(checkboxes.filter(':checked').length);
                    if(checkboxes.filter(':checked').length == checkboxes.length) {
                        checkAll.prop('checked', 'checked');
                    } else {
                        checkAll.removeProp('checked');
                    }
                    checkAll.iCheck('update');
                });
            };
    
            var alreadyReady = false; // The ready function is being called twice on page load.
    
                        var saveState = true;
            
            jQuery(document).ready( function () {
    
                var table = jQuery("#tableDomainPricing").DataTable({
                    "dom": '<"listtable"fit>pl',                "info": false,                "responsive": true,
                    "oLanguage": {
                        "sEmptyTable":     "No Records Found",
                        "sInfo":           "Showing _START_ to _END_ of _TOTAL_ entries",
                        "sInfoEmpty":      "Showing 0 to 0 of 0 entries",
                        "sInfoFiltered":   "(filtered from _MAX_ total entries)",
                        "sInfoPostFix":    "",
                        "sInfoThousands":  ",",
                        "sLengthMenu":     "Show _MENU_ entries",
                        "sLoadingRecords": "Loading...",
                        "sProcessing":     "Processing...",
                        "sSearch":         "",
                        "sZeroRecords":    "No Records Found",
                        "oPaginate": {
                            "sFirst":    "First",
                            "sLast":     "Last",
                            "sNext":     "Next",
                            "sPrevious": "Previous"
                        }
                    },
                    "pageLength": 10,
                    "order": [
                        [ 0, "asc" ]
                    ],
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    "aoColumnDefs": [
                        {
                            "bSortable": false,
                            "aTargets": [  ]
                        },
                        {
                            "sType": "string",
                            "aTargets": [  ]
                        }
                    ],
                    "stateSave": saveState,
                    "autoWidth": false,
                });
                   
                            alreadyReady = true;
                if ($('#table-search').length > 0 && $('.dataTables_filter').length > 0){
                    var searchTableVal = $('.dataTables_filter input').val();
                    $('#table-search').val(searchTableVal);
                    var searchVal = $('#table-search').val();
                    table.search(searchVal, true).draw();
                }
    
                $('#table-search').on('keyup', function () {
                    table.search(this.value, true).draw();
                });
                table.on('draw.dt', function () {
                    $('body').find('input:not(.icheck-input):not(.switch__checkbox)').iCheck({
                        checkboxClass: 'checkbox-styled',
                        radioClass: 'radio-styled',
                        increaseArea: '40%'
                    });
                    checkAll();
    
                });  
    
                $('[data-inactive-services-checkbox]').on('change', function(){
                    if ($(this)[0].checked === true) {
                        table.column(0).search("lagomshowservice", true, false, false).draw();      
                    }
                    else {
                        table.column(0).search("", true, false, false).draw();    
                    }
                });
                
                                    });
    
                                    </script>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function(){
                        var table = jQuery('#tableDomainPricing').removeClass('hidden').DataTable();
                                            table.draw();
                        jQuery('#tableLoading').addClass('hidden');
                    });
                                    </script>
                                    <div class="tld-toolbar">
                                        <div class="tld-categories">
                                            <select multiple class="form-control custom-multiselect" id="domain-filter">
                                                <option value="All" selected>All (24)</option>
                                                <option value="Popular">Popular (12)</option>
                                                <option value="Geographic">Geographic (1)</option>
                                                <option value="Technology">Technology (4)</option>
                                                <option value="Shopping">Shopping (2)</option>
                                                <option value="Novelty">Novelty (2)</option>
                                                <option value="Other">Other (7)</option>
                                            </select>
                                        </div>
                                        <div class="tld-search search-group">
                                            <div class="search-field">
                                               <i class="search-field-icon fa-solid fa-magnifying-glass"></i>
                                                <input type="text" id="table-search" class="form-control"
                                                    placeholder="Enter search term...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tld-table table-container clearfix">
                                        <table class="table table-list hidden" id="tableDomainPricing">
                                            <thead>
                                                <tr>
                                                    <th>Domain</th>
                                                    <th class="hidden">Category</th>
                                                    <th>New Price</th>
                                                    <th>Transfer</th>
                                                    <th>Renewal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>com</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹849.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>in</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹499.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹575.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹575.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>net</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹829.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>org</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹875.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹899.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>info</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>us</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹399.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹725.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>uk</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                        Geographic
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>co.uk</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>co.in</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹399.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹499.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹499.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>xyz</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                        Novelty
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>site</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                        Technology
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>co</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹749.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,899.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,899.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>shop</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Shopping
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹2,199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹2,199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>online</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                        Technology
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹2,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹2,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>tech</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Technology
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹3,049.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹2,999.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>store</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Shopping
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹2,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹2,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>club</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>pro</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹249.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>website</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Technology
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,425.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,425.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>live</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,599.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>buzz</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹149.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹2,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹2,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>top</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Popular
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹699.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>co.za</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Other
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹499.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹649.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹649.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="tld-name"><span>.</span>one</strong>
                                                    </td>
                                                    <td class="hidden">
                                                        All
                                                        Novelty
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">New Price</span>
                                                        ₹199.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Transfer</span>
                                                        ₹1,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                    <td>
                                                        <span class="tld-label">Renewal</span>
                                                        ₹1,299.00 INR<br>
                                                        <small>1 Year</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="loder loader-table" id="tableLoading">
    
                                            <div class="spinner ">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                                <div class="rect4"></div>
                                                <div class="rect5"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <div class="section-body">
                                    <div class="row row-eq-height row-eq-height-sm">
                                        <div class="col-md-6">
                                            <div class="domain-promo-box">
                                                <div class="promo-box-body">
                                                    <div class="promo-box-content">
                                                        <div class="promo-box-icon">
                                                            <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="64px" height="64px" viewBox="0 0 64 64"
                                                                style="enable-background:new 0 0 64 64;"
                                                                xml:space="preserve">
                                                                <polygon class="svg-icon-prime svg-icon-stroke"
                                                                    points="59,47.4 59,36.2 32,48 5,36.2 5,47.4 32,63 " />
                                                                <polygon class="svg-icon-prime-l svg-icon-stroke"
                                                                    points="32,44.3 11.2,32.3 5,35.9 32,51.5 59,35.9 52.8,32.3 " />
                                                                <line class="svg-icon-outline-s" x1="32" y1="32.7" x2="32"
                                                                    y2="43.2" />
                                                                <polyline class="svg-icon-outline-s"
                                                                    points="5.5,16.9 32,32.2 58.5,16.9 " />
                                                                <polygon class="svg-icon-outline-s"
                                                                    points="5,16.6 5,28.1 32,43.7 59,28.1 59,16.6 32,1 " />
                                                                <line class="svg-icon-outline-s" x1="37" y1="34.8" x2="44"
                                                                    y2="30.7" />
                                                            </svg>
                                                        </div>
                                                        <div class="promo-box-header">
                                                            <h5>Add Web Hosting</h5>
                                                            <p class="description">Choose from a range of web hosting
                                                                packages</p>
                                                        </div>
                                                    </div>
                                                    <div class="promo-box-content promo-box-content-between">
                                                        <p class="promo-description">We have packages designed to fit every
                                                            budget</p>
                                                        <a href="/user/domain" class=" SubmitButton btn btn-primary">
                                                            Explore packages now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="domain-promo-box">
                                                <div class="promo-box-body">
                                                    <div class="promo-box-content">
                                                        <div class="promo-box-icon">
                                                            <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="64px" height="64px" viewBox="0 0 64 64"
                                                                style="enable-background:new 0 0 64 64;"
                                                                xml:space="preserve">
                                                                <polygon class="svg-icon-prime-l svg-icon-stroke"
                                                                    points="50,36.4 46,34.1 42,36.4 35.8,32.9 33,34.5 28.2,31.7 21,35.9 49,57.8 59,52" />
                                                                <polygon class="svg-icon-prime svg-icon-stroke"
                                                                    points="36,44.5 21,35.9 21,47.4 36,56.1 36,60.7 40,63 49,57.8 40,42.2 36,39.9" />
                                                                <polyline class="svg-icon-outline-s"
                                                                    points="42.7,16.8 33,22.4 33,33.4" />
                                                                <polyline class="svg-icon-outline-s"
                                                                    points="32.8,22.3 18,13.7 18,9.1 14.2,6.9" />
                                                                <line class="svg-icon-outline-s" x1="27.7" y1="8.1"
                                                                    x2="18.3" y2="13.5" />
                                                                <line class="svg-icon-outline-s" x1="18.3" y1="8.9"
                                                                    x2="27.7" y2="3.5" />
                                                                <polygon class="svg-icon-outline-s"
                                                                    points="33,33.9 43,28.1 43,16.6 28,7.9 28,3.3 24,1 5,12 14,27.6 18,29.9 18,25.2" />
                                                                <line class="svg-icon-outline-s" x1="18.1" y1="29.9"
                                                                    x2="21.8" y2="27.7" />
                                                            </svg>
                                                        </div>
                                                        <div class="promo-box-header">
                                                            <h5>Transfer your domain to us</h5>
                                                            <p class="description text-primary">Transfer now to extend your
                                                                domain by 1 year!*</p>
                                                        </div>
                                                    </div>
                                                    <div class="promo-box-content promo-box-content-between">
                                                        <p class="promo-description">* Excludes certain TLDs and recently
                                                            renewed domains</p>
                                                        <a href="/user/transfer" class="btn btn-primary SubmitButton">Transfer a
                                                            domain</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <a class="btn btn-lg btn-primary" href="cart.php?a=confdomains"
                                            id="btnDomainContinue" data-btn-loader>
                                            <span>
                                                <i class="ls ls-share"></i>
                                                <span class="btn-text">Continue</span>
                                            </span>
                                            <div class="loader loader-button hidden">
    
                                                <div class="spinner spinner-sm spinner-light">
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
                        </div>
                    </div>
                    <script>
                        jQuery(document).ready(function() {
                                                });
                    </script>
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