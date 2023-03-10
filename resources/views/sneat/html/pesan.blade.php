@extends('sneat.html.index')
@section('konten')
    <div class="card">
                <h5 class="card-header">Table Pesanan</h5>
                <div class="pb-1">
            <a href='{{ url('sneat.html.tambah') }}' class="btn btn-primary btn-sm" style="float:right">+ Tambah Data</a>
        </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id Pesanan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No.identitas</th>
                        <th>Jenis Pesanan</th>
                        <th>Harga</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($data as $item)
                          <tr>
                        <td>{{$item->id_pesan}}</td>
                        <td>{{$item->nama_cust}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->no_iden}}</td>
                        <td>{{$item->jenis_pesan}}</td>
                        <td>{{$item->Harga}}</td>
                      
                        <td><a href="/pesan/edit/{{$item->id_pesan}}" class="btn btn-sm btn-success">Edit</a>
                          <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('pesan/'.$item->id_pesan) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
@endsection
