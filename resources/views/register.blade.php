@extends('layouts.main')

@section('body')

<div class="d-flex justify-content-center">
    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Login</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Silahkan masukan Email dan Password untuk login</h6>
            <div class="row">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name">
                      </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" id="submit" name="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection