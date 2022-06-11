// ambil elemen yang dibutuhkan 
var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol-cari');
var searching = document.getElementById('searching');

keyword.addEventListener('keyup', function() {


// object
var xhr = new XMLHttpRequest();

// cek 
xhr.onreadystatechange = function() {
    if(xhr . readyState == 4 && xhr.status ==200 ) {
        searching.innerHTML = xhr.responseText;
    }
}
// eks ajax
xhr.open('GET', 'ajax/hospital.php?keyword=' + keyword.value , true);
xhr.send();


});