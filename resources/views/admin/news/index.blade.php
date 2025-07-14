@extends('admin.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold">Danh sách Tin tức</h3>
            <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm">
                <i class="ki-duotone ki-plus fs-2"></i> Thêm mới
            </a>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Slug</th>
                            <th>Danh mục</th>
                            <th>Ảnh</th>
                            <th>Duyệt</th>
                            <th class="text-end">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td class="fw-bold text-dark">{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->category->name ?? '—' }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" width="60">
                                    @endif
                                </td>
                                <td>
                                    @if ($item->is_approved)
                                        <span class="badge badge-light-success">Đã duyệt</span>
                                    @else
                                        <span class="badge badge-light-secondary">Chưa duyệt</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('news.edit', $item) }}"
                                        class="btn btn-warning btn-icon btn-bg-light btn-active-color-warning btn-sm me-1">
                                        Edit
                                    </a>
                                    <form action="{{ route('news.destroy', $item) }}" method="POST" class="d-inline-block"
                                        onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Chưa có tin tức nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection
