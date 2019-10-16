@csrf
<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('nama') }}</label>

    <div class="col-md-6">
       {!! Form::text('nama', null, ['class' => 'form-control', 'name' => 'nama', 'value' => old('nama')]) !!}
    </div>
</div>



<div class="form-group row">

    <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

    @error('users_id')
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
        <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<!--script src="https://cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script-->