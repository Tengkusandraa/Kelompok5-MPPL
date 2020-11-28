@extends('layouts.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
              <div class="card-header">
                <h3 class="card-title">Form Pengisian Obat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Obat</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Obat</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kemasan Obat</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Satuan dari Kemasan</label>
                        <select class="form-control">
                          <option>Botol</option>
                          <option>Ampl</option>
                          <option>Tab</option>
                          <option>Set</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jenis Obat</label>
                        <select class="form-control">
                          <option>Umum</option>
                          <option>Khusus</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Golongan Obat</label>
                        <select class="form-control">
                          <option>Prekursor</option>
                          <option>Narkotika</option>
                          <option>Psikotropika</option>
                          <option>Bebas</option>
                          <option>Terbatas</option>
                          <option>Keras</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sediaan</label>
                        <select class="form-control">
                          <option>Oral</option>
                          <option>Suppositoria</option>
                          <option>Vaginal</option>
                          <option>Injeksi</option>
                          <option>Suspensi</option>
                          <option>Sirup Kering</option>
                          <option>Salep</option>
                          <option>Krim</option>
                          <option>Gel</option>
                          <option>Tetes Mata</option>
                          <option>Tetes Telinga</option>
                          <option>Tetes Hidung</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Letak Obat</label>
                        <select class="form-control">
                          <option>Rak Biasa</option>
                          <option>Rak Pendingin</option>
                          <option>Rak 2 Pintu</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Batch</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label for="exampleInputPassword1">Stock Awal</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Pemakaian</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Sisa Stock</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pemberian</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter....">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Obat</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter....">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
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