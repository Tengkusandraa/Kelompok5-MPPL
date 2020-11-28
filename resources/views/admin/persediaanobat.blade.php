@extends('layouts.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Persediaan Obat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Persediaan Obat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="small-box bg-info"style="padding-right:0px;">
        <div class="card-footer">
            <th>Selamat datang Sandra di Sistem Monitoring Data Obat</th>
            <a href="/generalform">
            <button type="submit" class="btn btn-default float-right">Tambah Obat</button></a>
            </div>
    </div>

    
    <!-- Main content -->
   <div class="card" >
        <div class ="print" style="text-align:right;padding-right:20px;">
            <div class ="btn btn-info"><img src="{{ asset('print.png') }}">Unggah</div>
            <div class ="btn btn-info"><img src="{{ asset('print.png') }}">Cetak</div>
        </div>
        <div class="table-responsive" style="margin-left:20px;padding-right:40px;">
        <table class="table table-striped table-bordered table-hover" style="margin-right:100px;">
            <thead>
                <tr>
                    <th> 
                    <form action="/action_page.php" style="text-align:center;">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </form>
                    </th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Tanggal Masuk</th>
                    <th>Batch</th>
                    <th>Tanggal Kadaluwarsa</th>
                    <th>Stock Awal</th>
                    <th>Sisa Stock</th>
                    <th>Pemberian</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>13 januari 2020</td>
                        <td>1</td>
                        <td>30-10-2023</td>
                        <td>1700</td>
                        <td>600</td>
                        <td>Pembelian RS</td>
                        <td>Ubah</td>
                </tr>
                </tbody>

            <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>13 januari 2020</td>
                        <td>1</td>
                        <td>30-10-2023</td>
                        <td>1700</td>
                        <td>600</td>
                        <td>Pembelian RS</td>
                        <td>Ubah</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>13 januari 2020</td>
                        <td>1</td>
                        <td>30-10-2023</td>
                        <td>1700</td>
                        <td>600</td>
                        <td>Pembelian RS</td>
                        <td>Ubah</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>13 januari 2020</td>
                        <td>1</td>
                        <td>30-10-2023</td>
                        <td>1700</td>
                        <td>600</td>
                        <td>Pembelian RS</td>
                        <td>Ubah</td>
                </tr>
        </table>
     </div>
   </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection