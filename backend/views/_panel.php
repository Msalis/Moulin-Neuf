<?php require("_header.php") ?>

<?php require("_blockDatesForm.php"); ?>
<?php require("_listing.php"); ?>

<?php require("_blockedPeriods.php"); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../static/js/jquery-ui-1.11.3.custom/jquery-ui.js"></script>

<script>
var disabledSpecificDays = ["3-2-2015", "3-3-2015", "3-4-2015", "3-5-2015"];
 
function disableSpecificDaysAndWeekends(date) {
    var m = date.getMonth();
    var d = date.getDate();
    var y = date.getFullYear();
 
    for (var i = 0; i < disabledSpecificDays.length; i++) {
        if ($.inArray((m + 1) + '-' + d + '-' + y, disabledSpecificDays) != -1 || new Date() > date) {
            return [false];
        }
    }
 
    var noWeekend = $.datepicker.noWeekends(date);
    return noWeekend[0] ? noWeekend : [true];
}
</script>

<script>
	$(function() {
		$( "#beginDate, #endDate" ).datepicker({
			beforeShowDay : disableSpecificDaysAndWeekends
		});
	});
</script>
</body>
</html>