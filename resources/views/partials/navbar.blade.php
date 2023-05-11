<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top" style="border-bottom: 5px solid #8d191c">
    <div class="container-fluid">
      <div class="d-lg-block d-none">
        <button class="btn btn-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <a class="navbar-brand text-ati fw-bold fs-2" href="/">Pengaduan Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="d-flex mx-md-4">
            @if (auth()->user() == true) 
                <a href="/admin" ><img src="{{ asset('img/smktelkomjkt.png') }}" width="50" alt="" /></a>
            @else
            <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('img/smktelkomjkt.png') }}" width="50" alt="" /></a>
            @endif
        </div>
      </div>
    </div>
  </nav>
<div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg text-light">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Login Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label fw-bold">Username</label>
                        <input type="text" value="{{ old('username') }}"
                            class="form-control @error('username') is-invalid @enderror" autofocus name="username"
                            id="recipient-name">
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label fw-bold">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" autofocus
                            name="password" id="">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger bg w-100 mb-3">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- off canvas --}}

<div class="offcanvas offcanvas-start bg-light text-ati" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header" style="border-bottom: 5px solid #8d191c">
        @if (auth()->user() == true) 
        <a href="/admin" ><img src="{{ asset('img/smktelkomjkt.png') }}" width="50" alt="" /></a>
    @else
    <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('img/smktelkomjkt.png') }}" width="50" alt="" /></a>
    @endif
        <a href="/" class="offcanvas-title text-ati nav-link fs-5 fw-bold" id="offcanvasWithBothOptionsLabel">Pengaduan Sekolah</a>
        <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-12 p-2">
                <h4 class="fw-bold">Menu</h4>
            </div>
            <div class="col-12 p-2">
                <a href="#pengaduan" class="btn btn-sm w-100 btn-danger bg fw-bold">Pengaduan</a>
            </div>
            <div class="col-12 p-2">
                <a href="#pencarian" class="btn btn-sm w-100 btn-danger bg fw-bold">Pencarian</a>
            </div>
            <div class="col-12 p-2">
                <a href="#about" class="btn btn-sm w-100 btn-danger bg fw-bold">About</a>
            </div>
          
    </div>
</div>
</div>
