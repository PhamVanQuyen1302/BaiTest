@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Chi tiết bài viết</h4>
            </div>

            <div class="card-body">
                <div class="listjs-table" id="studentList">
                    <div class="row g-4 mb-3">
                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="studentTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="key">Thông tin</th>
                                        <th class="sort" data-sort="value">Giá trị</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </td>
                                        <td>ID</td>
                                        <td>{{ $model->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </td>
                                        <td>Tên Baì viết</td>
                                        <td>{{ $model->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </td>
                                        <td>Nội dung</td>
                                        <td>{{ $model->content }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </td>
                                        <td>Ngày đằng</td>
                                        <td>{{ $model->published_at }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a"
                                        style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Xin lỗi! Không tìm thấy kết quả</h5>
                                    <p class="text-muted mb-0">Chúng tôi không tìm thấy sinh viên nào phù hợp với tìm
                                        kiếm của bạn.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="javascript:void(0);">Previous</a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="javascript:void(0);">Next</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <a href="{{ route('post.index') }}" class="btn btn-danger">Quay về danh sách</a>
    </div><!-- end col -->
</div>
@endsection
