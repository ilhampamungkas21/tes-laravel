@extends('admin.layout.layout')
@section('konten')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->




          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a class="btn btn-primary" href="create_companies" role="button">Buat Perusahaan</a>
            @if (session()->has('message'))
                <h1>{{ session('message') }}</h1>
            @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Perusahaan</th>
                      <th>Email Perusahaan</th>
                      <th>website </th>
                      <th>Logo </th>
                      <th>Opsi </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nama Perusahaan</th>
                      <th>Email Perusahaan</th>
                      <th>website </th>
                      <th>Logo </th>
                      <th>Opsi </th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach($data as $k)
                  <tr>
                    <th>{{ $k -> id }}</th>
                    <th>{{ $k -> nama }}</th>
                    <th>{{ $k -> email }}</th>
                    <th>{{ $k -> website }}</th>
                  <th class="center"> <img src="{{ asset('storage/app/company/' . $k->logo) }}" alt="" width="50" height="50"> </th>
                
                    
  
                    <th>
                      
                          <a class="btn btn-primary" href="/companies/employee/{{$k ->id}}" role="button">View</a>
                          <a class="btn btn-primary" href="/companies/update_companies/{{$k ->id}}" role="button">Update</a>
                          <a class="btn btn-danger" href="/companies/delete_companies/{{$k ->id}}" role="button">Hapus</a>





                              <div class="modal fade" id="hapusdepartemenmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Tinggalkan ?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">Yakin Dihapus</div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-primary" href="/companies/delete_companies/{{$k ->id}}">hapus</a>
                                    </div>
                                  </div>
                                </div>
                              </div>


                    </th>
                    @endforeach

                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
</div>











    






@endsection()