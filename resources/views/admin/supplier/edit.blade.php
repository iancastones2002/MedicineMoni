@extends('layouts.admin')

@section('content')
    <h3>Edit Supplier</h3>

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" id="form">
        @csrf
        @method('PUT')
        <div class="card container col-md-12 mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="form-group mt-2 col-md-6">
                        <label for="name">Supplier Name *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $supplier->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $supplier->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone', $supplier->phone) }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address', $supplier->address) }}">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-6">
                        <label for="contact_person">Contact Person</label>
                        <input type="text" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" id="contact_person" value="{{ old('contact_person', $supplier->contact_person) }}">
                        @error('contact_person')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary col-md-1 offset-md-5">Cancel</a>
                    <button type="submit" class="btn btn-success col-md-1 offset-md-1">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection
