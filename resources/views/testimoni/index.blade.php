@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-12"><br>
			<div class="card card-primary">
			  <div class="card-header"><h4> Testimoni</h4>
			  	<div class="card-title pull-right">
			  		<a href="{{ route('testimoni.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Testimoni</th>
					  <th>Alamat</th>
					  <th>Gambar</th>
					  <th>Deskkripsi</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($testimonis as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td> 
				    	<td>{{ $data->alamat }}</td>
				    	<td><img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	<td>{!! $data->content !!}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('testimoni.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('testimoni.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('testimoni.destroy',$data->id) }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
