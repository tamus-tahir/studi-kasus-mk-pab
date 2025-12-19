<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card shadow p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
    </div>

    <div class="card shadow p-3">

        <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data" class="form">
            @csrf

            <div class="row g-3 mb-3">
                <div class="col-md-3">
                    <label for="image" class="form-label required">Upload Foto</label>
                    <input class="form-control @error('image') is-invalid  @enderror" type="file" id="upload"
                        name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img src="{{ asset('niceadmin/img/noimage-landscape.png') }}" alt="image"
                        class="w-100 rounded mt-2" id="preview">
                </div>

                <div class="col-md-9">
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

                    <div class="mb-3">
                        <label for="description" class="form-label required">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid  @enderror" id="description" name="description" required
                            cols="30" rows="2">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="button" class="form-label required">Judul Tombol</label>
                        <input class="form-control @error('button') is-invalid  @enderror" type="text" id="button"
                            name="button" required value="{{ old('button') }}">
                        @error('button')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label required">Link</label>
                        <input class="form-control @error('link') is-invalid  @enderror" type="text" id="link"
                            name="link" required value="{{ old('link') }}">
                        @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="order" class="form-label required">Urutan Tampil</label>
                        <input class="form-control @error('order') is-invalid  @enderror" type="text" id="order"
                            name="order" required value="{{ old('order') }}">
                        @error('order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="text-end">
                <a href="{{ route('slide.index') }}" class="btn btn-warning me-1">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>



        </form>

    </div>

</x-app>
