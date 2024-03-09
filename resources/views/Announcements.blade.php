<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        News
        - JiXi Cloud
    </title>

</head>
@extends('layout.app')
@section( 'content')
<body class="lagom lagom-not-portal lagom-layout-top lagom-default page-announcements " data-phone-cc-input="1">
    <div class="app-main ">
        <div class="main-header">
            <div class="container">

                <h1 class="main-header-title">
                    News
                </h1>
                <div class="main-header-bottom">

                    <ol class="breadcrumb">
                        <li>
                            <a href="https://jixicloud.com/user"> Portal Home
                            </a>
                        </li>
                        <li>
                            <a href="/user/announcements"> Announcements
                            </a>
                        </li>
                        <li class="active">
                            Mar 2024
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="main-grid">
                    <div class="main-sidebar ">
                        <div class="sidebar sidebar-primary">
                            <div menuItemName="Announcements Months" class="panel panel-sidebar  hidden-sm hidden-xs">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="fas fa-calendar-alt"></i>&nbsp; By Month
                                        <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                                    </h5>
                                </div>
                                <div class="list-group">
                                    <a menuItemName="Older" href="/user/announcements/view/older"
                                        class="list-group-item" id="Primary_Sidebar-Announcements_Months-Older">
                                        <i class="fas fa-ticket ls ls-hourglass"></i>
                                        Older Announcements...
                                    </a>
                                    <a menuItemName="RSS Feed" href="/user/announcements/rss" class="list-group-item"
                                        id="Primary_Sidebar-Announcements_Months-RSS_Feed">
                                        <i class="fas fa-ticket ls ls-rss"></i>
                                        View RSS Feed
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="sidebar sidebar-secondary">
                            <div menuItemName="Support" class="panel panel-sidebar ">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="far fa-life-ring"></i>&nbsp; Support
                                        <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                                    </h5>
                                </div>
                                <div class="list-group">
                                    <a menuItemName="Support Tickets" href="/user/submitticket"
                                        class="list-group-item" id="Secondary_Sidebar-Support-Support_Tickets">
                                        <i class="fas fa-ticket ls ls-ticket-tag"></i>
                                        My Support Tickets
                                    </a>
                                    <a menuItemName="Announcements" href="/user/announcements"
                                        class="list-group-item active" id="Secondary_Sidebar-Support-Announcements">
                                        <i class="fas fa-ticket ls ls-text-cloud"></i>
                                        Announcements
                                    </a>
                                    <a menuItemName="Knowledgebase" href="/user/knowledgebase" class="list-group-item"
                                        id="Secondary_Sidebar-Support-Knowledgebase">
                                        <i class="fas fa-ticket ls ls-document-info"></i>
                                        Knowledgebase
                                    </a>
                                    <a menuItemName="Downloads" href="/user/download" class="list-group-item"
                                        id="Secondary_Sidebar-Support-Downloads">
                                        <i class="fas fa-ticket ls ls-download-square"></i>
                                        Downloads
                                    </a>
                                    <a menuItemName="Network Status" href="/user/serverstatus.php"
                                        class="list-group-item" id="Secondary_Sidebar-Support-Network_Status">
                                        <i class="fas fa-ticket ls ls-range"></i>
                                        Network Status
                                    </a>
                                    <a menuItemName="Open Ticket" href="/user/submitticket.php" class="list-group-item"
                                        id="Secondary_Sidebar-Support-Open_Ticket">
                                        <i class="fas fa-ticket ls ls-new-window"></i>
                                        Open Ticket
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content  ">


                        <div class="message message-no-data">
                            <div class="message-image">
                                <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                                    height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                    xml:space="preserve">
                                    <path class="svg-icon-outline-s" d="M42.5,50.4L47,53V37.7c0-0.7,0.2-1.6,0.7-2.5c0.5-0.8,1.1-1.5,1.8-1.9c0.6-0.4,1.3-0.5,1.8-0.2S52,34,52,34.7
    V44v9.7c0,1.5-0.5,3.2-1.5,4.9s-2.3,3-3.5,3.7c-1.3,0.7-2.6,0.9-3.5,0.4c-1-0.6-1.5-1.8-1.5-3.2V18.3L12,1v41.2
    c0,1.5,0.5,2.7,1.5,3.2l30,17.3" />
                                    <line class="svg-icon-outline-s" x1="51.3" y1="33.1" x2="42.5" y2="28" />
                                    <polygon class="svg-icon-prime svg-icon-stroke"
                                        points="37,29.5 17,18 17,9.9 37,21.4" />
                                    <line class="svg-icon-prime svg-icon-stroke" x1="37" y1="35.5" x2="17" y2="24" />
                                    <line class="svg-icon-prime svg-icon-stroke" x1="31" y1="38.1" x2="17" y2="30" />
                                </svg>
                            </div>
                            <h6 class="message-title">No announcements to display</h6>
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