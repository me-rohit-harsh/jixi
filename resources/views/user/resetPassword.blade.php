<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Lost Password Reset
        - JiXi Cloud
    </title>
</head>

@extends('layout.app')
@section('content')
    <body
        class="lagom page-login page-login-secondary lagom-not-portal lagom-layout-top lagom-default page-password-reset-container "
        data-phone-cc-input="1">
        <div class="app-main ">
    
    
            <div class="main-body">
                <div class="container">
                    <div class="login">
                        <div class="login-header">
                        </div>
                        <div class="login-wrapper">
                            <div class="login-body">
                                <h1 class="login-title">Lost Password Reset</h1>
    
                                <p class="login-desc">Forgotten your password? Enter your email address below to begin the
                                    reset process.</p>
                                <form class="loginForm" method="post" action="/user/password/reset" role="form">
                                    <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                                    <input type="hidden" name="action" value="reset" />
                                    <div class="form-group">
                                        <label for="inputEmail">Email Address</label>
                                        <input type="email" name="email" class="form-control input-lg" id="inputEmail"
                                            placeholder="Enter email" autofocus>
                                    </div>
    
                                    <button type="submit" class="SubmitButton btn btn-lg btn-primary btn-block">
                                        <span class="btn-text">
                                            Submit
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
                            </div>
                            <div class="login-footer">
                                <div class="text-light">Not a member yet? <a href="/user/register" style="color: darkorchid">Create a New
                                        Account</a></div>
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
        <script src="/user/templates/lagom2/assets/js/vendor.js?v=2.1.2"></script>
        <script src="/user/templates/lagom2/assets/js/lagom-app.js?v=2.1.2"></script>
        <script src="/user/templates/lagom2/assets/js/whmcs-custom.min.js?v=2.1.2"></script>
    </body>
@endsection

</html>