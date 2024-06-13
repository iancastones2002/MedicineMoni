@extends('layouts.admin')

@section('content')
    <h3>Medicine List Content</h3>
    <div class="float-right">
        <a href="{{ route('medicines.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Medicine</a>
    </div>
    <div class="col-12 mt-5">
        <div class="mt-5">
            <div class="container-fluid">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Medicine/Brand Name</th>
                                <th>Supplier</th>
                                <th>Generic Name</th>
                                <th>Drug Class</th>
                                <th width="15%">Remarks</th>
                                <th width="15%">Image</th>
                                <th width="17%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicines as $medicine)
                                @php
                                    $expiration = $medicine->time_until_expiration;
                                @endphp
                                <tr>
                                    <td>{{ $medicine->medicine_name }} <br> <small>{{ $medicine->brand_name }}</small></td>
                                    <td>{{ $medicine->supplier->name }}</td>
                                    <td>{{ $medicine->generic_name }}</td>
                                    <td>{{ $medicine->drug_name }}</td>
                                    <td class="{{ $expiration['class'] }}">
                                        {{ $expiration['message'] }}
                                    </td>
                                    <td>
                                        @if ($medicine->image)
                                            <img src="{{ asset('assets/uploads/' . $medicine->image) }}" alt="Image" class="img-fluid image-new">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-sm btn-info" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-sm btn-success" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this medicine?');">
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
    </div>
@endsection
