<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Open Ticket
        - JiXi Cloud
    </title>
</head>
@extends('layout.app')
@section( 'content')

<body class="lagom lagom-not-portal lagom-layout-top lagom-default page-supportticketsubmit-steptwo "
    data-phone-cc-input="">

    <div class="app-main ">
        <div class="main-header">
            <div class="container">

                <h1 class="main-header-title">
                    Open Ticket
                </h1>
                <div class="main-header-bottom">

                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"> Portal Home
                            </a>
                        </li>
                        <li>
                            <a href="login"> Client Area
                            </a>
                        </li>
                        <li>
                            <a href="submitticket"> Support Tickets
                            </a>
                        </li>
                        <li class="active">
                            Submit Ticket
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="main-grid">
                    <div class="main-content  ">


                        <form  enctype="multipart/form-data"
                            role="form">
                            <input type="hidden" name="token" value="698769c69ba02ae0fea05151d5d8a6c2685abc35" />
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Ticket Information</h2>
                                </div>
                                <div class="section-body">
                                    <div class="panel panel-default panel-form">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputName">Name</label>
                                                    <input type="text" name="name" id="inputName" value=""
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail">Email Address</label>
                                                    <input type="email" name="email" id="inputEmail" value=""
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputDepartment">Department</label>
                                                    <select name="deptid" id="inputDepartment" class="form-control"
                                                        onchange="refreshCustomFields(this)">
                                                        <option value="1" selected="selected">
                                                            General Enquiries
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputPriority">Priority</label>
                                                    <select name="urgency" id="inputPriority" class="form-control">
                                                        <option value="High">
                                                            High
                                                        </option>
                                                        <option value="Medium" selected="selected">
                                                            Medium
                                                        </option>
                                                        <option value="Low">
                                                            Low
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Message</h2>
                                </div>
                                <div class="section-body">
                                    <div class="panel panel-default panel-form">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputSubject">Subject</label>
                                                    <input type="text" name="subject" id="inputSubject" value=""
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputMessage">Message</label>
                                                    <textarea name="message" id="inputMessage" rows="12"
                                                        class="form-control markdown-editor"
                                                        data-auto-save-name="client_ticket_open"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Attachments</h2>
                                </div>
                                <div class="section-body">
                                    <div class="panel panel-default panel-form">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="file-input form-control">
                                                        <input data-nofiletext="No file selected"
                                                        data-selectfiletext="Select File" type="file" name="attachments[]" id="inputAttachments"
                                                            class="form-control" />
                                                        <span class="file-input-button btn btn-default">
                                                            Select File
                                                        </span>
                                                        <span class="file-input-text text-light">No file selected</span>
                                                    </div>
                                                    <div id="fileUploadsContainer"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button"
                                                        class="btn btn-primary-faded btn-block add-extra-attachement mob-m-t-2x"
                                                        data-nofiletext="No file selected"
                                                        data-selectfiletext="Select File" data-removetext="Remove" style="background: #E790ED; color:#fff;">
                                                        <i class="fas fa-solid fa-plus"></i> Add More
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="ticket-attachments-message">
                                                Allowed File Extensions: .jpg, .gif, .jpeg, .png, .txt, .pdf (Max file
                                                size: 1024MB)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="customFieldsContainer">
                            </div>
                            <div id="autoAnswerSuggestions" class="m-t-4x"></div>
                            <div class="form-actions">
                                <input type="button" id="openTicketSubmit" value="Submit"
                                    class="SubmitButton btn btn-lg btn-primary disable-on-click" />
                                <a href="submitticket" class=" btn btn-lg btn-default">Cancel</a>
                            </div>
                        </form>
                        <script>
                            jQuery(document).ready(function () {
                getTicketSuggestions();
            });
                        </script>















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

</body>
@endsection

</html>