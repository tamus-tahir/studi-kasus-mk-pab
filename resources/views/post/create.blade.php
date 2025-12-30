<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card shadow p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
    </div>

    <div class="card shadow p-3">

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="form">
            @csrf

            <div class="row g-3 mb-3">
                <div class="col-md-3">
                    <label for="cover" class="form-label required">Cover</label>
                    <input class="form-control @error('cover') is-invalid  @enderror" type="file" id="upload"
                        name="cover" required>
                    @error('cover')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img src="{{ asset('niceadmin/img/noimage-landscape.png') }}" alt="cover"
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
                        <label for="post_date" class="form-label required">Tanggal</label>
                        <input class="form-control @error('post_date') is-invalid  @enderror" type="date"
                            id="post_date" name="post_date" required value="{{ old('post_date') }}">
                        @error('post_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="post_category_id" class="form-label required">Kategori</label>
                        <select class="form-select  @error('post_category_id') is-invalid  @enderror"
                            id="post_category_id" name="post_category_id" required>
                            @foreach ($postcategories as $postcategory)
                                <option value="{{ $postcategory->id }}" @selected(old('post_category_id') == $postcategory->id)>
                                    {{ $postcategory->title }}</option>
                            @endforeach
                        </select>
                        @error('post_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publish" class="form-label required">Publish</label>
                        <select class="form-select  @error('publish') is-invalid  @enderror" id="publish"
                            name="publish" required>
                            <option value="Yes" @selected(old('publish') == 'Yes')>Yes</option>
                            <option value="No" @selected(old('publish') == 'No')>No</option>
                        </select>
                        @error('publish')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="col-12">

                    <div class="mb-3">
                        <label for="content" class="form-label required">Isi Berita</label>
                        <textarea class="form-control tinymce-editor  @error('content') is-invalid  @enderror" type="date" id="content"
                            name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-end">
                <a href="{{ route('post.index') }}" class="btn btn-warning me-1">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>



        </form>

    </div>

</x-app>
