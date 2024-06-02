@extends('layouts.admin')

@section('content')
    <h3>Medicine Details</h3>

    <div class="card container col-md-12 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="form-group mt-2 col-md-12">
                    <label>Supplier</label>
                    <p>{{ $medicine->supplier->name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Medicine Name</label>
                    <p>{{ $medicine->medicine_name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Generic Name</label>
                    <p>{{ $medicine->generic_name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Brand Name</label>
                    <p>{{ $medicine->brand_name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Drug Name</label>
                    <p>{{ $medicine->drug_name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Price</label>
                    <p>{{ $medicine->price }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Manufacturer</label>
                    <p>{{ $medicine->manufacturer }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Dosage</label>
                    <p>{{ $medicine->dosage }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Quantity in Stock</label>
                    <p>{{ $medicine->quantity_stock }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Manufacture Date</label>
                    <p>{{ $medicine->manufacture_date ? \Carbon\Carbon::parse($medicine->manufacture_date)->format('F d, Y') : '' }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label>Expiration Date</label>
                    <p>{{ $medicine->expiration_date ? \Carbon\Carbon::parse($medicine->expiration_date)->format('F d, Y') : '' }}</p>
                </div>
                <div class="form-group mt-2 col-md-12">
                    <label>Image</label>
                    @if ($medicine->image)
                        <img src="{{ asset('assets/uploads/' . $medicine->image) }}" alt="Image" class="img-fluid image-new">
                    @else
                        <p>No Image</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('medicines.index') }}" class="btn btn-secondary col-md-1 offset-md-5">Back</a>
                <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-success col-md-1 offset-md-1">Edit</a>
            </div>
        </div>
    </div>
@endsection
