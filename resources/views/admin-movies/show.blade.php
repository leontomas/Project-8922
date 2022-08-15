@extends('layout-admin')
  
@section('content')
<div class="bg-light m-4 p-4 rounded">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie</h2>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-body">
                                <img class="col-sm-4" src="/images/thumbnails/{{ $movie->thumbnail }}" width="100px" alt="sans"/>
                                <div class="col-sm-8">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <p>{{ $movie->movie_url }}</p>
                                    <p class="card-text">{{ $movie->description }}</p>
                                    <strong>Year:</strong>
                                    {{ $movie->year }}
                                    <strong>Date Created:</strong>
                                    {{ $movie->created_at->format('m/d/Y H:i') }}
                                    <strong>Date Updated:</strong>
                                    {{ $movie->updated_at->format('m/d/Y H:i') }}
                                </div>
                                <div class="mt-2">
                                    
                                        
                                        <a href="#" class="btn btn-info">Edit</a>
                                        <a class="btn btn-secondary" href="{{ route('index') }}"> Back</a>
                                    
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection