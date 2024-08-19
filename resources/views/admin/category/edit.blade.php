    @extends('layouts.admin')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Category
                            <a href="{{ url('admin/category') }}" class="btn btn-primary text-white btn-sm float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="">
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="" value="{{$category->slug}}">
                                    @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="" rows="3" >{{$category->description}}</textarea>
                                    @error('description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    <img src="{{asset('uploads/category/'.$category->image)}}" alt="" height="100">
                                    @error('image') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status">Status</label></br>
                                    <input type="checkbox" name="status" id="" {{$category->status == '1' ?'':'checked'}}>
                                </div>
                                <div class="col-md-12 bg-light mb-3">
                                    <h4>SEO tags</h4>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" id="" value="{{$category->meta_title}}">
                                    @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" class="form-control" id="" value="{{$category->meta_keyword}}">
                                    @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" class="form-control" id="" value="{{$category->meta_description}}">
                                    @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end ">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
