@extends('master.admin.master')
@section('title')
    Sub Category Add
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto ">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">Add New Sub Category</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session:: get('message')}}</p>
                            <form action="{{route('sub_category.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Category Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="category_id" class="form-control">
                                            <option>------Select Category-------</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="description" class="form-label">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="image" class="form-label">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" id="image">
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
