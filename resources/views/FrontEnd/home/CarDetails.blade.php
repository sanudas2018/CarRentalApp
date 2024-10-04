   <!-- All Css link -->
   @include('FrontEnd.header.cssLink')

<!-- Top menu and nav menu -->
@include('FrontEnd.header.nav.nav')


<!-- Search Start -->
@include('FrontEnd.home.SearchMenu.SearchMenu')
<!-- Search End -->

   
   <!-- Page Header Start -->
   <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">{{$SingleCar -> name}}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->


<!-- Main body Car details  -->
@include('FrontEnd.components.SingleCarDetails.SingleCarDetails')


<!-- Vendor Start -->
@include('FrontEnd.components.Vendor.Vendor')

<!-- Vendor End -->


<!-- Footer Start -->
@include('FrontEnd.footer.footer')
<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);


        });
    })(jQuery)
</script>