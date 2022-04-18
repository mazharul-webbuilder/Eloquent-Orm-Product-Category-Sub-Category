@extends('master.admin.master')
@section('title')
    Update Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto ">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">Update Category</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session:: get('message')}}</p>
                            <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Category Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="description" class="form-label">Category Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" class="form-control">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="image" class="form-label">Category Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" id="image">
                                        <br>
                                        <img src="{{asset($category->image)}}" height="50" width="80" alt="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" value="Create New Category" class="btn btn-success">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
