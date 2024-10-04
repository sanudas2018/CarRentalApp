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

       
        <form action="{{ url('car_update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mb-4">
                    <div class="col-6 p-1">



                        <label for="name" class="col-md-6 col-form-label">Car Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Car Name" value="{{$data->name}}">
                        </div>
                        <label for="brand" class="col-md-6 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" value="{{$data->brand}}">>
                        </div>
                    </div>
                    <div class="col-6 p-1">


                        <label for="model" class="col-md-6 col-form-label">Model</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model" required value="{{$data->car_model}}">
                        </div>

                        <label for="year" class="col-md-6 col-form-label">Year</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="year" name="year" placeholder="Year" required value="{{$data->year}}">
                        </div>

                    </div>
                    <div class="col-6 p-1">


                        <label for="car_type" class="col-md-6  col-form-label">Car Type</label>
                        <div class="col-sm-10">
                            <select
                                class="form-control" id="car_type" name="car_type" required>
                                <option selected value="{{$data->car_type}}">{{$data->car_type}}</option>
                                <option value="SUV">SUV</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Truck">Truck</option>
                            </select>
                        </div>
                        <label for="daily_rent_price" class="col-md-6  col-form-label">Daily Rent Price</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" class="form-control" id="daily_rent_price" name="daily_rent_price" placeholder="Daily Rent Price" required value="{{$data->daily_rent_price}}">
                        </div>
                    </div>

                    <div class="col-6 p-1">



                        <label for="availability" class="col-md-6  col-form-label">Availability</label>
                        <div class="col-sm-10">
                            <select

                                class="form-control" id="availability" name="availability" required>
                                <option selected value="{{$data->availability}}">{{$data->availability}}</option>
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>

                        <br />

                        <img class="w-20" id="images" src="/uploads/{{$data->image}}" />
                        <br />

                        <label class="form-label">Image</label>
                        <input value="{{$data->image}}" oninput="images.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="image">


                    </div>
                </div>

                <input class="btn bg-gradient-primary mx-2" type="submit" value="Car Update">
            </div>

        </form>
        <!-- <div class="">
            <button id="modal-close" class="btn bg-gradient-primary mx-2" aria-label="Close">Close</button>
            <button id="save-btn" class="btn bg-gradient-success">Car Update</button>
        </div> -->
    </div>


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


<script>
  
</script>
<!-- Footer Section End -->