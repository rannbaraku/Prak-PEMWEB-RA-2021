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
		$('.targetBuku').html('');
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
					<td style="text-align: center;">`+response[i].ID+`</td>
					<td style="text-align: center;">`+response[i].judul+`</td>


					</tr>
					`
				}
				/*setting menampilkan data hasil perubahan -*/
				$('.targetBuku').append(data);

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


});