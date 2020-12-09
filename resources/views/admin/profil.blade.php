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
              <li class="breadcrumb-item active">Profil Saya</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    
    <section class="content">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle"
            src="/admin/img/avatar2.png"
            alt="User profile picture">
            <br>
        <p><strong>TengkuSa321</strong><p>
    </div>
    <div class="tab-content ml-1" id="myTabContent" style="padding:20px">
        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Nama</label>
                </div>
                <div class="col-md-8 col-6">
                    Tengku Sandra Alyssa
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">No. SIP</label>
                </div>
                <div class="col-md-8 col-6">
                    12345678910
                </div>
            </div>
            <hr />
                                        
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Jabatan</label>
                </div>
                <div class="col-md-8 col-6">
                Dokter Poli Bedah Anak
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Email</label>
                </div>
                <div class="col-md-8 col-6">
                yayak@gmail.com
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">No. Telepon</label>
                </div>
                <div class="col-md-8 col-6">
                081234567891
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Alamat</label>
                </div>
                <div class="col-md-8 col-6">
                Jln. in dulu aja Blok. IR kemudian Medan, Sumatra Utara
                </div>
            </div>
            <hr />
        <div class ="print" style="text-align:center;">
        <a href="/ubahprofil">
            <div class ="btn btn-info">Ubah Profil</div>
        </div>
        </div>
    <!-- /.content -->
    </div>

  </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection