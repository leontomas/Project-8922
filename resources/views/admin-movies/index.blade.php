@extends('layout-admin')

@section('content')
<!-- Pokemon -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Movie Controller</h4> 
                        <a href="{{ route('movies.create') }}" class="btn btn-primary btn-rounded float-right veiwbutton">Add Movie</a> 
                    </div>
                </div>
            </div>
        </div>

<!-- to here -->

                                    
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

        <table class="table table-bordered">
            <tr>
                <!-- <th>MID</th> -->
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Movie Url</th>
                <th>Description</th>
                <th>Language</th>
                <th>Year</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Status</th>
                <th class="text-right">Actions</th>
            </tr>

        @foreach ($movies as $movie)

            <tr>
            <!-- <td>{{ ++$i }}</td> -->
                <td>
                    <h2 class="table-avatar"><a href="#" class="mr-2">
                        <img class="pill" src="/images/thumbnails/{{ $movie->thumbnail }}" width="80px"></h2></td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->movie_url }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->language }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->created_at->format('m/d/Y H:i') }}</td>
                <td>{{ $movie->updated_at->format('m/d/Y H:i') }}</td>             
                <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a></div></td>
                    <td class="text-right">
                        <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                            <div class="dropdown-menu dropdown-menu-right"> 
                            <!-- Edit -->
                                <a class="dropdown-item" href="{{ route('show',$movie->id) }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                                @csrf
                            <!-- Delete -->
                                @method('DELETE')
                                <a class="dropdown-item" href="{{ route('edit',$movie->id) }}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> 
                    </div>
            </tr>                               
            @endforeach
        </table>
    </div>
</div>    

{!! $movies->links() !!}

@endsection