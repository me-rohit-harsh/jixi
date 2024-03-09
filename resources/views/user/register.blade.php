<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Register
        - JiXi Cloud
    </title>
</head>

@extends('layout.app')
@section('content')
<body
    class="lagom page-login register-page page-login-secondary lagom-not-portal lagom-layout-top lagom-default page-clientregister "
    data-phone-cc-input="1">



    <div class="app-main ">


        <div class="main-body">
            <div class="container">












                <div class="login login-lg">
                    <div class="login-wrapper">
                        <div class="login-body register" id="registration">
                            <h1 class="login-title">Register</h1>
                            <script type="text/javascript" src="/user/assets/js/StatesDropdown.js"></script>
                            <script>
                                window.langPasswordStrength = "Password Strength";
        window.langPasswordWeak = "Weak";
        window.langPasswordModerate = "Moderate";
        window.langPasswordStrong = "Strong";
        window.langPasswordTooShort = "at least 5 characters";
                            </script>
                            <form method="post" class="loginForm" action="/user/register.php" role="form"
                                name="orderfrm" id="frmCheckout">
                                <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                                <input type="hidden" name="register" value="true" />
                                <div class="section section-sm" id="containerNewUserSignup">
                                    <div class="section section-sm">
                                        <div class="section-body">

                                            <div id="providerLinkingMessages" class="hidden">
                                                <p class="providerLinkingMsg-preLink-init_failed">
                                                    <span class="provider-name"></span> is unavailable at this time.
                                                    Please try again later.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-connect_error">
                                                    <strong>Error</strong> We were unable to connect your account.
                                                    Please contact your system administrator.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-complete_sign_in">
                                                    Please complete sign in with your chosen service provider.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-2fa_needed">
                                                    Automatic sign-in successful! Redirecting...
                                                </p>
                                                <p class="providerLinkingMsg-preLink-linking_complete">
                                                    <strong>Success!</strong> Your account is now linked with your
                                                    :displayName account.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-login_to_link-signin-required">
                                                    <strong>Link Initiated!</strong> Please complete sign in to
                                                    associate this service with your existing account. You will only
                                                    have to do this once.
                                                </p>
                                                <p
                                                    class="providerLinkingMsg-preLink-login_to_link-registration-required">
                                                    <strong>Link Initiated!</strong> Please complete the registration
                                                    form below.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-checkout-new">
                                                    <strong>Link Initiated!</strong> Please complete your new account
                                                    information.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-other_user_exists">
                                                    <strong>Error</strong> This account is already connected to an
                                                    existing account with us. Please choose a different account at the
                                                    third party authentication provider.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-already_linked">
                                                    <strong>Error</strong> This account is already connected to your
                                                    account with us. Please choose a different account at the third
                                                    party authentication provider.
                                                </p>
                                                <p class="providerLinkingMsg-preLink-default">
                                                    <strong>Error</strong> We were unable to connect your account.
                                                    Please contact your system administrator.
                                                </p>
                                            </div>
                                            <div class="text-center m-b-2x">
                                                <span>Use social account (optional)</span>
                                            </div>
                                            <div class="providerPreLinking" data-link-context="registration"
                                                data-hide-on-prelink=1 data-disable-on-prelink=0>
                                                <div class="social-signin-btns">
                                                    <script>
                                                        window.onerror = function(e){
        WHMCS.authn.provider.displayError();
    };

    function onSignIn(credentialResponse) {
        WHMCS.authn.provider.preLinkInit();

        var failIfExists = 0;
        if ("register" === "register"
           || "register" === "connect"
        ) {
            failIfExists = 1;
        }
        
        var context = {
            htmlTarget: "register",
            targetLogin: "login",
            targetRegister: "register",
            redirectUrl: "%2Fuser%2Flogin"
        };
        var config = {
            url: "/user/auth/provider/google_signin/finalize",
            method: "POST",
            dataType: "json",
            data: {
                id_token: credentialResponse.credential,
                fail_if_exists: failIfExists,
                token: "698769c69ba02ae0fea05151d5d8a6c2685abc35",
                cartCheckout: 0
            }
        };
        var provider = {
            "name": "Google",
            "icon":  "<img src=\"/user/assets/img/auth/google_icon.png\" width=\"17px\" height=\"17px\" alt=\"googleIcon\" /> "
        };

        var providerDone = function () { };
        var providerError = function () { };

        WHMCS.authn.provider.signIn(config, context, provider, providerDone, providerError);
    }
                                                    </script>
                                                    <script src="https://accounts.google.com/gsi/client" async defer>
                                                    </script>
                                                    <div id="g_id_onload"
                                                        data-client_id="502354445070-8jce1i7tkc0gbejvh9329ev599uuvs24.apps.googleusercontent.com"
                                                        data-callback="onSignIn" data-ux_mode="popup"
                                                        data-auto_prompt="false" style="display: none"></div>
                                                    <div id="btnGoogleSignin1"
                                                        class="g_id_signin btn btn-social btn-google" data-locale="en"
                                                        data-type="standard" data-logo_alignment="center"></div>
                                                </div>
                                            </div>
                                            <div class="providerLinkingFeedback"></div>
                                            <div class="login-divider"><span></span><span>or fill the form
                                                    below</span><span></span></div>
                                        </div>
                                    </div>
                                    <div class="section section-sm">
                                        <div class="section-header">
                                            <h2 class="section-title">Personal Information</h2>
                                        </div>
                                        <div class="section-body" id="personalInformation">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputFirstName" class="label-required">
                                                            First Name </label>
                                                        <input type="text" name="firstname" id="inputFirstName"
                                                            class="form-control" placeholder="" value="" required
                                                            autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputLastName" class="label-required">
                                                            Last Name </label>
                                                        <input type="text" name="lastname" id="inputLastName"
                                                            class="form-control" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputEmail" class="label-required">
                                                            Email Address
                                                        </label>
                                                        <input type="email" name="email" id="inputEmail"
                                                            class="form-control" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputPhone" class="label-required">
                                                            Phone Number </label>
                                                        <input type="tel" name="phonenumber" id="inputPhone"
                                                            class="form-control" placeholder="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section section-sm">
                                        <div class="section-header">
                                            <h2 class="section-title">Billing Address</h2>
                                        </div>
                                        <div class="section-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputCompanyName">
                                                            Company Name (Optional)
                                                        </label>
                                                        <input type="text" name="companyname" id="inputCompanyName"
                                                            class="form-control" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputAddress1" class="label-required">
                                                            Street Address </label>
                                                        <input type="text" name="address1" id="inputAddress1"
                                                            class="form-control" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputAddress2">
                                                            Street Address 2 (Optional)
                                                        </label>
                                                        <input type="text" name="address2" id="inputAddress2"
                                                            class="form-control" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputCity" class="label-required">
                                                            City </label>
                                                        <input type="text" name="city" id="inputCity"
                                                            class="form-control" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="stateinput" class="label-required">
                                                                    State </label>
                                                                <input type="text" name="state" id="state"
                                                                    class="form-control" placeholder="" value=""
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="inputPostcode" class="label-required">
                                                                    Postcode </label>
                                                                <input type="text" name="postcode" id="inputPostcode"
                                                                    class="form-control" placeholder="" value=""
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="inputCountry" id="inputCountryIcon"
                                                            class="label-required">
                                                            Country
                                                        </label>
                                                        <select name="country" id="inputCountry" class="form-control">
                                                            <option value="AF">
                                                                Afghanistan
                                                            </option>
                                                            <option value="AX">
                                                                Aland Islands
                                                            </option>
                                                            <option value="AL">
                                                                Albania
                                                            </option>
                                                            <option value="DZ">
                                                                Algeria
                                                            </option>
                                                            <option value="AS">
                                                                American Samoa
                                                            </option>
                                                            <option value="AD">
                                                                Andorra
                                                            </option>
                                                            <option value="AO">
                                                                Angola
                                                            </option>
                                                            <option value="AI">
                                                                Anguilla
                                                            </option>
                                                            <option value="AQ">
                                                                Antarctica
                                                            </option>
                                                            <option value="AG">
                                                                Antigua And Barbuda
                                                            </option>
                                                            <option value="AR">
                                                                Argentina
                                                            </option>
                                                            <option value="AM">
                                                                Armenia
                                                            </option>
                                                            <option value="AW">
                                                                Aruba
                                                            </option>
                                                            <option value="AU">
                                                                Australia
                                                            </option>
                                                            <option value="AT">
                                                                Austria
                                                            </option>
                                                            <option value="AZ">
                                                                Azerbaijan
                                                            </option>
                                                            <option value="BS">
                                                                Bahamas
                                                            </option>
                                                            <option value="BH">
                                                                Bahrain
                                                            </option>
                                                            <option value="BD">
                                                                Bangladesh
                                                            </option>
                                                            <option value="BB">
                                                                Barbados
                                                            </option>
                                                            <option value="BY">
                                                                Belarus
                                                            </option>
                                                            <option value="BE">
                                                                Belgium
                                                            </option>
                                                            <option value="BZ">
                                                                Belize
                                                            </option>
                                                            <option value="BJ">
                                                                Benin
                                                            </option>
                                                            <option value="BM">
                                                                Bermuda
                                                            </option>
                                                            <option value="BT">
                                                                Bhutan
                                                            </option>
                                                            <option value="BO">
                                                                Bolivia
                                                            </option>
                                                            <option value="BA">
                                                                Bosnia And Herzegovina
                                                            </option>
                                                            <option value="BW">
                                                                Botswana
                                                            </option>
                                                            <option value="BR">
                                                                Brazil
                                                            </option>
                                                            <option value="IO">
                                                                British Indian Ocean Territory
                                                            </option>
                                                            <option value="BN">
                                                                Brunei Darussalam
                                                            </option>
                                                            <option value="BG">
                                                                Bulgaria
                                                            </option>
                                                            <option value="BF">
                                                                Burkina Faso
                                                            </option>
                                                            <option value="BI">
                                                                Burundi
                                                            </option>
                                                            <option value="KH">
                                                                Cambodia
                                                            </option>
                                                            <option value="CM">
                                                                Cameroon
                                                            </option>
                                                            <option value="CA">
                                                                Canada
                                                            </option>
                                                            <option value="IC">
                                                                Canary Islands
                                                            </option>
                                                            <option value="CV">
                                                                Cape Verde
                                                            </option>
                                                            <option value="KY">
                                                                Cayman Islands
                                                            </option>
                                                            <option value="CF">
                                                                Central African Republic
                                                            </option>
                                                            <option value="TD">
                                                                Chad
                                                            </option>
                                                            <option value="CL">
                                                                Chile
                                                            </option>
                                                            <option value="CN">
                                                                China
                                                            </option>
                                                            <option value="CX">
                                                                Christmas Island
                                                            </option>
                                                            <option value="CC">
                                                                Cocos (Keeling) Islands
                                                            </option>
                                                            <option value="CO">
                                                                Colombia
                                                            </option>
                                                            <option value="KM">
                                                                Comoros
                                                            </option>
                                                            <option value="CG">
                                                                Congo
                                                            </option>
                                                            <option value="CD">
                                                                Congo, Democratic Republic
                                                            </option>
                                                            <option value="CK">
                                                                Cook Islands
                                                            </option>
                                                            <option value="CR">
                                                                Costa Rica
                                                            </option>
                                                            <option value="CI">
                                                                Cote D'Ivoire
                                                            </option>
                                                            <option value="HR">
                                                                Croatia
                                                            </option>
                                                            <option value="CU">
                                                                Cuba
                                                            </option>
                                                            <option value="CW">
                                                                Curacao
                                                            </option>
                                                            <option value="CY">
                                                                Cyprus
                                                            </option>
                                                            <option value="CZ">
                                                                Czech Republic
                                                            </option>
                                                            <option value="DK">
                                                                Denmark
                                                            </option>
                                                            <option value="DJ">
                                                                Djibouti
                                                            </option>
                                                            <option value="DM">
                                                                Dominica
                                                            </option>
                                                            <option value="DO">
                                                                Dominican Republic
                                                            </option>
                                                            <option value="EC">
                                                                Ecuador
                                                            </option>
                                                            <option value="EG">
                                                                Egypt
                                                            </option>
                                                            <option value="SV">
                                                                El Salvador
                                                            </option>
                                                            <option value="GQ">
                                                                Equatorial Guinea
                                                            </option>
                                                            <option value="ER">
                                                                Eritrea
                                                            </option>
                                                            <option value="EE">
                                                                Estonia
                                                            </option>
                                                            <option value="ET">
                                                                Ethiopia
                                                            </option>
                                                            <option value="FK">
                                                                Falkland Islands (Malvinas)
                                                            </option>
                                                            <option value="FO">
                                                                Faroe Islands
                                                            </option>
                                                            <option value="FJ">
                                                                Fiji
                                                            </option>
                                                            <option value="FI">
                                                                Finland
                                                            </option>
                                                            <option value="FR">
                                                                France
                                                            </option>
                                                            <option value="GF">
                                                                French Guiana
                                                            </option>
                                                            <option value="PF">
                                                                French Polynesia
                                                            </option>
                                                            <option value="TF">
                                                                French Southern Territories
                                                            </option>
                                                            <option value="GA">
                                                                Gabon
                                                            </option>
                                                            <option value="GM">
                                                                Gambia
                                                            </option>
                                                            <option value="GE">
                                                                Georgia
                                                            </option>
                                                            <option value="DE">
                                                                Germany
                                                            </option>
                                                            <option value="GH">
                                                                Ghana
                                                            </option>
                                                            <option value="GI">
                                                                Gibraltar
                                                            </option>
                                                            <option value="GR">
                                                                Greece
                                                            </option>
                                                            <option value="GL">
                                                                Greenland
                                                            </option>
                                                            <option value="GD">
                                                                Grenada
                                                            </option>
                                                            <option value="GP">
                                                                Guadeloupe
                                                            </option>
                                                            <option value="GU">
                                                                Guam
                                                            </option>
                                                            <option value="GT">
                                                                Guatemala
                                                            </option>
                                                            <option value="GG">
                                                                Guernsey
                                                            </option>
                                                            <option value="GN">
                                                                Guinea
                                                            </option>
                                                            <option value="GW">
                                                                Guinea-Bissau
                                                            </option>
                                                            <option value="GY">
                                                                Guyana
                                                            </option>
                                                            <option value="HT">
                                                                Haiti
                                                            </option>
                                                            <option value="HM">
                                                                Heard Island & Mcdonald Islands
                                                            </option>
                                                            <option value="VA">
                                                                Holy See (Vatican City State)
                                                            </option>
                                                            <option value="HN">
                                                                Honduras
                                                            </option>
                                                            <option value="HK">
                                                                Hong Kong
                                                            </option>
                                                            <option value="HU">
                                                                Hungary
                                                            </option>
                                                            <option value="IS">
                                                                Iceland
                                                            </option>
                                                            <option value="IN" selected="selected">
                                                                India
                                                            </option>
                                                            <option value="ID">
                                                                Indonesia
                                                            </option>
                                                            <option value="IR">
                                                                Iran, Islamic Republic Of
                                                            </option>
                                                            <option value="IQ">
                                                                Iraq
                                                            </option>
                                                            <option value="IE">
                                                                Ireland
                                                            </option>
                                                            <option value="IM">
                                                                Isle Of Man
                                                            </option>
                                                            <option value="IL">
                                                                Israel
                                                            </option>
                                                            <option value="IT">
                                                                Italy
                                                            </option>
                                                            <option value="JM">
                                                                Jamaica
                                                            </option>
                                                            <option value="JP">
                                                                Japan
                                                            </option>
                                                            <option value="JE">
                                                                Jersey
                                                            </option>
                                                            <option value="JO">
                                                                Jordan
                                                            </option>
                                                            <option value="KZ">
                                                                Kazakhstan
                                                            </option>
                                                            <option value="KE">
                                                                Kenya
                                                            </option>
                                                            <option value="KI">
                                                                Kiribati
                                                            </option>
                                                            <option value="KR">
                                                                Korea
                                                            </option>
                                                            <option value="XK">
                                                                Kosovo
                                                            </option>
                                                            <option value="KW">
                                                                Kuwait
                                                            </option>
                                                            <option value="KG">
                                                                Kyrgyzstan
                                                            </option>
                                                            <option value="LA">
                                                                Lao People's Democratic Republic
                                                            </option>
                                                            <option value="LV">
                                                                Latvia
                                                            </option>
                                                            <option value="LB">
                                                                Lebanon
                                                            </option>
                                                            <option value="LS">
                                                                Lesotho
                                                            </option>
                                                            <option value="LR">
                                                                Liberia
                                                            </option>
                                                            <option value="LY">
                                                                Libyan Arab Jamahiriya
                                                            </option>
                                                            <option value="LI">
                                                                Liechtenstein
                                                            </option>
                                                            <option value="LT">
                                                                Lithuania
                                                            </option>
                                                            <option value="LU">
                                                                Luxembourg
                                                            </option>
                                                            <option value="MO">
                                                                Macao
                                                            </option>
                                                            <option value="MK">
                                                                Macedonia
                                                            </option>
                                                            <option value="MG">
                                                                Madagascar
                                                            </option>
                                                            <option value="MW">
                                                                Malawi
                                                            </option>
                                                            <option value="MY">
                                                                Malaysia
                                                            </option>
                                                            <option value="MV">
                                                                Maldives
                                                            </option>
                                                            <option value="ML">
                                                                Mali
                                                            </option>
                                                            <option value="MT">
                                                                Malta
                                                            </option>
                                                            <option value="MH">
                                                                Marshall Islands
                                                            </option>
                                                            <option value="MQ">
                                                                Martinique
                                                            </option>
                                                            <option value="MR">
                                                                Mauritania
                                                            </option>
                                                            <option value="MU">
                                                                Mauritius
                                                            </option>
                                                            <option value="YT">
                                                                Mayotte
                                                            </option>
                                                            <option value="MX">
                                                                Mexico
                                                            </option>
                                                            <option value="FM">
                                                                Micronesia, Federated States Of
                                                            </option>
                                                            <option value="MD">
                                                                Moldova
                                                            </option>
                                                            <option value="MC">
                                                                Monaco
                                                            </option>
                                                            <option value="MN">
                                                                Mongolia
                                                            </option>
                                                            <option value="ME">
                                                                Montenegro
                                                            </option>
                                                            <option value="MS">
                                                                Montserrat
                                                            </option>
                                                            <option value="MA">
                                                                Morocco
                                                            </option>
                                                            <option value="MZ">
                                                                Mozambique
                                                            </option>
                                                            <option value="MM">
                                                                Myanmar
                                                            </option>
                                                            <option value="NA">
                                                                Namibia
                                                            </option>
                                                            <option value="NR">
                                                                Nauru
                                                            </option>
                                                            <option value="NP">
                                                                Nepal
                                                            </option>
                                                            <option value="NL">
                                                                Netherlands
                                                            </option>
                                                            <option value="AN">
                                                                Netherlands Antilles
                                                            </option>
                                                            <option value="NC">
                                                                New Caledonia
                                                            </option>
                                                            <option value="NZ">
                                                                New Zealand
                                                            </option>
                                                            <option value="NI">
                                                                Nicaragua
                                                            </option>
                                                            <option value="NE">
                                                                Niger
                                                            </option>
                                                            <option value="NG">
                                                                Nigeria
                                                            </option>
                                                            <option value="NU">
                                                                Niue
                                                            </option>
                                                            <option value="NF">
                                                                Norfolk Island
                                                            </option>
                                                            <option value="MP">
                                                                Northern Mariana Islands
                                                            </option>
                                                            <option value="NO">
                                                                Norway
                                                            </option>
                                                            <option value="OM">
                                                                Oman
                                                            </option>
                                                            <option value="PK">
                                                                Pakistan
                                                            </option>
                                                            <option value="PW">
                                                                Palau
                                                            </option>
                                                            <option value="PS">
                                                                Palestine, State of
                                                            </option>
                                                            <option value="PA">
                                                                Panama
                                                            </option>
                                                            <option value="PG">
                                                                Papua New Guinea
                                                            </option>
                                                            <option value="PY">
                                                                Paraguay
                                                            </option>
                                                            <option value="PE">
                                                                Peru
                                                            </option>
                                                            <option value="PH">
                                                                Philippines
                                                            </option>
                                                            <option value="PN">
                                                                Pitcairn
                                                            </option>
                                                            <option value="PL">
                                                                Poland
                                                            </option>
                                                            <option value="PT">
                                                                Portugal
                                                            </option>
                                                            <option value="PR">
                                                                Puerto Rico
                                                            </option>
                                                            <option value="QA">
                                                                Qatar
                                                            </option>
                                                            <option value="RE">
                                                                Reunion
                                                            </option>
                                                            <option value="RO">
                                                                Romania
                                                            </option>
                                                            <option value="RU">
                                                                Russian Federation
                                                            </option>
                                                            <option value="RW">
                                                                Rwanda
                                                            </option>
                                                            <option value="BL">
                                                                Saint Barthelemy
                                                            </option>
                                                            <option value="SH">
                                                                Saint Helena
                                                            </option>
                                                            <option value="KN">
                                                                Saint Kitts And Nevis
                                                            </option>
                                                            <option value="LC">
                                                                Saint Lucia
                                                            </option>
                                                            <option value="MF">
                                                                Saint Martin
                                                            </option>
                                                            <option value="PM">
                                                                Saint Pierre And Miquelon
                                                            </option>
                                                            <option value="VC">
                                                                Saint Vincent And Grenadines
                                                            </option>
                                                            <option value="WS">
                                                                Samoa
                                                            </option>
                                                            <option value="SM">
                                                                San Marino
                                                            </option>
                                                            <option value="ST">
                                                                Sao Tome And Principe
                                                            </option>
                                                            <option value="SA">
                                                                Saudi Arabia
                                                            </option>
                                                            <option value="SN">
                                                                Senegal
                                                            </option>
                                                            <option value="RS">
                                                                Serbia
                                                            </option>
                                                            <option value="SC">
                                                                Seychelles
                                                            </option>
                                                            <option value="SL">
                                                                Sierra Leone
                                                            </option>
                                                            <option value="SG">
                                                                Singapore
                                                            </option>
                                                            <option value="SK">
                                                                Slovakia
                                                            </option>
                                                            <option value="SI">
                                                                Slovenia
                                                            </option>
                                                            <option value="SB">
                                                                Solomon Islands
                                                            </option>
                                                            <option value="SO">
                                                                Somalia
                                                            </option>
                                                            <option value="ZA">
                                                                South Africa
                                                            </option>
                                                            <option value="GS">
                                                                South Georgia And Sandwich Isl.
                                                            </option>
                                                            <option value="ES">
                                                                Spain
                                                            </option>
                                                            <option value="LK">
                                                                Sri Lanka
                                                            </option>
                                                            <option value="SD">
                                                                Sudan
                                                            </option>
                                                            <option value="SS">
                                                                South Sudan
                                                            </option>
                                                            <option value="SR">
                                                                Suriname
                                                            </option>
                                                            <option value="SJ">
                                                                Svalbard And Jan Mayen
                                                            </option>
                                                            <option value="SZ">
                                                                Swaziland
                                                            </option>
                                                            <option value="SE">
                                                                Sweden
                                                            </option>
                                                            <option value="CH">
                                                                Switzerland
                                                            </option>
                                                            <option value="SY">
                                                                Syrian Arab Republic
                                                            </option>
                                                            <option value="TW">
                                                                Taiwan
                                                            </option>
                                                            <option value="TJ">
                                                                Tajikistan
                                                            </option>
                                                            <option value="TZ">
                                                                Tanzania
                                                            </option>
                                                            <option value="TH">
                                                                Thailand
                                                            </option>
                                                            <option value="TL">
                                                                Timor-Leste
                                                            </option>
                                                            <option value="TG">
                                                                Togo
                                                            </option>
                                                            <option value="TK">
                                                                Tokelau
                                                            </option>
                                                            <option value="TO">
                                                                Tonga
                                                            </option>
                                                            <option value="TT">
                                                                Trinidad And Tobago
                                                            </option>
                                                            <option value="TN">
                                                                Tunisia
                                                            </option>
                                                            <option value="TR">
                                                                Turkey
                                                            </option>
                                                            <option value="TM">
                                                                Turkmenistan
                                                            </option>
                                                            <option value="TC">
                                                                Turks And Caicos Islands
                                                            </option>
                                                            <option value="TV">
                                                                Tuvalu
                                                            </option>
                                                            <option value="UG">
                                                                Uganda
                                                            </option>
                                                            <option value="UA">
                                                                Ukraine
                                                            </option>
                                                            <option value="AE">
                                                                United Arab Emirates
                                                            </option>
                                                            <option value="GB">
                                                                United Kingdom
                                                            </option>
                                                            <option value="US">
                                                                United States
                                                            </option>
                                                            <option value="UM">
                                                                United States Outlying Islands
                                                            </option>
                                                            <option value="UY">
                                                                Uruguay
                                                            </option>
                                                            <option value="UZ">
                                                                Uzbekistan
                                                            </option>
                                                            <option value="VU">
                                                                Vanuatu
                                                            </option>
                                                            <option value="VE">
                                                                Venezuela
                                                            </option>
                                                            <option value="VN">
                                                                Viet Nam
                                                            </option>
                                                            <option value="VG">
                                                                Virgin Islands, British
                                                            </option>
                                                            <option value="VI">
                                                                Virgin Islands, U.S.
                                                            </option>
                                                            <option value="WF">
                                                                Wallis And Futuna
                                                            </option>
                                                            <option value="EH">
                                                                Western Sahara
                                                            </option>
                                                            <option value="YE">
                                                                Yemen
                                                            </option>
                                                            <option value="ZM">
                                                                Zambia
                                                            </option>
                                                            <option value="ZW">
                                                                Zimbabwe
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section section-sm" id="containerNewUserSecurity">
                                    <h5 class="section-title">Account Security</h5>
                                    <div id="containerPassword" class="row">
                                        <div id="passwdFeedback" style="display: none;"
                                            class="alert alert-lagom alert-info text-center col-md-12"></div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback" id="newPassword1">
                                                <div
                                                    class="password-content password-content-top password-content-group">
                                                    <label for="inputNewPassword1" class="label-required">
                                                        Password
                                                    </label>
                                                    <div class="progress m-t-0" id="passwordStrengthBar"
                                                        style="display: none">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">New Password Rating: 0%</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-small text-lighter password-content-text"><span
                                                            id="passwordStrengthTextLabel">at least 5
                                                            characters</span><i data-toggle="tooltip"
                                                            title="<strong>Tips for a good password</strong><br />Use both upper and lowercase characters<br />Include at least one symbol (# $ ! % &amp; etc...)<br />Don't use dictionary words"
                                                            data-html="true" data-container="body"
                                                            class="ls ls-info-circle m-l-1x"></i></span>
                                                </div>
                                                <div class="input-password-strenght">
                                                    <input type="password" name="password" id="inputNewPassword1"
                                                        data-error-threshold="50" data-warning-threshold="75"
                                                        class="form-control" placeholder="" autocomplete="off">
                                                </div>

                                                <div class="password-content password-content-group">
                                                    <button type="button"
                                                        class="btn btn-default btn-sm generate-password"
                                                        data-targetfields="inputNewPassword1,inputNewPassword2">
                                                        <i class="ls ls-refresh"></i>Generate Password
                                                    </button>
                                                </div>

                                                <script type="text/javascript">
                                                    jQuery("#inputNewPassword1").keyup(function() {


    if(typeof window.langPasswordWeak === 'undefined'){
        window.langPasswordWeak = "Weak";
    }
    if(typeof window.langPasswordModerate === 'undefined'){
        window.langPasswordModerate = "Moderate";
    }
    if(typeof window.langPasswordStrong === 'undefined'){
        window.langPasswordStrong = "Strong";
    }
    if(typeof window.tooShort === 'undefined'){
        window.langPasswordTooShort = "at least 5 characters";
    }

            var pwStrengthErrorThreshold = 50;
                var pwStrengthWarningThreshold = 75;
    
        var $newPassword1 = jQuery("#newPassword1");
        var pw = jQuery("#inputNewPassword1").val();
        var pwlength=(pw.length);
        if(pwlength > 4){
            $('#passwordStrengthBar').show();
            if(pwlength>5)pwlength=5;
            var numnumeric=pw.replace(/[0-9]/g,"");
            var numeric=(pw.length-numnumeric.length);
            if(numeric>3)numeric=3;
            var symbols=pw.replace(/\W/g,"");
            var numsymbols=(pw.length-symbols.length);
            if(numsymbols>3)numsymbols=3;
            var numupper=pw.replace(/[A-Z]/g,"");
            var upper=(pw.length-numupper.length);
            if(upper>3)upper=3;
            var pwstrength=((pwlength*10)-20)+(numeric*10)+(numsymbols*15)+(upper*10);
            if (pwstrength < 0) pwstrength = 0;
            if (pwstrength > 100) pwstrength = 100;
            
            $newPassword1.removeClass('has-error has-warning has-success');
            jQuery("#passwordStrengthBar .progress-bar").removeClass("progress-bar-danger progress-bar-warning progress-bar-success").css("width", pwstrength + "%").attr('aria-valuenow', pwstrength);

            if (pwstrength < pwStrengthErrorThreshold) {
                $newPassword1.addClass('has-error');
                jQuery("#passwordStrengthTextLabel").html(langPasswordWeak).css("color", "#be0f1a");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-danger");
            } else if (pwstrength < pwStrengthWarningThreshold) {
                $newPassword1.addClass('has-warning');
                jQuery("#passwordStrengthTextLabel").html(langPasswordModerate).css("color", "#c59301");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-warning");
            } else {
                $newPassword1.addClass('has-success');
                jQuery("#passwordStrengthTextLabel").html(langPasswordStrong).css("color", "#198810");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-success");
            }
        }
        else{
            $('#passwordStrengthBar').hide();
            jQuery("#passwordStrengthTextLabel").html(langPasswordTooShort);
            jQuery("#passwordStrengthBar .progress-bar").removeClass("progress-bar-danger progress-bar-warning progress-bar-success").removeAttr('style');
        }
        validatePassword2();
    });

    function validatePassword2() {
        var password1 = jQuery("#inputNewPassword1").val();
        var password2 = jQuery("#inputNewPassword2").val();
        var $newPassword2 = jQuery("#newPassword2");

        if (password2 && password1 !== password2) {
            $newPassword2.removeClass('has-success').addClass('has-error');
            jQuery("#inputNewPassword2Msg").html('<p class="help-block" id="nonMatchingPasswordResult">The passwords entered do not match</p>');
            jQuery('input[type="submit"]').attr('disabled', 'disabled');        } else {
            if (password2) {
                $newPassword2.removeClass('has-error').addClass('has-success');
                jQuery('input[type="submit"]').removeAttr('disabled');            } else {
                $newPassword2.removeClass('has-error has-success');
            }
            jQuery("#inputNewPassword2Msg").html('');
        }
    }

    jQuery(document).ready(function(){
        jQuery('.using-password-strength input[type="submit"]').attr('disabled', 'disabled');        jQuery("#inputNewPassword2").keyup(function() {
            validatePassword2();
        });
    });

                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback" id="newPassword2">
                                                <label for="inputNewPassword2" class="label-required">
                                                    Confirm Password
                                                </label>
                                                <input type="password" name="password2" id="inputNewPassword2"
                                                    class="form-control" placeholder="" autocomplete="off">
                                                <div id="inputNewPassword2Msg"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="section section-sm">
                                    <div class="section-header">
                                        <h2 class="section-title">Join our mailing list</h2>
                                        <p class="section-desc">We would like to send you occasional news, information
                                            and special offers by email. Choose below whether you want to join our
                                            mailing list. You can unsubscribe at any time.</p>
                                    </div>
                                    <div class="panel panel-switch m-w-xs">
                                        <div class="panel-body">
                                            <span class="switch-label">Receive Emails: </span>
                                            <label class="switch switch--lg switch--text">
                                                <input class="switch__checkbox" type="checkbox" name="marketingoptin"
                                                    value="1" checked>
                                                <span class="switch__container"><span
                                                        class="switch__handle"></span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="section section-sm">
                                    <div class="section-body">
                                        <div class="checkbox">
                                            <label>
                                                <input class="icheck-control accepttos" type="checkbox"
                                                    name="accepttos">
                                                <span class="label-required">I have read and agree to the <a
                                                        href="/privacy" target="_blank" style="color: darkorchid">Terms of
                                                        Service</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class=" SubmitButton btn btn-lg btn-primary btn-block ">
                                        <span class="btn-text ">
                                            Register
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
                                    </button>
                                </div>
                            </form>

                        </div>
                        <div class="login-footer">
                            <div class="text-center text-light">Already registered with us? <a href="/user/login" style="color: darkorchid">Sign
                                    In</a> <span class="text-lowercase">Or</span> <a href="/user/password/reset" style="color: darkorchid">Reset
                                    Password</a></div>
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