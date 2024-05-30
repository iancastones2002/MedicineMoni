@extends('layouts.admin')

@section('content')
    <h3>Add Medicine</h3>
    <form action="{{ route('medicines.store') }}" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="card container col-md-12 mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="form-group mt-2 col-md-6">
                        <label for="medicine_name">Medicine Name *</label>
                        <input type="text" class="form-control" name="medicine_name" id="medicine_name" required>
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="generic_name">Generic Name</label>
                        <input type="text" class="form-control" name="generic_name" id="generic_name">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="brand_name">Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" id="brand_name">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="drug_name">Drug Name</label>
                        <input type="text" class="form-control" name="drug_name" id="drug_name">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="manufacturer">Manufacturer</label>
                        <input type="text" class="form-control" name="manufacturer" id="manufacturer">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="dosage">Dosage</label>
                        <input type="text" class="form-control" name="dosage" id="dosage">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="quantity_stock">Quantity in Stock</label>
                        <input type="number" class="form-control" name="quantity_stock" id="quantity_stock">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="manufacture_date">Manufacture Date</label>
                        <input type="date" class="form-control" name="manufacture_date" id="manufacture_date">
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="expiration_date">Expiration Date</label>
                        <input type="date" class="form-control" name="expiration_date" id="expiration_date">
                    </div>
                    <div class="form-group mt-2 col-md-12">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('medicines.index') }}" class="btn btn-danger col-md-1 offset-md-5">Cancel</a>
                    <button type="submit" class="btn btn-success col-md-1 offset-md-1">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
