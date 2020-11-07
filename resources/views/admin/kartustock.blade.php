@extends('layouts.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kartu Stock</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kartu Stock</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <div class="card" style="padding-right:40px;">
        <div class ="print" style="text-align:right;">
            <div class ="btn btn-info"><img src="{{ asset('print.png') }}">Unggah</div>
            <div class ="btn btn-info"><img src="{{ asset('print.png') }}">Cetak</div>
        </div>
        <div class="table-responsive" style="margin-left:20px;">
        <table class="table table-striped table-bordered table-hover" style="margin-right:100px;">
            <thead>
                <tr>
                    <th> 
                    <form action="/action_page.php" style="text-align:center;">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </form>
                    </th>
                    <th>ID Kartu stock</th>
                    <th>ID Obat</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>A1000</td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>Botol</td>
                </tr>
                </tbody>

            <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>A1000</td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>Botol</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>A1000</td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>Botol</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>
                        <form action="/action_page.php" style="text-align:center;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </form>
                        </td>
                        <td>A1000</td>
                        <td>0001</td>
                        <td>Ambroksol Syr</td>
                        <td>Botol</td>
                </tr>
        </table>
     </div>
   </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection