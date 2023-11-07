@extends('admin.layout.appadmin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1  @endphp
                                        @foreach($pelanggan as $pel)
                                    
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$pel->kode}}</td>
                                            <td>{{$pel->nama}}</td>
                                            <td>{{$pel->jk}}</td>
                                            <td>{{$pel->tmp_lahir}}</td>
                                            <td>{{$pel->tgl_lahir}}</td>
                                            <td>{{$pel->email}}</td>
                                            <td>{{$pel->kartu->nama}}</td>
                                        </tr>
                                    
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            
@endsection