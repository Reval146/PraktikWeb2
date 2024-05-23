@include('pegawai.header')
@include('pegawai.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pegawai</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Daftar Pegawai</h2>

<table>
    <thead>
        <tr>
            <th>ID Pegawai</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Departemen</th>
            <th>Email</th>
            <th>Telepon</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>001</td>
            <td>Muhamad Reval Wijaya</td>
            <td>Direktur</td>
            <td>Keuangan</td>
            <td>Reval.wijaya@example.com</td>
            <td>08123456789</td>
        </tr>
        <tr>
            <td>002</td>
            <td>Salma Hana</td>
            <td>Supervisor</td>
            <td>Pemasaran</td>
            <td>salma.hana@example.com</td>
            <td>08129876543</td>
        </tr>
        <tr>
            <td>003</td>
            <td>Rasya Julian</td>
            <td>Staf</td>
            <td>HRD</td>
            <td>rasya.julian@example.com</td>
            <td>08121234567</td>
        </tr>
        <tr>
            <td>004</td>
            <td>Kamil</td>
            <td>Staf</td>
            <td>IT</td>
            <td>kamil.kurniawan@example.com</td>
            <td>08129876123</td>
        </tr>
        <tr>
            <td>005</td>
            <td>Dimas anderson</td>
            <td>Staf</td>
            <td>Operasional</td>
            <td>dimas.prasetya@example.com</td>
            <td>08123456788</td>
        </tr>
    </tbody>
</table>

</body>
</html>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('pegawai.footer')