<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pension Calculator</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>
    <script type="text/javascript" src="assets/js/pages/datatables_advanced.js"></script>
    <!-- /theme JS files -->

    <!-- DATE PICKER -->
    <script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

    <script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
    <!-- /DATE PICKER -->

    <style>
        #contain {
            background: rgba(226,226,226,1);
            background: -moz-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 0%, rgba(254,254,254,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(226,226,226,1)), color-stop(0%, rgba(219,219,219,1)), color-stop(100%, rgba(254,254,254,1)));
            background: -webkit-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 0%, rgba(254,254,254,1) 100%);
            background: -o-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 0%, rgba(254,254,254,1) 100%);
            background: -ms-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 0%, rgba(254,254,254,1) 100%);
            background: linear-gradient(to bottom, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 0%, rgba(254,254,254,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=0 );
        }
    </style>
</head>

<body class="navbar-bottom">

<form class="form-horizontal" method="post" action="analysis.php" id="formSubmitDetails">
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">PensionCalculator</a>
            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a> -->

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li>
                    <a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
                </li>
                <li>
                    <a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /main navbar -->

    <!-- Page header -->
    <div class="page-header">
        <br />
    </div>
    <!-- /page header -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Fieldset legend -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li>
                                            <a data-action="collapse"></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"></a>
                                        </li>
                                        <li>
                                            <a data-action="close"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <fieldset>
                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                Selects fields
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="session_esme" name="fields">
                                                    ESME </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="session_client" name="fields">
                                                    OUR ID</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="FROM_UNIXTIME(msg_timestamp)" name="fields">
                                                    SUBMIT TIME </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_data_coding" name="fields">
                                                    DATA CODING </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                .
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="msg_smsc_id" name="fields">
                                                    SMSC </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="msg_foreign_id" name="fields">
                                                    FOREIGN ID</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="state" name="fields">
                                                    STATUS </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_sm_length" name="fields">
                                                    MESSAGE LENGTH </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                .
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="state_timestamp" name="fields">
                                                    STATUS TIMESTAMP </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_command_status" name="fields">
                                                    COMMAND STATUS</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_sequence_number" name="fields">
                                                    SEQUENCE NUMBER </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="UNHEX(smpp_short_message)" name="fields">
                                                    MESSAGE </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                .
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_service_type" name="fields">
                                                    SERVICE TYPE</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_source_addr_ton" name="fields">
                                                    SOURCE TON</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_source_addr_npi" name="fields">
                                                    SOURCE NPI </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_message_payload" name="fields">
                                                    MESSAGE PAYLOAD </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                .
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_source_add" name="fields">
                                                    SENDER ID </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_dest_addr_ton" name="fields">
                                                    DESTINATION TON</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_dest_addr_npi" name="fields">
                                                    DESTINATION NPI </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="concat_gsm_pdus" name="fields">
                                                    PAGE COUNT </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <legend class="text-semibold">
                                                .
                                            </legend>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_destination_addr" name="fields">
                                                    MSISDN </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_esm_class" name="fields">
                                                    ESM CLASS</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="smpp_registered_delivery" name="fields">
                                                    REGISTERED DELIVERY </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="control-primary fields" value="msg_meta_data" name="fields">
                                                    META DATA </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li>
                                            <a data-action="collapse"></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"></a>
                                        </li>
                                        <li>
                                            <a data-action="close"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <fieldset>
                                        <div class="col-md-6">
                                            <legend class="text-semibold">
                                                With Aggregation? &nbsp; &nbsp; &nbsp;
                                                <div class="checkbox-inline">
                                                    <label>
                                                        <input type="radio" class="control-primary withAggregation" value="yes" name="withAggregation">
                                                        Yes </label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label>
                                                        <input type="radio" class="control-danger withAggregation" value="no" name="withAggregation">
                                                        No </label>
                                                </div>
                                            </legend>
                                        </div>
                                    </fieldset>
                                    <div id="aggreagationContainer" style="display: none;">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select class="select">
                                                    <optgroup label="Select Field">
                                                        <option value="SUM">SUM</option>
                                                        <option value="COUNT">COUNT</option>
                                                        <option value="DISTINCT">DISTINCT</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select class="select">
                                                    <optgroup label="Select Field">
                                                        <option value="SUM">SUM</option>
                                                        <option value="COUNT">COUNT</option>
                                                        <option value="DISTINCT">DISTINCT</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

</form>
</body>
<script>
    $(".withAggregation").change(function() {
        var myValue = $(this).val();
        if (myValue == 'yes') {
            $('#aggreagationContainer').show();
        } else {
            $('#aggreagationContainer').hide();
        };
    });

    $(".fields").change(function() {
        var columnArray=[];
        if ($(this).is(':checked')) {
            var myValue = $(this).val();
            columnArray.push=myValue;
            alert(columnArray);
        }
    });
</script>

</html>
