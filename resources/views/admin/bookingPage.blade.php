<!-- All Css link -->
@include('Admin.header.HeaderFooter')
<style>
    tr,th{
        padding: 2px;
        /* background-color: gray; */
    }
</style>
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
                <h2 style="text-align: center; font-size:25px" class="h5 no-margin-bottom ">All Booking Cars List</h2>
            </div>
        </div>

        <!-- From Section Start -->


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="card px-5 py-5">
                        <div class="row justify-content-between ">


                        </div>
                        <hr class="bg-dark " />
                        <table class="table text-center" id="tableData">
                            <thead >
                                <tr class="bg-light">
                                    <th>NO</th>
                                    <!-- <th>Car Id</th> -->
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th>Phone</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">
                                <?php $i = 1; ?>
                                @foreach ($allData as $data )
                                <tr>
                                    <td><?php echo $i;
                                        $i++; ?></td>
                                   

                                   <!-- <td>{{$data->car_id}}</td> -->
                                   <td><img style="width: 75px;" class="rounded-xl" alt="" src="uploads/{{$data->car->image}}"></td>
                                    
                                    
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>

                                    <td>{{$data->start_date}}</td>
                                    <td>{{$data->end_date}}</td>
                                    <td>{{$data->total_cost}}</td>
                                    <td>
                                @if ($data->status == 'approve')
                                <span class="text-success">Approved</span>
                                
                                @endif
                                @if ($data->status == 'rejected')
                                <span class="text-danger">Rejected</span>
                                
                                @endif
                                @if ($data->status == 'waiting')
                                <span class="text-warning">Waiting</span>
                                
                                @endif

                                    </td>

                                    <td >
                                        <button class="btn btn-success btn-sm btn-outline-success"><a href="{{url('booking_approve',$data->id)}}">Approve</a>
                                        </button>
                                        <button class="btn btn-warning btn-sm btn-outline-warning"><a href="{{url('booking_rejected',$data->id)}}">Rejected</a>
                                        </button>


                                        <button class="btn deleteBtn btn-sm btn-outline-danger"><a onclick="return confirm('Are you sure to delete');" href="{{url('booking_delete',$data->id)}}">Delete</a></button>
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