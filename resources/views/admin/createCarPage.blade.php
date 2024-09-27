<!-- All Css link -->
@include('Admin.header.HeaderFooter')

<!-- Header Section Start -->
@include('Admin.header.NavAdmin')
<!-- Header Section End -->
<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  @include('Admin.Header.SideNav')
  <!-- Sidebar Navigation end-->

  <!-- Main Dashboard Body Start -->
  <div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
   
    <!-- From Section Start -->
  
    @include('Admin.Cars.Car-create')
    @include('Admin.Cars.Car-list')
   

  


   



    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
               
                <p class="no-margin-bottom">2024 &copy; Manabendra Das <a target="_blank" href="#">SANU</a>.</p>
            </div>
        </div>
    </footer>
</div>
  <!-- Main Dashboard Body End -->
</div>

<!-- Footer Section Start -->
<!-- JavaScript files-->

@include('Admin.Footer.FooterAdmin')

<!-- Footer Section End -->