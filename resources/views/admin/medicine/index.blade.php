@extends('layouts.admin')

@section('content')
    <h3>Medicine List Content</h3>

    <div class="wrapper">
        <div>
            <a href="{{ route('medicines.create') }}" class="text-end btn btn-sm btn-primary">Add Medicine</a>
        </div>
        <table id="table" class="table table-sm table-bordered table-hover table-responsive text-center">
            <thead class="table">
                <tr>
                    <th>Medicine Name</th>
                    <th>Generic Name</th>
                    <th>Brand Name</th>
                    <th>Drug Class</th>
                    <th width="15%">Image</th>
                    <th width="17%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicines as $medicine)
                    <tr>
                        <td>{{ $medicine->medicine_name }}</td>
                        <td>{{ $medicine->generic_name }}</td>
                        <td>{{ $medicine->brand_name }}</td>
                        <td>{{ $medicine->drug_name }}</td>
                        <td>
                            {{-- @if ($medicine->image)
                                <img src="{{ asset('assets/uploads/' . $medicine->image) }}" alt="Image"
                                    style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                                No Image
                            @endif --}}
                            @if ($medicine->image)
                                <img src="{{ asset('assets/uploads/' . $medicine->image) }}" alt="Image"
                                    class="img-fluid image-new">
                            @else
                                No Image
                            @endif


                        </td>
                        <td>
                            <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-sm btn-info"
                                title="View">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-sm btn-success"
                                title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this medicine?');">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
