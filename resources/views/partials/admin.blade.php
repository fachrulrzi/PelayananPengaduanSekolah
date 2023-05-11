<nav class="navbar navbar-expand-lg navbar-dark  shadow sticky-top" style="border-bottom: 5px solid  #8d191c">
    <div class="container justify-content-md-center">
        <a class="navbar-brand fw-bold text-ati fs-3" href="/admin">Pengaduan Sekolah</a>
        <div class="d-md-none d-block">
            <button class="navbar-toggler btn btn-danger bg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

{{-- off canvas --}}

<div class="offcanvas offcanvas-end bg-light text-ati " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header "  style="border-bottom: 5px solid #8d191c">
    <a href="/admin" class="fs-5 text-ati fw-bold  nav-link" id="offcanvasRightLabel" class="fw-bold">Pengaduan Sekolah</a>
    <button type="button" class="btn-close text-reset bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
        <div class="col-12 p-2">
            <h4 class="fw-bold">Menu</h4>
        </div>
        <div class="col-12 p-2">
          <a href="#dashboard" class="btn btn-sm w-100 btn-danger bg">Dashboard</a>
        </div>
        <div class="col-12 p-2">
          <a href="#history" class="btn btn-sm w-100 btn-danger bg">History</a>
        </div>
        <div class="col-12 p-2">
          <h4 class="fw-bold">Pencarian</h4>
        </div>
        <div class="col-12 p-2">
          <form action="/admin" method="get">
            <div class="input-group">
                <input type="text" required name="search"  value="{{ request('search') }}" class="form-control" placeholder="Nomor aspirasi" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-danger bg" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
              </div>
            </form>
        </div>
        <div class="col-12 p-2">
          <form action="/admin" method="get">
            <div class="input-group">
                    <input type="date" required class="form-control" value="{{ request('waktu') }}" name="waktu" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-danger bg" type="submit" id="button-addon2"><i class="bi bi-search"></i></button></form>
              </div>
        </div>
        <div class="col-12 p-2">
          <div class="dropdown">
            <button class="btn btn-sm w-100 btn-danger bg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($kategori as $kat)
                <li><a class="dropdown-item" href="/admin?kategori={{ $kat->id }}">{{ $kat->ket_kategori }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="col-12 p-2">
          <div class="dropdown">
            <button class="btn btn-danger bg  w-100 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Status
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/admin?status=Menunggu">Menunggu</a></li>
                <li><a class="dropdown-item" href="/admin?status=Proses">Proses</a></li>
                <li><a class="dropdown-item" href="/admin?status=Selesai">Selesai</a></li>
            </ul>
          </div>
        </div>
       <div class="col-12 p-2 ">
        <form action="/logout"  method="post">
          @csrf
          <button type="submit" onclick="return confirm('Anda yakin mau LogOut ?')" class="btn btn-sm btn-danger w-100">LogOut</button>
      </form>
       </div>
      </div>
  </div>
</div>