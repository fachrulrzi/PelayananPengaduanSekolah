<h4 class="text-ati fw-bold">Menu</h4>
<div class="row my-3">
  <div class="col-12 p-2">
    <a href="#dashboard" class="btn btn-sm w-100 btn-danger bg">Dashboard</a>
  </div>
  <div class="col-12 p-2">
    <a href="#history" class="btn btn-sm w-100 btn-danger bg">History</a>
  </div>
  <div class="col-12 p-2">
    <h4 class="text-ati fw-bold">Pencarian</h4>
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
          <li><a class="dropdown-item" href="/admin?kategori={{ $kat->id_kategori }}">{{ $kat->ket_kategori }}</a></li>
          @endforeach
      </ul>
    </div>
  </div>
  <div class="col-12 p-2">
    <div class="dropdown">
      <button class="btn btn-danger bg w-100 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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