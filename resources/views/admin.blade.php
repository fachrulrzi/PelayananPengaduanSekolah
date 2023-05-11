
@extends('layouts.admin-main')
@section('container')
<div class="row justify-content-center">
    {{-- Dashboard admin --}}
    <div class="col-12 py-4" id="dashboard">
        <h2 class="mb-3">Dashboard Admin</h2>
    <div class="card  p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Kelas</th>
                <th scope="col">Kategori</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Bukti</th>
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($aspirasi as $as)
                <tr>
                    <th scope="row">{{ $as->id }}</th>
                    <td>{{ $as->input_aspirasi->siswa->nis }}</td>
                    <td>{{ $as->input_aspirasi->siswa->kelas }}</td>
                    <td>{{ $as->kategori->ket_kategori }}</td>
                    <td>{{ $as->input_aspirasi->lokasi }}</td>
                    <td>{{ $as->input_aspirasi->ket }}</td>
                    <td><img src="{{ asset('storage/'.$as->input_aspirasi->bukti) }}" class="img-thumbnail" style="max-width: 50%; min-width: 20%;" alt=""></td>
                    <td>{{ $as->created_at}}</td>
                    <td>  @if ($as['status'] == 'Menunggu')
                        <form action="/admin/status" method="post">
                            @csrf
                            <input type="hidden" name="status" value="Proses">
                            <input type="hidden" name="id_aspirasi"
                                value="{{ $as->id_aspirasi }}">
                            <button type="submit"
                                class="btn btn-primary btn-sm mb-3 w-100" onclick="return confirm('Anda yakin ingin proses pengaduan ini?')">Proses</button>
                        </form>
                    @elseif($as['status'] == 'Proses')
                    <form action="/admin/status" method="post">
                        @csrf
                        <input type="hidden" name="status" value="Selesai">
                        <input type="hidden" name="id_aspirasi"
                            value="{{ $as->id_aspirasi }}">
                        <button type="submit"
                            class="btn btn-success btn-sm mb-3 w-100" onclick="return confirm('Anda yakin pengaduan ini udh selesai?')">Selesai</button>
                    </form>
                    @else
                    <button type="submit"
                    class="btn btn-secondary btn-sm mb-3 w-100" disabled>Selesai</button>
                    @endif
                    <form action="/admin/delete" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id_aspirasi"
                        value="{{ $as->id_aspirasi }}">
                        <button type="submit"
                        class="btn btn-danger btn-sm mb-3 w-100"  onclick="return confirm('Anda yakin ingin menghapus pengaduan ini?')">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          @if ($aspirasi->count())
          @else
          <p class="text-center fs-4 mt-5">Tidak ada Aspirasi Siswa. </p>
          @endif
          <div class="justify-content-end d-flex">
            {{ $aspirasi->links() }}
          </div>
    </div>
    </div>
    <div class="col-12" >
        <div class="py-3 rounded" style="background-color:  #8d191c"></div>
    </div>
    {{-- history --}}
    <div class="col-12 py-4" id="history" >
        <h2 class="mb-3">History Aspirasi</h2>
    <div class="card  p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Kelas</th>
                <th scope="col">Kategori</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Bukti</th>
                <th scope="col">Waktu</th>
                <th scope="col">Ratting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($selesai as $as)
                                            <tr>
                                                <th scope="row">{{ $as->id }}</th>
                                                <td>{{ $as->input_aspirasi->siswa->nis }}</td>
                                                <td>{{ $as->input_aspirasi->siswa->kelas }}</td>
                                                <td>{{ $as->kategori->ket_kategori }}</td>
                                                <td>{{ $as->input_aspirasi->lokasi }}</td>
                                                <td>{{ $as->input_aspirasi->ket }}</td>
                                                <td><img src="{{ asset('storage/'.$as->input_aspirasi->bukti) }}" class="img-fluid img-thumbnail" style="max-width: 50%; min-width: 20%;" alt=""></td>
                                                <td>{{ $as->created_at}}</td>
                                                <td> <div class=" text-center text-warning">
                                                    @switch($as->feedback)
                                                        @case(1)
                                                        <i class="bi bi-star-fill"></i>
                                                        <br>
                                                        ({{ $as->feedback }})
                                                            @break
                                                        @case(2)
                                                        <i class="bi bi-star-fill"></i> 
                                                        <i class="bi bi-star-fill"></i>
                                                        <br>
                                                        ({{ $as->feedback }})
                                                            @break
                                                        @case(3)
                                                        <i class="bi bi-star-fill"></i>
                                                         <i class="bi bi-star-fill"></i>
                                                         <i class="bi bi-star-fill"></i>
                                                         <br>
                                                         ({{ $as->feedback }})
                                                            @break
                                                        @case(4)
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <br>
                                                        ({{ $as->feedback }})
                                                        @break
                                                        @case(5)
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <br>
                                                        ({{ $as->feedback }})
                                                            @break
                                                        @default
                                                            
                                                    @endswitch
                                                </div>
                                                </td>
                                            </tr>
                                            @endforeach
            </tbody>
          </table>
          @if ($selesai->count())
          @else
          <p class="text-center fs-4 mt-5">Tidak ada Aspirasi Siswa. </p>
          @endif
          <div class="justify-content-end d-flex">
          {{ $selesai->links() }}
          </div>
    </div>
    </div>
</div>


@endsection