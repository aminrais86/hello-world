
@csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-10">
                               
                                {!! Form::text('nama',null,['class'=>"form-control",'required','autofocus']); !!}

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori_galeri_id" class="col-md-2 col-form-label text-md-right">{{ __('Galeri') }}</label>
                            <div class="col-md-10">
                            {!! Form::select('kategori_galeri_id',$KategoriGaleri,null,["class"=>"form-control","required"]); !!}

                                @error('kategori_galeri
                                _id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="path" class="col-md-2 col-form-label text-md-right">{{ __('Path') }}</label>

                        <div class="col-md-10">

                               {!! Form::text('path',null,['class'=>"form-control",'required','autofocus']); !!}

                                @error('path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-2 col-form-label text-md-right">{{ __('Keterangan') }}</label>
                            
                            <div class="col-md-10">

                            {!! Form::textarea('keterangan',null,["class"=>"form-control"]); !!}

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                
                                {!! Form::hidden ('users_id', Auth::id() ); !!}

                                @error('users_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <a href="{!! route('galeri.index') !!}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>