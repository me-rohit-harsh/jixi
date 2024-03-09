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
    <body class="lagom lagom-not-portal lagom-layout-top lagom-default page-order page-configureproductdomain "
        data-phone-cc-input="1">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
    
    
    
    
                    <script type="text/javascript"
                        src="https://jixicloud.com/user/templates/orderforms/lagom2/js/order.min.js?v=2.1.2"></script>
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
                                    <div class="inline-form hidden" id="domainregister">
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
                                            <button class="btn btn-lg btn-primary SubmitButton" type="submit">
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
                                            <button type="submit" class="btn btn-lg btn-primary SubmitButton">
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
                                            <button type="submit" class="btn btn-lg btn-primary SubmitButton">
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
    
                        <form method="post" action="/user/cart" id="frmProductDomainSelections">
                            <input type="hidden" name="token" value="fe7e65f49381686de922bdada0cdb89c8918825d" />
    
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