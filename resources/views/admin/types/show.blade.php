@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header h4 d-flex align-items-center justify-content-between">
                        <div>{{ $type->id }}</div>
                        @include ('admin.types.partials.editZone')
                    </div>
                    <div class="card-body">
                        <h5>Title:</h5>
                        <p>{{ $type->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
