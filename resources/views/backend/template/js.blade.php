<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="backend/assets/js/jquery.min.js"></script>
<script src="backend/assets/js/bootstrap.min.js"></script>
<script src="backend/assets/js/detect.js"></script>
<script src="backend/assets/js/fastclick.js"></script>
<script src="backend/assets/js/jquery.blockUI.js"></script>
<script src="backend/assets/js/waves.js"></script>
<script src="backend/assets/js/jquery.slimscroll.js"></script>
<script src="backend/assets/js/jquery.scrollTo.min.js"></script>
<script src="backend/plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="backend/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="backend/plugins/counterup/jquery.counterup.min.js"></script>

<!-- Flot chart js -->
<script src="backend/plugins/flot-chart/jquery.flot.min.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="backend/plugins/flot-chart/jquery.flot.crosshair.js"></script>

<script src="backend/plugins/moment/moment.js"></script>
<script src="backend/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- Dashboard init -->
<script src="backend/assets/pages/jquery.dashboard_2.js"></script>

<!-- App js -->
<script src="backend/assets/js/jquery.core.js"></script>
<script src="backend/assets/js/jquery.app.js"></script>

<script>
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2016',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });
</script>