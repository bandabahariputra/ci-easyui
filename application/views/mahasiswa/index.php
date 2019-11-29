<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- EasyUI -->
    <link rel="stylesheet" href="<?= base_url('vendor/jquery-easyui-1.8.8/themes/bootstrap/easyui.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/jquery-easyui-1.8.8/themes/icon.css'); ?>">

    <title><?= $title; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">CI EasyUI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Mahasiswa <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">

      <!-- Datagrid -->
      <table id="dg" class="easyui-datagrid" style="height:500px"></table>

      <!-- Toolbar -->
      <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newMahasiswa()">Tambah</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editMahasiswa()">Edit</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyMahasiswa()">Hapus</a>
      </div>

      <!-- Dialog -->
      <div id="dlg" class="easyui-dialog">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
          <div style="margin-bottom:10px">
              <input name="nama" class="easyui-textbox" required="true" label="Nama:" style="width:100%">
          </div>
          <div style="margin-bottom:10px">
              <input name="email" class="easyui-textbox" required="true" validType="email" label="Email:" style="width:100%">
          </div>
          <div style="margin-bottom:10px">
              <input name="telp" class="easyui-textbox" required="true" label="Telpon:" style="width:100%">
          </div>
          <div style="margin-bottom:10px">
              <input name="kota" class="easyui-textbox" required="true" label="Kota:" style="width:100%">
          </div>
        </form>
      </div>

      <!-- Dialog Button -->
      <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveMahasiswa()" style="width:90px">Simpan</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Batal</a>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- EasyUI -->
    <script src="<?= base_url('vendor/jquery-easyui-1.8.8/easyloader.js'); ?>"></script>
    <script src="<?= base_url('vendor/jquery-easyui-1.8.8/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/jquery-easyui-1.8.8/jquery.easyui.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/mahasiswa.js'); ?>"></script>
  </body>
</html>