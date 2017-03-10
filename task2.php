<?php
include ('data.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.tablesorter.js"></script>
</head>
<body>

<div class="container" style="margin-top: 20px;">
    <form action="" method="post">
        <label for="from">с:</label>
        <input type="text" id="from" name="from">
        <label for="to">до:</label>
        <input type="text" id="to" name="to">
        <input type="submit" name="btn" value="OK">
    </form>
</div>
<?php if (isset($_POST['btn'])) { ?>
    <table id="myTable" class="tablesorter">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>user_name</th>
            <th>email</th>
            <th>text</th>
            <th>file</th>
            <th>date</th>
            <th>ip</th>
        </tr>
        </thead>
        <tbody>
        <?php table($query); ?>
        </tbody>

    </table>
<?php } ?>

<script>
    var dates = $("#from, #to").datepicker({
        defaultDate: "+1w",
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        onSelect: function (selectedDate) {
            var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $(this).data("datepicker"),
                date = $.datepicker.parseDate(
                    instance.settings.dateFormat || $.datepicker._defaults.dateFormat,
                    selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
</script>
<script>
    jQuery(document).ready(function ($) {
        $("#myTable").tablesorter({
            headers: {
                0: {sorter: false},
                1: {sorter: false},
                2: {sorter: false},
                3: {sorter: false},
                4: {sorter: false},
                5: {sorter: false},
                7: {sorter: false}
            }
        });
    });
</script>
</body>
</html>
