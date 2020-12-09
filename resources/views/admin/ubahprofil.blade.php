@extends('layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Saya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="/profil">Profil Saya</a></li>
              <li class="breadcrumb-item active">Ubah Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">


            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color:#4699C2;">
                <h3 class="card-title">Ubah Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form">
                <div class="card-body">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                    src="/admin/img/avatar2.png"
                        alt="User profile picture">
                        <br></br>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">ID</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="TengkuSa321" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Tengku Sandra Alyssa" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">No. SIP</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="12345678910" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Dokter Poli Bedah Anak" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="yayak@gmail.com" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="081234567891" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Jln. in dulu aja Blok. IR kemudian Medan, Sumatra Utara" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Kata Sandi Lama</label>
                    <div class="col-sm-10">
                        <input type="password" id="inputPassword6" class="form-control" value="081234567891" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                        </small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                    <div class="col-sm-10">
                        <input type="password" id="inputPassword6" class="form-control" value="12345678" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                        </small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Ulangi Kata Sandi Baru</label>
                    <div class="col-sm-10">
                        <input type="password" id="inputPassword6" class="form-control" value="12345678" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                        </small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Saya yakin ingin mengubah profil saya</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                    <a href="/profil">
                    <div class ="btn btn-info">Simpan</div>
                    </div>
                  </div>

              </form>
            </div>
            <!-- /.card -->

            
     
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection