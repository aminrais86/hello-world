
@csrf

                        <div class="form-group row">
                            <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-10">
                                
                            {!! Form::text('judul',null,['class'=>"form-control",'required','autofocus']); !!}

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="kategori_pengumuman_id" class="col-md-2 col-form-label text-md-right">{{ __('Pengumuman') }}</label>
                            <div class="col-md-10">
                                

                            {!! Form::select('kategori_pengumuman_id',$KategoriPengumuman,null,["class"=>"form-control","required"]); !!}

                                @error('kategori_pengumuman
                                _id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('isi') }}</label>
                            <div class="col-md-10">

                            {!! Form::textarea('isi',null,["class"=>"form-control"]); !!}

                                @error('isi')
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
                            <div class="col-md-1 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-1">
                                <a href="{!! route('galeri.index') !!}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>