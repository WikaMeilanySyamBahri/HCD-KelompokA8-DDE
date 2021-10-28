<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" />

    <title>Drowning Detection (DDE)</title>
</head>

<body style="background-color: #c4c4c4">
    <div class="navbar">
        <div class="fixed-top">
            <div class="mb-auto p-2 bd-highlight text-end p-4">
                <button type="button" class="btn btn-secondary position-relative">
                    <i class="bi bi-arrow-left-short" style="font-size: 1rem; vertical-align: middle; color: #ffff"></i>
                    Kembali
                </button>
            </div>
        </div>
    </div>
    <span class="navbar-brand mb-0 h1" style="margin-inline-start: 2rem; margin-top: 1rem">Drowning Detection(DDE)</span>
    @foreach ($histories as $history)
        <div class="card w-75" style="height: 30rem; margin-inline-start: 2rem; margin-top: 1rem">
            <div class="row">
                <div class="col">
                    <div class="card-body" style="margin-left: 2rem">
                        <h5 class="card-title">{{$history->created_at->isoFormat('D MMMM Y')}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$history->created_at->isoFormat('H:m')}} WIB</h6>
                        <img src="{{asset('storage/'.$history->file)}}" class="img-fluid" alt="" width="500" height="330" />
                    </div>
                </div>
                <div class="col-5" style="margin-top: 4rem">
                    <div class="alert alert-danger" role="alert" style="width: 75%">
                        <i class="bi bi-exclamation-triangle-fill" style="font-size: 1rem; color: red"></i>
                        Berpotensi Tenggelam!
                    </div>
                    <a href="{{route('result',['id'=>$history->id])}}" class="btn btn-primary" style="width: 75%">Lihat Hasil Deteksi</a>
                </div>
            </div>
        </div>
    @endforeach


</body>

</html>
