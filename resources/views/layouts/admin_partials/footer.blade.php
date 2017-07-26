<!-- footer content -->
<footer>
    <div class="pull-right">
        <!--Website by <a href="http://isoft-tech.co.uk" target="_blank">iSoft Technologies</a>-->
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->


</div>
</div>

<!-- jQuery -->
<!--<script src="{{URL::Asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $('body').on('focus', ".datepicker", function () {
                $(this).datepicker({changeYear: true});
            });
        });
</script>

<!-- Bootstrap -->
<script src="{{URL::Asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::Asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>

<!-- bootstrap-progressbar -->
<script src="{{URL::Asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

<!-- Skycons -->
<script src="{{URL::Asset('admin/vendors/skycons/skycons.js')}}"></script>

<!-- DateJS -->
<script src="{{URL::Asset('admin/vendors/DateJS/build/date.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{URL::Asset('admin/js/moment/moment.min.js')}}"></script>
<script src="{{URL::Asset('admin/js/datepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{URL::Asset('admin/build/js/custom.min.js')}}"></script>

@yield('admin/footer')


<!-- Skycons -->
<script>
$(document).ready(function () {
var icons = new Skycons({
    "color": "#73879C"
}),
        list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

for (i = list.length; i--; )
    icons.set(list[i], list[i]);

icons.play();
});
</script>
<!-- /Skycons -->



<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('admin/#reportrange span').html(start.format('admin/MMMM D, YYYY') + ' - ' + end.format('admin/MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
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
                'This Month': [moment().startOf('admin/month'), moment().endOf('admin/month')],
                'Last Month': [moment().subtract(1, 'month').startOf('admin/month'), moment().subtract(1, 'month').endOf('admin/month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('admin/#reportrange span').html(moment().subtract(29, 'days').format('admin/MMMM D, YYYY') + ' - ' + moment().format('admin/MMMM D, YYYY'));
        $('admin/#reportrange').daterangepicker(optionSet1, cb);
        $('admin/#reportrange').on('admin/show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('admin/#reportrange').on('admin/hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('admin/#reportrange').on('admin/apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('admin/MMMM D, YYYY') + " to " + picker.endDate.format('admin/MMMM D, YYYY'));
        });
        $('admin/#reportrange').on('admin/cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('admin/#options1').click(function () {
            $('admin/#reportrange').data('admin/daterangepicker').setOptions(optionSet1, cb);
        });
        $('admin/#options2').click(function () {
            $('admin/#reportrange').data('admin/daterangepicker').setOptions(optionSet2, cb);
        });
        $('admin/#destroy').click(function () {
            $('admin/#reportrange').data('admin/daterangepicker').remove();
        });
    });
</script>

<!-- /bootstrap-daterangepicker -->
