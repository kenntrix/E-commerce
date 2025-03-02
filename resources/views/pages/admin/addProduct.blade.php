@extends('layouts.admin')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="font-weight-bold">Add New Product</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h5 class="fw-bold">Fill in the product details below.</h5>
                    </div>
                    
                    {{-- Display success message --}}
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter product name">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="picture" class="form-label">Product Image</label>
                            <input id="picture" name="picture" type="file" class="form-control @error('picture') is-invalid @enderror">
                            @error('picture')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category" class="form-select @error('category') is-invalid @enderror">
                                <option value="null" selected>Select Category</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Huddy">Huddy</option>
                                <option value="T-Shirt">T-Shirt</option>
                                <option value="Bag">Bag</option>
                                <option value="Shirt">Shirt</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input id="quantity" name="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" placeholder="Enter quantity">
                                @error('quantity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter product description"></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success px-4">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
