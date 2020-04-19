@extends('admin.layout.layout')
@section('konten')




  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Lihat Employee</h1>
              </div>


				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>

				    </div>


				@endif





					<h5 >Nama : {{$read ->nama}}</h1>
					<br>
					<h5 >Website : {{$read ->email}}</h1>
					<br>
					<h5 > ID Company :{{$read -> company_id}} </h1>
					<br>
					<h5 > Name Company :{{$read -> company->nama}} </h1>








              <hr>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>








@endsection