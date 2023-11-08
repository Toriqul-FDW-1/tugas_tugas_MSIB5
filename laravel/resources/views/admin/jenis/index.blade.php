@extends('admin.layout.appadmin')
@section('content')


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{url('admin/jenis_produk/create')}}" class="btn btn-primary" type="submit">
                            <i class="fas fa-plus"></i>

                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1  @endphp
                                        @foreach($jenis_produk as $j)
                                    
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$j->nama}}</td>
                                            <td>
                                                <a href=""><button class="btn btn-sm btn-warning">Edit</button></a>
                                            </td>
                                        </tr>
                                    
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            
@endsection

