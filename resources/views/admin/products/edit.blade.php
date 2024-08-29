@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Edit Products
                    <a href="{{ url('admin/products') }}" class="btn btn-danger text-white btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">
                                Home
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag"
                                type="button" role="tab" aria-controls="seotag" aria-selected="false">
                                SEO Tags
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                type="button" role="tab" aria-controls="details" aria-selected="false">
                                Details
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images"
                                type="button" role="tab" aria-controls="images" aria-selected="false">
                                Images
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{$category->id == $product->category_id ? 'selected' : ''}}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="productname">Product Name</label>
                                <input type="text" name="name" id="" value="{{ $product->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="productname">Product Slug</label>
                                <input type="text" name="slug" id="" value="{{ $product->slug }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="brand">Brand</label>
                                <select name="brand" id="" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" {{$brand->name==$product->brand ? 'selected' : ''}}>
                                        {{ $brand->name }}

                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="small_description">Small Description (500 Words)</label>
                                <textarea name="small_description" id="" rows="4" class="form-control"> {{ $product->small_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="" rows="4" class="form-control">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="seotag" role="tabpanel"
                            aria-labelledby="seotag-tab">
                            <div class="mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" id="" value="{{ $product->meta_title }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea name="meta_keyword" id="" rows="4" class="form-control">{{ $product->meta_keyword }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="" rows="4" class="form-control">{{ $product->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="details" role="tabpanel"
                            aria-labelledby="details-tab">
                            <div class="row ">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="original_price">Original Price</label>
                                        <input type="text" name="original_price" value="{{ $product->original_price }}" id=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="selling_price">Selling Price</label>
                                        <input type="text" name="selling_price" id="" value="{{ $product->selling_price }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" name="quantity" id="" value="{{ $product->quantity }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="trending">Trending</label>
                                        <input type="checkbox" name="trending" id=""
                                            style="height:15px; width:15px" {{ $product->trending == '1' ? 'checked' : '' }} />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="checkbox" name="status" id=""
                                            style="height:15px; width:15px" {{ $product->status == 1 ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="images" role="tabpanel"
                            aria-labelledby="images-tab">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="image">Upload Product Images</label>
                                        <input type="file" name="image[]" id="" class="form-control"
                                            multiple>
                                    </div>
                                    <div>
                                        @if($product->productImages)
                                        <div class="row">
                                            @foreach($product->productImages as $image)
                                            <div class="col-md-2">
                                                <img src="{{ asset($image->image) }}" alt="img" style="width:80px" class="me-4 border">
                                                <a href="{{url('admin/product-image/'.$image->id.'/delete')}}" class="d-block">Remove</a>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <h5>No images foun</h5>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary"> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection