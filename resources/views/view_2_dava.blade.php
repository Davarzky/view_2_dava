<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    <div class="card">
        <div class="card-header" style="background-color: purple;color:white">
          <h4>JAWABAN</h4>
        </div>
        <div class="card-body">
                <p>Kompetensi :{{$hasil['nama'];}}</p>
                <p>Ketua Kompetensi :{{$hasil['kajur'];}}</p>
                <p>Jumlah Kelas:{{$hasil['kelas'];}}</p>
        </div>
      </div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>