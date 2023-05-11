@extends('layouts.main')
@section('notifikasi')
<div class="row justify-content-center">
    <div class="col-12" data-aos="fade-right">
        @if (session()->has('LoginError'))
    <div class="alert alert-danger my-3 mt-4 alert-dismissible fade show fw-bold" role="alert">
        {{ session('LoginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        @if (request('id') != null)
        <div class="alert alert-warning mt-4 alert-dismissible fade show" role="alert" data-aos="fade-right"> 
            <strong>Terimakasih Telah Melakukan Pengaduan <br>
                Nomor Pengaduan : {{ request('id') }}</strong><br>
            <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
        @if (request('nis') != null)
        <div class="alert alert-danger mt-4 alert-dismissible fade show" role="alert" data-aos="fade-right">
            <strong> NIS Anda Belum Terdaftar!! </strong><br>
            <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
    </div>
</div>
@endsection
@section('formulir')
<div class="row">
    <div class="col-12 d-flex align-items-center col-md-12 col-lg-6 overflow-hidden" data-aos="zoom-in">
        <img src="{{ asset('img/bbb.jpg') }}" class="img-fluid rounded" width="150%" alt="" />
    </div>
    <div class="col-lg-6 col-12  d-block m-auto" data-aos="zoom-in">
        <form action="/aspirasi/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img src="{{ asset('img/smktelkomjkt (1).png') }}" class="mx-5" width="200" alt="" />
                </div>
                <div class="col-12 text-center mb-3">
                    <h2 class="fw-bold">Pengaduan Siswa</h2>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label fw-bold">ID Pelaporan</label>
                        <input type="text" name="id_pelaporan"
                            class="form-control  btn btn-danger text-start bg text-light fw-bold" readonly
                            value="{{ $no }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nomor Induk Siswa</label>
                        <input type="number" name="nis"  value="{{ old('nis') }}"
                            class="form-control @error('nis') is-invalid @enderror">
                        @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Kategori</label>
                        <select class="form-select" name="id_kategori" aria-label="Default select example">
                            @foreach ($kategori as $kat)
                            <option value="{{ $kat->id_kategori }}"> {{ $kat->ket_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Lokasi</label>
                        <textarea name="lokasi" id=""
                            class="form-control text-uppercase @error('lokasi') is-invalid @enderror"
                            rows="1">{{ old('lokasi') }}</textarea>
                        @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Keterangan</label>
                        <textarea name="ket" id=""
                    class=" form-control @error('ket') is-invalid @enderror" rows="1">{{ old('ket') }}</textarea>
                        @error('ket')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Bukti Pengaduan</label>
                        <input class="form-control @error('bukti') is-invalid @enderror" name="bukti" type="file"
                            id="formFile">
                        @error('bukti')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <button type="submit" onclick="return confirm('Anda yakin ingin mengajukan Pengaduan ?')"
                        class="btn btn-light w-100 bg text-light">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('pencarian')
<div class="row my-5 justify-content-center">
    <div class="col-12 mb-5 d-block m-auto" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-12 mb-4">
                <h2 class="fw-bold text-ati text-center">Pencarian Aspirasi Siswa</h2>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <form action="/#pencarian">
                    <div class="input-group mb-3 shadow">
                        <input type="text" class="form-control fs-5 px-4 " required name="search"
                            value="{{ request('search') }}" placeholder="Masukkan Nomor Pengaduan"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-danger bg text-light" type="submit" id="button-addon2"><i
                                class="bi bi-search fs-5"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($aspirasi as $as)
    @if (request('search') != null)
    <div class="col-md-8 col-lg-6 col-sm-12" data-aos="fade-up">
        <div class="card mb-3  m-auto">
            <div class="row g-0">
                <div class="col-md-5 overflow-hidden">
                    <img src="{{ asset('storage/'.$as->input_aspirasi->bukti) }}"
                        style="max-height: 200%; min-height: 100%; min-width: 100%; max-width: 100%" class="img-fluid rounded-start"
                        alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nomor Pengaduan : {{ $as->id }}</li>
                            <li class="list-group-item">Nomor Induk Siswa : {{ $as->input_aspirasi->nis }}</li>
                            <li class="list-group-item">Kelas : {{ $as->input_aspirasi->siswa->kelas }}</li>
                            <li class="list-group-item">Status : {{ $as->status }}</li>
                            <li class="list-group-item">Kategori : {{ $as->kategori->ket_kategori }}</li>
                            <li class="list-group-item">Lokasi : {{ strtoupper( $as->input_aspirasi->lokasi) }}</li>
                            <li class="list-group-item">Keterangan : {{ucwords($as->input_aspirasi->ket)  }}</li>
                        </ul>
                        <p class="card-text text-end"><small class="text-muted">Created at
                                {{ $as->input_aspirasi->created_at }}</small></p>
                    </div>
                </div>
           
                <div class="card-footer bg">
                    @if ($as['status'] == 'Selesai' and $as['feedback'] == null)
                    <form action="/aspirasi/feedback" method="POST" class="text-center">
                        @csrf
                        <div class="btn btn-light mb-2">
                            <input type="hidden" name="id_aspirasi" value="{{ $as->id  }}">
                            <input type="radio" class="" required name="feedback" value="1" id="">
                            <label class="form-check-label">
                                1
                            </label>
                        </div>
                        <div class="btn-light btn mb-2">
                            <input type="radio" name="feedback" required value="2" id="">
                            <label class="form-check-label">
                                2
                            </label>
                        </div>
                        <div class="btn btn-light mb-2">
                            <input type="radio" name="feedback" required value="3" id="">
                            <label class="form-check-label">
                                3
                            </label>
                        </div>
                        <div class="btn btn-light mb-2">
                            <input type="radio" name="feedback" required value="4" id="">
                            <label class="form-check-label">
                                4
                            </label>
                        </div>
                        <div class="btn btn-light mb-2"> <input type="radio" required name="feedback" value="5" id="">
                            <label class="form-check-label">
                                5
                            </label></div>
                        <button type="submit" class="btn mb-2 btn-secondary text-light"><i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                    @elseif($as['status'] == 'Selesai')
                    <div class=" text-center text-warning">
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
                </div>
                @endif
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
@section('about')
<div class="row justify-content-center">
    <div class="col-12 pt-2">
      <img src="{{ asset('img/telkom.jpg') }}" class="mt-5 img-fluid rounded" alt="" />
    </div>
    <div class="col-12 mt-4 mb-2 text-center">
      <h2 class="fw-bold text-ati " data-aos="zoom-in">SMK Telkom Jakarta</h2>
    </div>
    <div class="col-md-10 col-lg-6 sol-sm-12 text-center" data-aos="zoom-in">
      <p>
        Sekolah Menengah Kejuruan Telkom Jakarta adalah salah satu sekolah yang berada dalam naungan Yayasan Sandhykara Putra Telkom. Sekolah ini didirikan pada tahun 1992 dengan nama Sekolah Teknik Menengah Telkom Sandhy Putra Jakarta,
        lalu menjadi SMK Telkom Jakarta yang diprakarsai oleh Menteri Pariwisata, Pos, dan Telekomunikasi saat itu, Soesilo Sudarman.
      </p>
    </div>
  </div>
@endsection
