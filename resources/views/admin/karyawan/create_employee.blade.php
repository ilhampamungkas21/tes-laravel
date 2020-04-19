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
                <h1 class="h4 text-gray-900 mb-4">Create Emloyee</h1>
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




				<form role="form" method="post" enctype="multipart/form-data" action="/storeemployee">
          						

          						
          						{!! csrf_field() !!}


					  <div class="form-group">
					    <label>Nama </label>
					    <input type="text" class="form-control" name="nama" placeholder="">
					  </div>


					  <div class="form-group">
					    <label >Email Employee</label>
					    <input type="email" class="form-control" name="email" placeholder="">
					  </div>


					  <div class="form-group">
					    <label >Id perusahaan</label>
					    <label ></label>
					    <input type="text" class="form-control" name="company_id" value="{{$company_id}}" readonly>
					  </div>


            			 <div class="box-footer">
            				<button type="submit" class="btn btn-primary">Create</button>
          				</div>


					</form>


              <hr>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>








@endsection