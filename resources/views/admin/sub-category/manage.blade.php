@extends('master.admin.master')
@section('title')
    Manage Sub Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center text-secondary mb-4">Manage Sub Categories</h3>
                    <div class="card card-body shadow">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $subCategory)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$subCategory->category->name}}</td>
                                <td>{{$subCategory->name}}</td>
                                <td>{{$subCategory->description}}</td>
                                <td><img src="{{$subCategory->image}}" alt="" height="50" width="80"></td>
                                <td>{{$subCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('sub_category.edit', ['id' => $subCategory->id])}}" class="btn btn-sm btn-success">Update</a>

                                    <a href="" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('subCategoryDeleteForm{{$subCategory->id}}').submit();">Delete</a>
                                    <form action="{{route('sub_category.delete', ['id' => $subCategory->id])}}" method="post" id="subCategoryDeleteForm{{$subCategory->id}}">
                                        @csrf
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
    </section>
@endsection
