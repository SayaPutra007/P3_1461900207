<head>
  <meta name="viewport" content="width=device-width,
  initial-scale=1">
  <title>Data Barang</title>
  <style>
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }

      thead {
        background-color: #f2f2f2;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) { background-color: #f2f2f2}

      .tambah {
        padding: 8px 16px ;
        text-decoration: none;
      }
  </style>
</head>
<body>
  <div style="overflow-x: auto;">
  <table>
      <thead>
          <tr>
              <th>id</th>
              <th>nama</th>
              <th>harga</th>
          </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($Barang as $barang)
        <tr>
            <td>{{$barang->id}}</td>
            <td>{{$barang->nama}}</td>
            <td>{{$barang->harga}}</td>
        </tr>
        @endforeach
      </tbody>
  </table>
  </div>
</body>