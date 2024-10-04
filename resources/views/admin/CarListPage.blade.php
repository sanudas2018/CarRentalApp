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


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="card px-5 py-5">
                        <div class="row justify-content-between ">
                            <div class="align-items-center col">
                                <h4>All Cars</h4>
                            </div>

                        </div>
                        <hr class="bg-dark " />
                        <table class="table text-center" id="tableData">
                            <thead>
                                <tr class="bg-light">
                                    <th>NO</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Brand</th>

                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Available</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">
                                @foreach ($allData as $data )
                                <tr>
                                    <td>1</td>
                                    <td><img class="w-50 h-auto" alt="" src="uploads/{{$data->image}}"></td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->brand}}</td>
                                    <td>{{$data->car_type}}</td>
                                    <td>{{$data->daily_rent_price}}</td>
                                    <td class="">
                                        @if ($data->availability == 1)
                                        Yes
                                        @elseif($data->availability == 0)
                                        No
                                        @endif</td>

                                    <td>
                                        <button class="btn btn-info btn-sm btn-outline-success"><a href="{{url('carEditPage',$data->id)}}">Edit</a>
                                        </button>


                                        <button class="btn deleteBtn btn-sm btn-outline-danger"><a onclick="return confirm('Are you sure to delete');" href="{{url('car_delete',$data->id)}}">Delete</a></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



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