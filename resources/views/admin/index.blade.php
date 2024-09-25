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
  @include('Admin.Dashboard.MainBody')
  <!-- Main Dashboard Body End -->
</div>

<!-- Footer Section Start -->
<!-- JavaScript files-->

@include('Admin.Footer.FooterAdmin')

<!-- Footer Section End -->