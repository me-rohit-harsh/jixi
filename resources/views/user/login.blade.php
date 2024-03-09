<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Login
        - JiXi Cloud
    </title>
</head>
@extends('layout.app')

@section('content')
<body class="lagom page-login page-login-secondary lagom-not-portal lagom-layout-top lagom-default page-login "
    data-phone-cc-input="1">
    <div class="app-main ">


        <div class="main-body">
            <div class="container">












                <div class="login">
                    <div class="login-wrapper">
                        <div class="login-body">
                            <h1 class="login-title">Secure Client Login</h1>
                            <div class="providerLinkingFeedback"></div>
                            <form class="login-form" method="post" action="/user/login" role="form">
                                <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                                <div class="form-group">
                                    <label for="inputEmail">Email Address</label>
                                    <input type="email" name="username" class="form-control input-lg" id="inputEmail"
                                        placeholder="Enter email" autofocus tabindex="1">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex space-between">
                                        <label for="inputPassword">Password</label>
                                        <a href="/user/password/reset" tabindex="3">Forgot?</a>
                                    </div>
                                    <input type="password" name="password" class="form-control input-lg"
                                        id="inputPassword" placeholder="Password" autocomplete="off" tabindex="2">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox m-b-2x">
                                        <input class="icheck-control" type="checkbox" name="rememberme" /> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary SubmitButton btn-block " id="login"
                                    tabindex="4">
                                    <span class="btn-text">
                                        Login
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
                            </form>
                            <div class="login-divider">
                                <span></span>
                                <span>or</span>
                                <span></span>
                            </div>

                            <div id="providerLinkingMessages" class="hidden">
                                <p class="providerLinkingMsg-preLink-init_failed">
                                    <span class="provider-name"></span> is unavailable at this time. Please try again
                                    later.
                                </p>
                                <p class="providerLinkingMsg-preLink-connect_error">
                                    <strong>Error</strong> We were unable to connect your account. Please contact your
                                    system administrator.
                                </p>
                                <p class="providerLinkingMsg-preLink-complete_sign_in">
                                    Please complete sign in with your chosen service provider.
                                </p>
                                <p class="providerLinkingMsg-preLink-2fa_needed">
                                    Automatic sign-in successful! Redirecting...
                                </p>
                                <p class="providerLinkingMsg-preLink-linking_complete">
                                    <strong>Success!</strong> Your account is now linked with your :displayName account.
                                </p>
                                <p class="providerLinkingMsg-preLink-login_to_link-signin-required">
                                    <strong>Link Initiated!</strong> Please complete sign in to associate this service
                                    with your existing account. You will only have to do this once.
                                </p>
                                <p class="providerLinkingMsg-preLink-login_to_link-registration-required">
                                    <strong>Link Initiated!</strong> Please complete the registration form below.
                                </p>
                                <p class="providerLinkingMsg-preLink-checkout-new">
                                    <strong>Link Initiated!</strong> Please complete your new account information.
                                </p>
                                <p class="providerLinkingMsg-preLink-other_user_exists">
                                    <strong>Error</strong> This account is already connected to an existing account with
                                    us. Please choose a different account at the third party authentication provider.
                                </p>
                                <p class="providerLinkingMsg-preLink-already_linked">
                                    <strong>Error</strong> This account is already connected to your account with us.
                                    Please choose a different account at the third party authentication provider.
                                </p>
                                <p class="providerLinkingMsg-preLink-default">
                                    <strong>Error</strong> We were unable to connect your account. Please contact your
                                    system administrator.
                                </p>
                            </div>
                            <div class="providerPreLinking" data-link-context="login" data-hide-on-prelink=0
                                data-disable-on-prelink=0>
                                <div class="social-signin-btns">
                                    <script>
                                        window.onerror = function(e){
        WHMCS.authn.provider.displayError();
    };

    function onSignIn(credentialResponse) {
        WHMCS.authn.provider.preLinkInit();

        var failIfExists = 0;
        if ("login" === "register"
           || "login" === "connect"
        ) {
            failIfExists = 1;
        }
        
        var context = {
            htmlTarget: "login",
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
                                    <script src="https://accounts.google.com/gsi/client" async defer></script>
                                    <div id="g_id_onload"
                                        data-client_id="502354445070-8jce1i7tkc0gbejvh9329ev599uuvs24.apps.googleusercontent.com"
                                        data-callback="onSignIn" data-ux_mode="popup" data-auto_prompt="false"
                                        style="display: none"></div>
                                    <div id="btnGoogleSignin1" class="g_id_signin btn btn-social btn-google"
                                        data-locale="en" data-type="standard" data-logo_alignment="center"></div>
                                </div>
                            </div>
                        </div>
                        <div class="login-footer">
                            <div class="text-light">Not a member yet? <a href="/user/register" tabindex="5">Create a
                                    New Account</a></div>
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


</body>
@endsection


</html>