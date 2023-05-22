@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header h4 d-flex align-items-center justify-content-between">
                        <div>{{ $project->id }}. {{ $project->title }}</div>
                        @include ('admin.projects.partials.editZone')
                    </div>
                    <div class="card-body">
                        <h5>Description:</h5>
                        <p>{{ $project->description }}</p>

                        <h5>Project link:</h5>
                        <a href="#">{{ $project->link }}</a>

                        @if ($project->image)
                            <div class="preview">
                                <img id="file-image-preview" class="pt-3 d-block"
                                    src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                            </div>
                        @endif


                        {{-- @if ($element->prova_id)
                            {{$element->tableB->name}}
                        @endif --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
