@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <!-- Movie ID -->   <!-- <th>MID</th> -->
            <!-- Thumbnail -->  <th>Thumbnail</th>
            <!-- Title -->      <th>Title</th>
            <!-- Movie Url -->  <th>Movie Url</th>
            <!-- Description --><th>Description</th>
            <!-- Language -->   <th>Language</th>
            <!-- Year -->       <th>Year</th>
            <!-- Created at --> <th>Created at</th>
            <!-- Updated at --> <th>Updated at</th>
            <!-- Action -->     <th>Status</th>
            <!-- Actions -->    <th class="text-right">Actions</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <!-- Movie ID -->   <!-- <td>{{ ++$i }}</td> -->
                    <!-- Thumbnail -->  <td>
                                            <h2 class="table-avatar">
                                            <a href="#" class="mr-2">
                                            <img class="pill" src="/images/thumbnails/{{ $movie->thumbnail }}" width="80px"><!--width="80px"-->
                                            </h2>
                                        </td>
                    <!-- Title -->      <td>{{ $movie->title }}</td>
                    <!-- Movie Url -->  <td>{{ $movie->movie_url }}</td>
                    <!-- Description --><td >{{ $movie->description }}</td>
                    <!-- Language -->   <td>{{ $movie->language }}</td>
                    <!-- Year -->       <td>{{ $movie->year }}</td>
                    <!-- Created at --> <td>{{ $movie->created_at->format('m/d/Y H:i') }}</td>
                    <!-- Updated at --> <td>{{ $movie->updated_at->format('m/d/Y H:i') }}</td>
                                        
                    <!-- Status -->     <td>
                                            <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                        </td>
                    <!-- Action -->     <td class="text-right">
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
  
    {!! $products->links() !!}
      
