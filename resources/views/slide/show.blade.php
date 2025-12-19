<div class="row g-3 justify-content-center mb-3">
    <div class="col-md-3">
        <img src="{{ asset('storage/' . $slide->image) }}" alt="Avatar" class="w-100 rounded">
    </div>
</div>

<table class="table">
    <tr>
        <td width="80">Judul</td>
        <td width="3">:</td>
        <td>{{ $slide->title }}</td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td>{{ $slide->description }}</td>
    </tr>
    <tr>
        <td>Tombol</td>
        <td>:</td>
        <td>{{ $slide->button }}</td>
    </tr>
    <tr>
        <td>Link</td>
        <td>:</td>
        <td>{{ $slide->link }}</td>
    </tr>
    <tr>
        <td>Urutan</td>
        <td>:</td>
        <td>{{ $slide->order }}</td>
    </tr>
    <tr>
        <td>Dibuat</td>
        <td>:</td>
        <td>{{ $slide->created_at->diffForHumans() }}</td>
    </tr>
    <tr>
        <td>Diubah</td>
        <td>:</td>
        <td>{{ $slide->updated_at->diffForHumans() }}</td>
    </tr>
</table>
