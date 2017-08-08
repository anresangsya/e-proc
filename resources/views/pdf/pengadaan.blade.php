<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Pengadaan Barang</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Pengadaan Barang</h2></center>  
            </div>
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nomor SPK<br></th>
                <th class="tg-3wr7">Nama Barang<br></th>
                <th class="tg-3wr7">Jenis Barang<br></th>
                <th class="tg-3wr7">Jumlah<br></th>
                <th class="tg-3wr7">Harga Satuan<br></th>
                <th class="tg-3wr7">Keperluan<br></th>
                <th class="tg-3wr7">Tanggal<br></th>
              </tr>
              @foreach ($pengadaan as $pengadaan)
              <tr>
                <td class="tg-rv4w" width="10%">{{$pengadaan->id_spk}}</td>
                <td class="tg-rv4w" width="15%">{{$pengadaan->nama_barang }}</td>
                <td class="tg-rv4w" width="15%">{{$pengadaan->jenis_barang}}</td>
                <td class="tg-rv4w" width="10%">{{$pengadaan->jumlah}}</td>
                <td class="tg-rv4w" width="20%">{{$pengadaan->harga_satuan}}</td>
                <td class="tg-rv4w" width="20%">{{$pengadaan->keperluan}}</td>
                <td class="tg-rv4w" width="10%">{{$pengadaan->tanggal}}</td>
              </tr>
              @endforeach
            </table>
        </body>
    </head>
</html>