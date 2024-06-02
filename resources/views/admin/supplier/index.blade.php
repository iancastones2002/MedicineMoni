@extends('layouts.admin')

@section('content')
    <h3>Supplier List Content</h3>
    <div class="float-right ">
        <a href="{{ route('suppliers.create') }}" class="text-end btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add
            Supplier</a>
    </div>
    <div class="col-12 mt-5">
        <div class="mt-5">
            <div class="container-fluid">
                <table id="table" class="table table-sm table-bordered table-hover table-responsive text-center">
                    <thead class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>
                                    <a href="{{ route('suppliers.show', ['supplier' => $supplier->id]) }}"
                                        class="btn btn-sm btn-info" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('suppliers.edit', ['supplier' => $supplier->id]) }}"
                                        class="btn btn-sm btn-success" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('suppliers.destroy', ['supplier' => $supplier->id]) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this supplier?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
