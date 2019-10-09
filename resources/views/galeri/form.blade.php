@csrf
<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('gelar') }}</label>

    <div class="col-md-6">
        <input id="nama" type="text" class="form-control @error('judul') is-invalid @enderror" name="nama" required autofocus>

        @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('path') }}</label>

    <div class="col-md-6">
        <input id="path" type="text" class="form-control @error('judul') is-invalid @enderror" name="path" required autofocus>

        @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('konten') }}</label>

    <div class="col-md-6">
        {!! Form::textarea('isi', null, ['class' => 'form-control', 'name' => 'isi']) !!}
    </div>
</div>

<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('berita_kategori') }}</label>

    <div class="col-md-6">
        {!! Form::select('kategori_galeri_id', $kategori_galeri, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Done') }}
        </button>
        <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<!--script src="https://cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script-->