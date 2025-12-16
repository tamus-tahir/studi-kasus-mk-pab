<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card shadow p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
    </div>

    <div class="card shadow p-3">

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('slide.create') }}" role="button">Tambah</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="data-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $slide->title }}</td>
                            <td>{{ $slide->order }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm btn-detail" data-bs-toggle="modal"
                                    data-bs-target="#detailModal" data-route="{{ route('slide.show', $slide) }}">
                                    <i class='bx bx-show'></i>
                                </button>
                                <a href="{{ route('slide.edit', $slide) }}" class="btn btn-warning btn-sm">
                                    <i class='bx bx-edit-alt'></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm btn-delete" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-route="{{ route('slide.destroy', $slide) }}">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    @push('modals')
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Slide</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-detail">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
        <script>
            $('#data-table').on('click', '.btn-delete', function() {
                $('#form-delete').attr('action', $(this).data('route'))
            })

            $('#data-table').on('click', '.btn-detail', function() {
                $('#modal-detail').load($(this).data('route'))
            })
        </script>
    @endpush

</x-app>
