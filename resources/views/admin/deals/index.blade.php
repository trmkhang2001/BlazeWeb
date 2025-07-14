@extends('admin.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold">Danh sách Deal</h3>
            <a href="{{ route('deals.create') }}" class="btn btn-primary btn-sm">
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
                            <th>Tên Deal</th>
                            <th>Slug</th>
                            <th>Danh mục</th>
                            <th>Ảnh</th>
                            <th>Giá gốc</th>
                            <th>Giá khuyến mãi</th>
                            <th>Duyệt</th>
                            <th class="text-end">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($deals as $deal)
                            <tr>
                                <td>{{ $deal->id }}</td>
                                <td class="text-dark fw-bold">{{ $deal->name }}</td>
                                <td>{{ $deal->slug }}</td>
                                <td>{{ $deal->category->name ?? '—' }}</td>
                                <td>
                                    @if ($deal->image)
                                        <img src="{{ asset('storage/' . $deal->image) }}" width="60" alt="Ảnh deal">
                                    @endif
                                </td>
                                <td>{{ number_format($deal->original_price, 0, ',', '.') }}đ</td>
                                <td class="text-danger fw-bold">{{ number_format($deal->price, 0, ',', '.') }}đ</td>
                                <td>
                                    @if ($deal->is_approved)
                                        <span class="badge badge-light-success">Đã duyệt</span>
                                    @else
                                        <span class="badge badge-light-secondary">Chưa duyệt</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('deals.edit', $deal) }}"
                                        class="btn btn-warning btn-icon btn-bg-light btn-active-color-warning btn-sm me-1">
                                        Edit
                                    </a>

                                    <form action="{{ route('deals.destroy', $deal) }}" method="POST"
                                        style="display: inline-block;"
                                        onsubmit="return confirm('Bạn có chắc muốn xóa deal này?')">
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
                                <td colspan="9" class="text-center text-muted">Không có deal nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $deals->links() }}
            </div>
        </div>
    </div>
@endsection
