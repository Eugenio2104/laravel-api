@extends('layouts.app');



@section('content')
    <div class="container">
        <h1>show</h1>

        <div class="card" style="width: 18rem;">
            <img src="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : 'https://img.freepik.com/free-icon/user_318-790139.jpg?w=2000' }}"
                class="card-img-top" alt="...">
            <div class="card-body">

                @if ($project->category)
                    <h5 class="card-title">{{ $project->category->type }}</h5>
                @endif

                @if ($project->technologies)
                    @foreach ($project->technologies as $technology)
                        <h5 class="card-title">{{ $technology->type }}</h5>
                    @endforeach
                @endif

                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text">{{ $project->summary }}</p>
            </div>
        </div>
        <a class="btn btn-info" href="{{ route('admin.projects.index') }}">Torna all'elenco dei project</a>
    </div>
@endsection
