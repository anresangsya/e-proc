
var i = 2;
function additem() {
    var itemlist = document.getElementById('itemlist');
    
// membuat element
    var row = document.createElement('tr');
    var nama = document.createElement('td');
    var jenis = document.createElement('td');
    var jumlah = document.createElement('td');
    var harga = document.createElement('td');
    var aksi = document.createElement('td');

// meng append element
    itemlist.appendChild(row);
    row.appendChild(nama);
    row.appendChild(jenis);
    row.appendChild(jumlah);
    row.appendChild(harga);
    row.appendChild(aksi);

// membuat element input
    var nama_input = document.createElement('input');
    nama_input.setAttribute('name', 'nama_barang[]');
    nama_input.setAttribute('class', 'form-control');
    nama_input.setAttribute('placeholder', 'nama barang');

    var jenis_input = document.createElement('input');
    jenis_input.setAttribute('name', 'jenis_barang[]');
    jenis_input.setAttribute('class', 'form-control');
    jenis_input.setAttribute('placeholder', 'jenis barang');

    var jumlah_input = document.createElement('input');
    jumlah_input.setAttribute('name', 'jumlah[]');
    jumlah_input.setAttribute('class', 'form-control');
    jumlah_input.setAttribute('placeholder', 'jumlah');
    jumlah_input.setAttribute('type', 'number');

    var harga_input = document.createElement('input');
    harga_input.setAttribute('name', 'harga_satuan[]');
    harga_input.setAttribute('class', 'form-control');
    harga_input.setAttribute('placeholder', 'harga satuan');
    harga_input.setAttribute('type', 'number');

    var hapus = document.createElement('span');

    nama.appendChild(nama_input);
    jenis.appendChild(jenis_input);
    jumlah.appendChild(jumlah_input);
    harga.appendChild(harga_input);
    aksi.appendChild(hapus);

    hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
//                Aksi Delete
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };

    i++;
}

