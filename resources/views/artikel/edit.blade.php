@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-primary">
			  <div class="card-header">Edit Data artikel
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('artikel.update',$artikels->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

        			<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Admin</label>	
			  			<select name="id_user" class="form-control">
			  				@foreach($users as $data)
			  				<option value="{{ $data->id }}" {{ $selectusers == $data->id ? 'selected="selected"' : '' }} >{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_galeri') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar</label>	
			  			<select name="id_galeri" class="form-control">
			  				@foreach($galeris as $data)
			  				<option value="{{ $data->id }}" {{ $selectgaleris == $data->id ? 'selected="selected"' : '' }} >{{ $data->gambar }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_galeri'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_galeri') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<!-- <div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pinjam</label>	
			  			<input type="date" name="tgl_pinjam" class="form-control" value="{{ $artikels->tgl_pinjam }}"  required>
			  			@if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
			  		</div> -->

			  		<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
			  			<label class="control-label">Content</label>
			  			<textarea id="text" type="ckeditor" name="content" class="ckeditor" required>{{ $artikels->content }}</textarea>	
			  			@if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection