<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Med</title>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row py-5 mt-3 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mb-3">Add Medicine</h2>
                <img src="images/difftambal.jpg" class="img-fluid mb-3" alt="Responsive Image">
                <div class="mb-3 input-group col-lg-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-0 border-md border-right-2"></span>
                    </div>
                    <input class="form-control bg-white border-left-3 border-md" type="file" id="formFileMultiple" multiple>
                </div>
            </div>
            <!-- Registration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">
                        <!-- MedID -->
                        <div class="input-group col-lg-3 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="medID" type="text" name="medID" placeholder="MedID" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- SupplierID -->
                        <div class="input-group col-lg-3 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="supplierID" type="text" name="supplierID" placeholder="SupplierID" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Medicine Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="medicineName" type="text" name="medicineName" placeholder="Medicine Name" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Generic Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="genericName" type="text" name="genericName" placeholder="Generic Name" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Brand Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="brandName" type="text" name="brandName" placeholder="Brand Name" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Drug Class -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="drugClass" type="text" name="drugClass" placeholder="Drug Class" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Dosage -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="dosage" type="text" name="dosage" placeholder="Dosage" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Manufacturer -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="manufacturer" type="text" name="manufacturer" placeholder="Manufacturer" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Manufactured Date -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="manufacturedDate" type="date" name="manufacturedDate" placeholder="Manufactured Date" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Expiration Date -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="expirationDate" type="date" name="expirationDate" placeholder="Expiration Date" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Price -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="price" type="text" name="price" placeholder="Price" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Quantity -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-1 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="quantity" type="text" name="quantity" placeholder="Quantity No." class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Add Medicine Button -->
                        <div class="form-group col-lg-12 mx-auto">
                            <button class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-plus"></i>
                                <span class="font-weight-bold">Add New Medicine</span>
                            </button>
                        </div>
                        <!-- Edit Button -->
                        <div class="form-group col-lg-4 mx-auto">
                            <button class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-pencil"></i>
                                <span class="font-weight-bold">Edit</span>
                            </button>
                        </div>
                        <!-- Delete Button -->
                        <div class="form-group col-lg-4 mx-auto">
                            <button class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-trash"></i>
                                <span class="font-weight-bold">Delete</span>
                            </button>
                        </div>
                        <!-- Back Button -->
                        <div class="form-group col-lg-4 mx-auto">
                            <button class="btn btn-primary btn-block py-2 btn-back">
                                <i class="fa fa-arrow-left"></i>
                                <span class="font-weight-bold">Back</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
