@extends('layouts.admin')

@section('content')
    <h3>Supplier Details</h3>

    <div class="card container col-md-12 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="form-group mt-2 col-md-6">
                    <label for="name">Supplier Name</label>
                    <p>{{ $supplier->name }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label for="email">Email</label>
                    <p>{{ $supplier->email }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label for="phone">Phone</label>
                    <p>{{ $supplier->phone }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label for="address">Address</label>
                    <p>{{ $supplier->address }}</p>
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label for="contact_person">Contact Person</label>
                    <p>{{ $supplier->contact_person }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('suppliers.index') }}" class="btn btn-secondary col-md-1 offset-md-5">Back</a>
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-success col-md-1 offset-md-1">Edit</a>
            </div>
        </div>
    </div>
@endsection
