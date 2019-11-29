// Datagrid
$('#dg').datagrid({
  url:'mahasiswa/getmahasiswa',
	title: 'Data Mahasiswa',
  fitColumns: true,
  rownumbers: true,
  singleSelect: true,
  toolbar: '#toolbar',
  columns: [[
    {field:'nama', title:'Nama', width:100},
    {field:'email', title:'Email', width:150},
    {field:'telp', title:'Telp', width:150},
    {field:'kota', title:'Kota', width:150}
  ]]
});

// Dialog
$('#dlg').dialog({
  title: 'Tambah Mahasiswa',
  width: 400,
  border:'thin',
  buttons:'#dlg-buttons',
  closed: true,
  cache: false,
  modal: true
});


var url;

function newMahasiswa() {
  $('#dlg').dialog('open').dialog('center').dialog('setTitle','Tambah Mahasiswa');
  $('#fm').form('clear');
  url = 'mahasiswa/createmahasiswa';
}

function editMahasiswa() {
	var row = $('#dg').datagrid('getSelected');
	if (row) {
		$('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Edit Mahasiswa');
		$('#fm').form('load', row);
		url = 'mahasiswa/updatemahasiswa/' + row.id;
	}
}

function saveMahasiswa(){
	$('#fm').form('submit', {
		url: url,
		onSubmit: function() {
			return $(this).form('validate');
		},
		success: function(result) {
			var result = eval('('+result+')');
			if (result.errorMsg) {
				$.messager.show({
					title: 'Error',
					msg: result.errorMsg
				});
			} else {
				$('#dlg').dialog('close');		// close the dialog
				$('#dg').datagrid('reload');	// reload the data
			}
		}
	});
}

function destroyMahasiswa(){
  var row = $('#dg').datagrid('getSelected');
  if (row) {
    $.messager.confirm('Konfirmasi', 'Yakin ingin menghapus data ini?', function(r) {
      if (r) {
        $.post('mahasiswa/deletemahasiswa', {id:row.id}, function(result) {
          if (result.success) {
            $('#dg').datagrid('reload');    // reload the data
          } else {
            $.messager.show({    // show error message
              title: 'Error',
              msg: result.errorMsg
            });
          }
        }, 'json');
      }
    });
  }
}