@extends('layouts.admin')

@section('content')
    <h3>Dashboard</h3>

    @if ($medicines->isEmpty())
        <p>No medicines found.</p>
    @else
        <div class="row">
            @foreach ($medicines as $medicine)
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex text-start py-2">
                                <div class="flex-fill">
                                    @if ($medicine->image)
                                        <img src="{{ asset('assets/uploads/' . $medicine->image) }}" alt="Image"
                                            class="img-fluid images">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </div>
                            </li>
                            <li class="list-group-item d-flex text-start">
                                <div class="flex-fill w-50">Brand Name:</div>
                                <div class="flex-fill w-50">{{ $medicine->brand_name }}</div>
                            </li>
                            <li class="list-group-item d-flex text-start">
                                <div class="flex-fill w-50">Generic Name:</div>
                                <div class="flex-fill w-50">{{ $medicine->generic_name }}</div>
                            </li>
                            <li class="list-group-item d-flex text-start">
                                <div class="flex-fill w-50">Price</div>
                                <div class="flex-fill w-50">{{ $medicine->price }}</div>
                            </li>
                            <li class="list-group-item d-flex gap-3 text-start">
                                <div class="flex-fill w-50">QuantityNo</div>
                                <div class="flex-fill w-50">{{ $medicine->quantity_stock }}</div>
                            </li>
                            @php
                                $expiration = $medicine->time_until_expiration;
                            @endphp
                            <li class="list-group-item d-flex text-start {{ $expiration['class'] }}">
                                <div class="flex-fill w-50">Time Until Expiration</div>
                                <div class="flex-fill w-50"><small>{{ $expiration['message'] }}</small></div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-sm btn-success">More Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    </div>
@endsection
