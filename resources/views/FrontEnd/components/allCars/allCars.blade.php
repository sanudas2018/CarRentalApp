<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">03</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car </h1>

        <div class="row">
            @foreach ($cars as $car )
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4 rounded" src="{{'uploads/'.$car -> image}}" alt="">
                    <h4 class="text-uppercase mb-4">
                        {{$car -> name}}
                    </h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{$car -> year}}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>{{$car -> car_type}}</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>

                                @if ($car -> availability == 1)
                                Yes
                                @elseif($car -> availability == 0)
                                No
                                @endif</td>

                            </span>
                        </div>
                    </div>
                    <a class="btn btn-info rounded" href="{{url('car_details', $car->id)}}">Details</a>
                    <a class="btn btn-primary px-3 rounded" href="">${{$car -> daily_rent_price}}/Day</a>
                </div>
            </div>

            @endforeach
        </div>



    </div>
</div>