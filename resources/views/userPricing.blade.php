<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>
        Domain Pricing
        - JiXi Cloud
    </title>
</head>
@extends('layout.app')
@section('content')

<body class="lagom lagom-not-portal lagom-layout-top lagom-default page-domain-pricing " data-phone-cc-input="1">
    <div class="app-main ">
        <div class="main-header">
            <div class="container">

                <h1 class="main-header-title">
                    Domain Pricing
                </h1>
                <div class="main-header-bottom">

                    <ol class="breadcrumb">
                        <li>
                            <a href="/user/index.php"> Portal Home
                            </a>
                        </li>
                        <li class="active">
                            Domain Pricing
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="main-grid">
                    <div class="main-content  ">




                        <link rel="stylesheet" type="text/css" href="/user/assets/css/dataTables.responsive.css">
                        <script type="text/javascript"
                            src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>


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
                                    <i class="search-field-icon lm lm-search"></i>
                                    <input type="text" id="table-search" class="form-control"
                                        placeholder="Enter search term...">
                                </div>
                            </div>
                        </div>
                        <div class="tld-table table-container">
                            <table class="table table-list hidden" id="tableDomainPricing">
                                <thead>
                                    <tr>
                                        <th>TLD</th>
                                        <th>Category</th>
                                        <th>New Price</th>
                                        <th>Transfer</th>
                                        <th>Renewal</th>
                                        <th>Grace Period</th>
                                        <th>Redemption Period</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>com</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>in</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>net</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>org</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>info</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>us</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>uk</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                                Geographic
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            0 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>co.uk</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            0 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>co.in</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>xyz</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                                Novelty
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>site</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                                Technology
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>co</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>shop</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Shopping
                                            <span class="hidden">
                                                All
                                                Shopping
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>online</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                                Technology
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>tech</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Technology
                                            <span class="hidden">
                                                All
                                                Technology
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>store</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Shopping
                                            <span class="hidden">
                                                All
                                                Shopping
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>club</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>pro</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            30 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>website</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Technology
                                            <span class="hidden">
                                                All
                                                Technology
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>live</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>buzz</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>top</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Popular
                                            <span class="hidden">
                                                All
                                                Popular
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>co.za</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Other
                                            <span class="hidden">
                                                All
                                                Other
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            0 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="tld-name"><span>.</span>one</strong>
                                        </td>
                                        <td>
                                            <span class="tld-label">Category</span>
                                            Novelty
                                            <span class="hidden">
                                                All
                                                Novelty
                                            </span>
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
                                        <td>
                                            <span class="tld-label">Grace Period</span>
                                            40 Days<br>
                                            <small>(₹0.00 INR)</small>
                                        </td>
                                        <td>
                                            -
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