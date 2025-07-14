@extends('admin.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Danh sách Offer</h3>
            <a href="{{ route('offers.create') }}" class="btn btn-sm btn-primary">
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
                            <th>Tên</th>
                            <th>Offer</th>
                            <th>Code</th>
                            <th>URL</th>
                            <th>Store</th>
                            <th>Verified</th>
                            <th>Duyệt</th>
                            <th class="text-end">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($offers as $offer)
                            <tr>
                                <td>{{ $offer->id }}</td>
                                <td class="text-dark fw-bold">{{ $offer->name }}</td>
                                <td>{{ $offer->offer }}</td>
                                <td>{{ $offer->code }}</td>
                                <td><a href="{{ $offer->url }}" target="_blank">Link</a></td>
                                <td>{{ $offer->store->name ?? '—' }}</td>
                                <td>{!! $offer->is_verified
                                    ? '<span class="badge badge-light-success">Có</span>'
                                    : '<span class="badge badge-light">Không</span>' !!}</td>
                                <td>{!! $offer->is_approved
                                    ? '<span class="badge badge-light-success">Duyệt</span>'
                                    : '<span class="badge badge-light-warning">Chờ</span>' !!}</td>
                                <td class="text-end">
                                    <a href="{{ route('offers.edit', $offer) }}" class="btn btn-warning btn-sm me-1">
                                        Edit
                                    </a>
                                    <form action="{{ route('offers.destroy', $offer) }}" method="POST"
                                        style="display:inline-block"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">Chưa có offer nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $offers->links() }}
            </div>
        </div>
    </div>
@endsection
