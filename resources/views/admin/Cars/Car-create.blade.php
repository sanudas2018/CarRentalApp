<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
            </div>
            <div class="modal-body">
                <!-- action="{{ url('createCar') }}" method="POST" enctype="multipart/form-data" -->
                <form id="save-form">
                    @csrf
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-6 p-1">



                                <label for="name" class="col-md-6 col-form-label">Car Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Car Name">
                                </div>
                                <label for="brand" class="col-md-6 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand">
                                </div>
                            </div>
                            <div class="col-6 p-1">


                                <label for="model" class="col-md-6 col-form-label">Model</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="model" name="model" placeholder="Model" required>
                                </div>

                                <label for="year" class="col-md-6 col-form-label">Year</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="year" name="year" placeholder="Year" required>
                                </div>

                            </div>
                            <div class="col-6 p-1">


                                <label for="car_type" class="col-md-6  col-form-label">Car Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="car_type" name="car_type" required>
                                        <option value="SUV">SUV</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="Truck">Truck</option>
                                    </select>
                                </div>
                                <label for="daily_rent_price" class="col-md-6  col-form-label">Daily Rent Price</label>
                                <div class="col-sm-10">
                                    <input type="number" step="0.01" class="form-control" id="daily_rent_price" name="daily_rent_price" placeholder="Daily Rent Price" required>
                                </div>
                            </div>

                            <div class="col-6 p-1">



                                <label for="availability" class="col-md-6  col-form-label">Availability</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="availability" name="availability" required>
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select>
                                </div>

                                <br />
                                <label for="image" class="col-sm-2 col-form-label">Car Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <!-- <img class="w-15" id="image" src="{{asset('Admin/img/default.jpg')}}" />
                                <br />

                                <label class="form-label">Image</label>
                                <input oninput="image.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="image"> -->


                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <input type="submit" id="save-btn" class="btn bg-gradient-success"></input>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>


<script>
    // FillCategoryDropDown();

    // async function FillCategoryDropDown() {
    //     let res = await axios.get("/list-category")
    //     res.data.forEach(function(item, i) {
    //         let option = `<option value="${item['id']}">${item['name']}</option>`
    //         $("#productCategory").append(option);
    //     })
    // }


    async function Save() {

        let carName = document.getElementById('name').value;
        let brand = document.getElementById('brand').value;
        let model = document.getElementById('model').value;
        let year = document.getElementById('year').value;
        let carType = document.getElementById('car_type').value;
        let rentPrice = document.getElementById('daily_rent_price').value;
        let availability = document.getElementById('availability').value;

        let image = document.getElementById('image').files[0];



        if (model.length === 0) {
            // console.log(carName)
            errorToast("carName Required !");
        }
        document.getElementById('modal-close').click();

        let formData = new FormData();
        formData.append('name', carName)
        formData.append('brand', brand)
        formData.append('model', model)
        formData.append('year', year)
        formData.append('car_type', carType)
        formData.append('daily_rent_price', rentPrice)
        formData.append('availability', availability)
        formData.append('image', image)

        const config = {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }

        showLoader();
        let res = await axios.post("/createCar", formData, config)
        // return console.log(res);
        hideLoader();

        if (res.status === 201) {
            successToast('Request completed');
            document.getElementById("save-form").reset();
            // await getList();
        } else {
            errorToast("Request fail !")
        }
    }
</script>