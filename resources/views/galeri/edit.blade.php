@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-primary">
			  <div class="card-header">Edit Data Galeri
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('galeri.update',$galeris->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                    	<label class="cc-payment" class="control-label mb-1">Gambar</label>
			  			@if (isset ($galeris) && $galeris->gambar)
			  			<p>
			  				<br>
			  				<img src="{{ asset('assets/img/gambar/' .$galeris->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="gambar" value="{{ $galeris->gambar }}">
                    </div>

			  		<!-- <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="number" name="harga" class="form-control" value="{{ $galeris->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div> -->
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection