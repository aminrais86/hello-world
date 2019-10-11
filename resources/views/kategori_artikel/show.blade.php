@extends ('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-contener">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List Kategori Artikel</div>
				<div class="card-body">
					<div class="from-group row">
<label class="col-md-4 col-form-label text-md-right">ID</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->id !!}</label>
</div>
					<div class="from-group row">
<label class="col-md-4 col-form-label text-md-right">Nama</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->nama !!}</label>
</div>
					<div class="from-group row">
<label class="col-md-4 col-form-label text-md-right">User id</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->users_id !!}</label>
</div>
					<div class="from-group row">
<label class="col-md-4 col-form-label text-md-right">Create</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->created_at !!}</label>
</div>
					<div class="from-group row">
<label class="col-md-4 col-form-label text-md-right">Update</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->updated_at !!}</label>
</div>
<div class="form-group row mb-0">
<div class="cold-md-6 offset-md-4">
	<a href="{!! route('kategori_artikel.index') !!}" class="btn btn-primary">Kembali</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection