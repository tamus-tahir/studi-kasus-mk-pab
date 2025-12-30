<div class="row g-3 justify-content-center mb-3">
    <div class="col-md-3">
        <img src="{{ asset('storage/' . $post->cover) }}" alt="cover" class="w-100 rounded">
    </div>
</div>

<table class="table">
    <tr>
        <td width="80">Judul</td>
        <td width="3">:</td>
        <td>{{ $post->title }}</td>
    </tr>
    <tr>
        <td>Kategori </td>
        <td>:</td>
        <td>{{ $post->postCategory->title }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>{{ $post->post_date_indo }}</td>
    </tr>
    <tr>
        <td>Publish</td>
        <td>:</td>
        <td>{{ $post->publish }}</td>
    </tr>
    <tr>
        <td>Dibuat</td>
        <td>:</td>
        <td>{{ $post->created_at->diffForHumans() }}</td>
    </tr>
    <tr>
        <td>Diubah</td>
        <td>:</td>
        <td>{{ $post->updated_at->diffForHumans() }}</td>
    </tr>
</table>

{!! $post->content !!}
