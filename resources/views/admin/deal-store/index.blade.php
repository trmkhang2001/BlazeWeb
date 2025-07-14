@extends('admin.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold">Danh sách Deal Store</h3>
            <a href="{{ route('deal-stores.create') }}" class="btn btn-primary btn-sm">
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
                            <th>Tên Store</th>
                            <th>Slug</th>
                            <th>Danh mục</th>
                            <th>Events</th>
                            <th>Ảnh</th>
                            <th>Duyệt</th>
                            <th class="text-end">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $store)
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td class="text-dark fw-bold">{{ $store->name }}</td>
                                <td>{{ $store->slug }}</td>
                                <td>{{ $store->category->name ?? '—' }}</td>
                                <td>{{ $store->events }}</td>
                                <td>
                                    @if ($store->image)
                                        <img src="{{ asset('storage/' . $store->image) }}" alt="" width="60">
                                    @endif
                                </td>
                                <td>
                                    @if ($store->is_approved)
                                        <span class="badge badge-light-success">Đã duyệt</span>
                                    @else
                                        <span class="badge badge-light-secondary">Chưa duyệt</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('deal-stores.edit', $store) }}"
                                        class="btn btn-icon btn-warning btn-sm me-1" title="Sửa">
                                        Sửa
                                    </a>

                                    <form action="{{ route('deal-stores.destroy', $store) }}" method="POST"
                                        style="display:inline-block" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-danger btn-sm" title="Xóa">
                                            Xóa
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">Không có store nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $stores->links() }}
            </div>
        </div>
    </div>
@endsection
