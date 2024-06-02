@extends('layouts.admin')

@section('content')
    <h3>Add Medicine</h3>

    <form action="{{ route('medicines.store') }}" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="card container col-md-12 mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="form-group mt-2 col-md-12">
                        <label for="supplier_id">Supplier *</label>
                        <select class="form-control @error('supplier_id') is-invalid @enderror" name="supplier_id" id="supplier_id" required>
                            <option value="">Select Supplier</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        @error('supplier_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="medicine_name">Medicine Name *</label>
                        <input type="text" class="form-control @error('medicine_name') is-invalid @enderror" name="medicine_name" id="medicine_name" value="{{ old('medicine_name') }}" required>
                        @error('medicine_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="generic_name">Generic Name</label>
                        <input type="text" class="form-control @error('generic_name') is-invalid @enderror" name="generic_name" id="generic_name" value="{{ old('generic_name') }}">
                        @error('generic_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="brand_name">Brand Name</label>
                        <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name" id="brand_name" value="{{ old('brand_name') }}">
                        @error('brand_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="drug_name">Drug Name</label>
                        <input type="text" class="form-control @error('drug_name') is-invalid @enderror" name="drug_name" id="drug_name" value="{{ old('drug_name') }}">
                        @error('drug_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="manufacturer">Manufacturer</label>
                        <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" id="manufacturer" value="{{ old('manufacturer') }}">
                        @error('manufacturer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="dosage">Dosage</label>
                        <input type="text" class="form-control @error('dosage') is-invalid @enderror" name="dosage" id="dosage" value="{{ old('dosage') }}">
                        @error('dosage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="quantity_stock">Quantity in Stock</label>
                        <input type="number" class="form-control @error('quantity_stock') is-invalid @enderror" name="quantity_stock" id="quantity_stock" value="{{ old('quantity_stock') }}">
                        @error('quantity_stock')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="manufacture_date">Manufacture Date</label>
                        <input type="date" class="form-control @error('manufacture_date') is-invalid @enderror" name="manufacture_date" id="manufacture_date" value="{{ old('manufacture_date') }}">
                        @error('manufacture_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="expiration_date">Expiration Date</label>
                        <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" name="expiration_date" id="expiration_date" value="{{ old('expiration_date') }}">
                        @error('expiration_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-12">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('medicines.index') }}" class="btn btn-secondary col-md-1 offset-md-5">Cancel</a>
                    <button type="submit" class="btn btn-success col-md-1 offset-md-1">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
