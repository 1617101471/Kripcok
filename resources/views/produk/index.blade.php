@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-12"><br>
			<div class="card card-primary">
			  <div class="card-header"><h4> produk</h4>
			  	<div class="card-title pull-right">
			  		<a href="{{ route('produk.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Produk</th>
					  <th>Harga</th>
					  <th>Gambar Produk</th>
					  <th>Deskkripsi</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($produks as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_produk }}</td> 
				    	<td>Rp. {{ $data->harga }}</td>
				    	<td><img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	<td>{!! $data->content !!}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('produk.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('produk.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('produk.destroy',$data->id) }}">
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
