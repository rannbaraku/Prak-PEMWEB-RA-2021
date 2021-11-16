<?php 
//kelas buah
class fruit{

	//objek yang digunakan
	private $nama_buah,
			$jumlah_kg, 
			$harga_per_kg;
	
	// magic method konstruksi
	function __construct($nama_buah=NULL, $harga_per_kg=NULL, $jumlah_kg=0){
		if( $nama_buah!=NULL && $harga_per_kg!=NULL ){
			//mengambil nilai 
			$this->nama_buah = $nama_buah;
			$this->harga_per_kg = $harga_per_kg * $jumlah_kg;
			$this->jumlah_kg = $jumlah_kg;
		}
	}

	// getter nama buah
	function getNamaBuah(){
		return $this->nama_buah;
	}

	//getter harga buah
	function getHargaBeli(){
		return $this->harga_per_kg;
	}

	//getter jumlah yang dibeli
	function getJumlahBuah(){
		return $this->jumlah_kg;	
	}
}

//class menghitung hasil belanja
class shoping{
	//objek belanjaan
	private static $listbelanja = array(), $totalHarga = 0, $iterasi = 0;

	// magic method konstrusi
	function __construct( fruit $jenisBuah = NULL ){
		if ($jenisBuah != NULL) {

			//mengambil nilai belanjaan
			self::$listbelanja[ self::$iterasi ] = $jenisBuah;
			self::$iterasi++;
			self::$totalHarga = self::$totalHarga + $jenisBuah->getHargaBeli();
		}
	}

	// getter mengambil informasi belanja berikutnya
	function getIterasi(){
		return self::$iterasi;
	}

	//getter memanggil buahyang dibeli
	function getNamaBuah($i=0){
		return self::$listbelanja[$i]->getNamaBuah();
	}

	//getter mengambil harga buah yang dibeli
	function getHargaBeli($i=0){
		return self::$listbelanja[$i]->getHargaBeli();
	}

	//getter mengambil jumlah buahyang dibeli
	function getJumlahBuah($i=0){
		return self::$listbelanja[$i]->getJumlahBuah();	
	}

	//getter mengambil total harga seluruh buahyang dibeli
	function getTotal(){
		return self::$totalHarga;
	}

}

// objek iterasi belanja
$belanja = new shoping();
$jenisBuah = new fruit();

if( isset($_POST['pesan']) ){
	if( $_POST['mango'] != NULL && $_POST['guava'] != NULL && $_POST['snakefruit'] != NULL ){
		
		//membentuk objek untuk buah mangga
		$jenisBuah = new fruit("mangga", 15000, $_POST['mango']);	
		$belanja = new shoping($jenisBuah);

		//membentuk ojek untuk buah jambu
		$jenisBuah = new fruit("jambu", 13000, $_POST['guava']);	
		$belanja = new shoping($jenisBuah);

		//membentuk objek untuk buah salak
		$jenisBuah = new fruit("salak", 10000, $_POST['snakefruit']);	
		$belanja = new shoping($jenisBuah);
	}
}

?>