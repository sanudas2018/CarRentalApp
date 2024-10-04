<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <h1 class="display-4 text-uppercase mb-5">{{$SingleCar -> name}}</h1>
                <div class="row mx-n2 mb-3">
                    <div class="col-md-10 col-10 px-2 pb-2">
                        <img class="img-fluid w-100" src="{{'../uploads/'.$SingleCar -> image}}" alt="">
                    </div>
                    <!-- <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="{{asset('FrontEnd/img/gallery-2.jpg')}}" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="{{asset('FrontEnd/img/gallery-3.jpg')}}" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="{{asset('FrontEnd/img/gallery-4.jpg')}}" alt="">
                        </div> -->
                </div>
                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod.</p>
                <div class="row pt-2">
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span>Model: {{$SingleCar -> car_model}}</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <span>Type: {{$SingleCar -> car_type}}</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <span>Brand: {{$SingleCar -> brand}}</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>Year: {{$SingleCar -> year}}</span>
                    </div>
                    <div class="col-md-12 col-12 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>Daily Rent Price: {{$SingleCar -> daily_rent_price}}</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="bg-secondary p-5">
                    

                        @if (Auth::id() )
                        <h3 style="font-size: 30px;" class="text-primary text-center mb-4">Check Availability </h3>
                        
                        @elseif(Auth::id()== false)
                        <h3 class="text-primary text-center mb-4"> Please Login Fast  </h3>
                        @endif
                   
                    <!-- <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Pickup Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Drop Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div> -->
                    <form action="{{url('add_booking', $SingleCar->id)}}" method="Post">

                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-bs-dismiss="alert">X</button>
                            {{session()->get('message')}}
                        </div>
                        @endif

                        @if ($errors)
                        @foreach ($errors->all() as $errors )
                        <h5 class="text-danger">{{$errors}}</h5>
                        @endforeach

                        @endif

                        <!-- Name -->
                        <div class="form-group">
                            <div class="" id="name" data-target-input="nearest">
                                <input placeholder="Your Name" name="name" type="text" class="form-control p-4 "
                                    @if (Auth::id())

                                    value="{{Auth::user()->name}}"
                                    @endif />
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <div class="" id="email" data-target-input="nearest">
                                <input placeholder="Your Email" name="email" type="email" class="form-control p-4 "
                                    @if (Auth::id())

                                    value="{{Auth::user()->email}}"
                                    @endif />
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <div class="" id="phone" data-target-input="nearest">
                                <input placeholder="Your Phone Number" name="phone" type="text" class="form-control p-4 "
                                    @if (Auth::id())

                                    value="{{Auth::user()->phone}}"
                                    @endif />
                            </div>
                        </div>
                        <!-- Start Data -->
                        <div class="form-group">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input name="startDate" type="date" class="form-control p-4 datetimepicker-input" placeholder="Start Date"
                                    id="startDate" />
                            </div>
                        </div>
                        <!-- End Data -->
                        <div class="form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input name="endDate" type="date" class="form-control p-4 datetimepicker-input" placeholder="End Date"
                                    id="endDate" />
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                    data-target="#time1" data-toggle="datetimepicker" />
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                        <select class="custom-select px-4" style="height: 50px;">
                            <option selected>Select Person</option>
                            <option value="1">Person 1</option>
                            <option value="2">Person 2</option>
                            <option value="3">Person 3</option>
                        </select>
                    </div> -->
                        <!-- Price -->
                        <div class="form-group">
                            <div class="" id="total_cost" data-target-input="nearest">
                                <input name="total_cost" type="text" class="form-control p-4 "
                                    value="{{$SingleCar->daily_rent_price}}" />
                            </div>
                        </div>
                        <!-- <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Booking Now</button>
                        </div> -->

                        @if (Auth::id() == false)
                        <div class="form-group mb-0">

                            <div class="form-group mb-0">
                                <button style="display: none;" class="btn btn-primary btn-block " type="submit" style="height: 50px;">Booking Now</button>
                            </div>

                        </div>
                        @elseif(Auth::id())
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block " type="submit" style="height: 50px;">Booking Now</button>
                        </div>
                        @endif
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Detail End -->


<!-- Related Car Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <h2 class="mb-4">Related Cars</h2>
        <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{asset('FrontEnd/img/car-rent-1.png')}}" alt="">
                <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>2015</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">$99.00/Day</a>
            </div>
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{asset('FrontEnd/img/car-rent-2.png')}}" alt="">
                <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>2015</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">$99.00/Day</a>
            </div>
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{asset('FrontEnd/img/car-rent-3.png')}}" alt="">
                <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>2015</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">$99.00/Day</a>
            </div>
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{asset('FrontEnd/img/car-rent-4.png')}}" alt="">
                <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>2015</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">$99.00/Day</a>
            </div>
        </div>
    </div>
</div>
<!-- Related Car End -->