@extends('layouts.master')

@section('content')
    <div class="card my-5">
        <h4 class="card-header">Danh sách bài viết</h4>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="{{ route('post.create') }}" class="btn btn-success">Thêm bài viết</a>
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
                        <button class="btn btn-secondary">Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>title</th>
                    <th>content</th>
                    <th>published_at</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                        <tr>
                            <td>{{  $item->id }}</td>
                            <td><a href="{{ route('post.show',$item->id) }}">{{  $item->title }}</a></td>
                            <td class="text-truncate" style="max-width: 300px;">{{ $item->content }}</td>
                            <td>{{  $item->published_at }}</td>
                            <td>

                                <a href="{{ route('post.edit',$item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('post.destroy',$item['id']) }}" method="post" onsubmit="return confirm('Bạn có muốn xóa không?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Xoá</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
       {{-- {{ $data->links('pagination::bootstrap-5') }}
       {{ $data->links('pagination::bootstrap-5') }} --}}
    </div>
@endsection
