@extends('layout.app')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All <span
                                            class="badge badge-white">10</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Draft <span
                                            class="badge badge-primary">2</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pending <span
                                            class="badge badge-primary">3</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Trash <span
                                            class="badge badge-primary">0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>All Pricing SP</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <!-- Button to trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#createModal"><i class="fas fa-plus"></i>
                                    Create New Pricing SP
                                </button>
                                <a href="{{ route('sppricing.previewalldata') }}" class="btn btn-success"> <i class="fas fa-eye"></i>
                                    Preview in Website
                                </a>
                            </div>
                            <div class="float-right">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix mb-3"></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pricing SP</th>
                                            <th>Harga Pricing SP</th>
                                            <th>Deskripsi Pricing SP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $post->nama_pricingsp }}</td>
                                                <td>{{ $post->harga_pricingsp }}</td>
                                                <td>
                                                    <div>{!! $post->deskripsi_pricingsp !!}</div>
                                                </td>
                                                {{-- <td>{{ strlen($post->deskripsi_pricingsp) > 70 ? substr($post->deskripsi_pricingsp, 0, 70) . '...' : $post->deskripsi_pricingsp }}</td> --}}
                                                <td>
                                                    <div class="d-flex justify-content">
                                                        <a href="{{ route('sppricing.preview', ['id' => $post->id]) }}" class="btn btn-primary">Preview</a>
                                                        <button type="submit" class="btn btn-warning"
                                                            style="margin-left: 5px;" data-toggle="modal"
                                                            data-target="#editModal{{ $post->id }}">Edit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            style="margin-left: 5px;"
                                                            onclick="deletePost({{ $post->id }}, '{{ $post->nama_pricingsp }}')">
                                                            Delete
                                                        </button>

                                                        <!-- Formulir Penghapusan Tersembunyi -->
                                                        <form id="delete-form-{{ $post->id }}"
                                                            action="{{ route('sppricing.destroy', ['id' => $post->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function deletePost(id, nama_pricingsp) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete the post with title: "' + nama_pricingsp + '". This action cannot be undone!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi penghapusan
                const form = document.getElementById('delete-form-' + id);
                form.submit();
            }
        });
    }
</script>

<script>
    @foreach ($posts as $post)
    CKEDITOR.replace('deskripsi-{{ $post->id }}', {
        toolbar: [],
        removeButtons: ''
    });
    @endforeach
</script>

<!-- Create Post Modal -->
@include('pages.diko_sp.pricing.modals.create_modal')
@include('pages.diko_sp.pricing.modals.edit_modal')
@endsection
