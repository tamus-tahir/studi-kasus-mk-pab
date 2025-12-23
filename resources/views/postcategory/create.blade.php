<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card shadow p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
    </div>

    <div class="card shadow p-3">

        <form action="{{ route('postcategory.store') }}" method="post" enctype="multipart/form-data" class="form">
            @csrf

            <div class="row g-3 mb-3">

                <div class="mb-3">
                    <label for="title" class="form-label required">Judul</label>
                    <input class="form-control @error('title') is-invalid  @enderror" type="text" id="title"
                        name="title" required value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            <div class="text-end">
                <a href="{{ route('postcategory.index') }}" class="btn btn-warning me-1">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>



        </form>

    </div>

</x-app>
