@extends('layouts.master')

@section('content')
    <div class="card my-5">
        <h4 class="card-header">Thêm mới bài viết</h4>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                        placeholder="Nhập tiêu đề">
                </div>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <label class="form-label">content</label>
                    <textarea name="content" id="" cols="60" rows="10"></textarea>
                </div>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <label class="form-label">published_at</label>
                    <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}">
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection
