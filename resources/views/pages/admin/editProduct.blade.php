@extends('layouts.admin')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="font-weight-bold">Edit Product</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h5 class="fw-bold">Update product details below.</h5>
                    </div>
                    
                    {{-- Display success message --}}
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ route('updateProduct', $product) }}" method="POST" enctype="multipart/form-data" class="form-group">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input id="title" name="title" type="text" value="{{ old('title', $product->title) }}" 
                                   class="form-control @error('title') is-invalid @enderror" placeholder="Enter product name">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 text-center">
                            <img src="{{ $product->picture }}" class="img-thumbnail" width="120px" alt="{{ $product->title }}">
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
                                @foreach(['Footwear', 'Huddy', 'T-Shirt', 'Bag', 'Shirt'] as $category)
                                    <option value="{{ $category }}" {{ $product->category == $category ? 'selected' : '' }}>{{ $category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sale" class="form-label">Sale Status</label>
                            <select id="sale" name="sale" class="form-select @error('sale') is-invalid @enderror">
                                <option value="1" {{ $product->sale == '1' ? 'selected' : '' }}>In Sale</option>
                                <option value="0" {{ $product->sale == '0' ? 'selected' : '' }}>Not In Sale</option>
                            </select>
                            @error('sale')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input id="price" name="price" type="number" value="{{ old('price', $product->price) }}" 
                                       class="form-control @error('price') is-invalid @enderror" placeholder="Enter price">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input id="quantity" name="quantity" type="number" value="{{ old('quantity', $product->quantity) }}" 
                                       class="form-control @error('quantity') is-invalid @enderror" placeholder="Enter quantity">
                                @error('quantity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" 
                                      rows="3" placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success px-4">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
