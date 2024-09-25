<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <!-- Total Summary Start-->
    @include('admin.Dashboard.TotalSummary')
    <!-- Total Summary End-->

    <!-- Bar Chart Start -->
    <!-- @include('admin.Dashboard.BarChart') -->

    <!-- Bar Chart End -->

    <!-- Bar2 Chart Start -->
    <!-- @include('admin.Dashboard.BarChart2') -->

    <!-- Bar2 Chart End -->

    <!-- Single Car Details Start -->
    @include('admin.Dashboard.SingleCarCard')

    <!-- Single Car Details End -->


    <!-- New User List Start -->
    <!-- @include('admin.Dashboard.NewUserList') -->
    <!-- New User List End -->
    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
               
                <p class="no-margin-bottom">2024 &copy; Manabendra Das <a target="_blank" href="#">SANU</a>.</p>
            </div>
        </div>
    </footer>
</div>