/* bagian untuk merubah mode */        
var content = document.getElementsByTagName('body')[0];
var darkMode = document.getElementById('dark-change');
darkMode.addEventListener('click', function(){
    darkMode.classList.toggle('active');
    Hed.classList.toggle('active');
    content.classList.toggle('night');
    fut.classList.toggle('night');
    kotakf.classList.toggle('active');   
    submit.classList.toggle('night');   

}
)
/* fungsi untuk menghitung faktorial */        
function faktorkan() {
    let input = document.getElementById("masukan").value;
    let hasil = 1;
    for (let i = 1; i <= input; i++) {
      hasil = hasil * i;
    }
    document.getElementById("jawab").innerHTML = "hasil faktorial dari " + input + " adalah " + hasil;
  }
