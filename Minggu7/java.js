$(document).ready(function(){


	var dataHasil = 0;
	tampil();

	/*setting button tambah--*/
	$('.btn-tambah').click(function(){
		tambah();
	});
	
	/*setting button batal--*/
	$('.btn-batal').click(function(){
		tampil();
		reset();
	});

	/*setting button ubah--*/
	$('.btn-ubah').click(function(){
		edit(dataHasil);
	});

	/*setting menampilkan tombol-*/
	function tampil(){

		/*setting menampilkan tombol ketika mode tertentu-*/
		$('.targetData').html('');
		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();


	/*setting mengubah data tanpa refresh-*/
		$.ajax({
			type : 'GET',
			url : 'Tampil_Semua.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				/*smengambil nilai masukan-*/
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].ID+`</td>
					<td style="text-align: center;">`+response[i].judul+`</td>
					<td style="text-align: center;">`+response[i].status+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].ID+`'>Edit</button>
						<button class='btn-delete' id='`+response[i].ID+`'>Delete</button>
					</td>
					</tr>
					`
				}
				/*setting menampilkan data hasil perubahan -*/
				$('.targetData').append(data);

				/*setting saat tombol edit di click-*/
				$('.btn-edit').click(function(){
					tampil_data($(this).attr('id'));
						document.body.scrollTop = 0;
						document.documentElement.scrollTop = 0;
				})

				/*setting saat tombol delet di click-*/
				$('.btn-delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}



	/*fungsi ketika menambah data*/
	function tambah(){
		var ID = $('.ID').val();
		var nama = $('.nama').val();
		var judul = $('.judul').val();
		var status = $('.status').val();
		$.ajax({
			type : 'POST',
			url : 'Tambah_Data.php',
			data : 'ID='+ID+'&nama='+nama+'&judul='+judul+'&status='+status,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}

			}
		})
	}

	/*fungsi ketika menampilkan data*/
	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'Tampil_Data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.ID;
				$('.ID').val(response.ID);
				$('.nama').val(response.nama);
				$('.judul').val(response.judul);
				$('.status').val(response.status);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	/*fungsi ketika mengedit data*/
	function edit(x){
		var id = x;
		var ID = $('.ID').val();
		var nama = $('.nama').val();
		var judul = $('.judul').val();
		var status = $('.status').val();
		$.ajax({
			type : 'POST',
			url : 'Edit_Data.php',
			data : 'id='+id+'&ID='+ID+'&nama='+nama+'&judul='+judul+'&status='+status,
			success : function(response){
				tampil();
				reset();
			}
		})
	}

	/*fungsi ketika menghapus data*/
	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'Hapus_Data.php',
			data : 'ID='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	/*fungsi membuat kolom inputan menjadi kosong*/
	function reset(){
		$('.ID').val('');
		$('.nama').val('');
		$('.judul').val('');
		$('.status').val('');
	}

});