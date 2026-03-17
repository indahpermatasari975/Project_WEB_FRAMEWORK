<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        {{-- <h2>Perulangan for</h2>
        <div class="col-md-6">
            @for ($i = 0; $i < 5; $i++)
                Looping ke- {{ $i }} <br/>
            @endfor
        </div>
        <h2>Perulangan while</h2>
        <div class="col-md-6">
            ?php $i = 0; ?> // Ini sengaja di hapus bukak php nya agar bisa di komen
            @while ($i < 5)
                Looping ke- {{ $i }} <br/>
                    ?php $i++; ?> // Ini sengaja di hapus bukak php nya agar bisa di komen
            @endwhile --}}
        {{-- <h2>Perulangan foreach</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
            <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                <span>Nilai =</span>
                @foreach ($total_nilai as $nilai)
                    <div class="alert alert-info d-inline-block" style="margin: 0; padding: 8px 12px;"> {{ $nilai }} </div>
                @endforeach
            </div>
        </div> --}}
        {{-- <h2>Perulangan Foreach</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
            <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                <span>Nilai =</span>
                @foreach ($total_nilai as $nilai)
                    @if ($nilai < 50)
                      @continue
                    @endif
                    <div class="alert d-inline-block" style="background-color: #f8d7da; color: #721c24; margin: 0; padding: 8px 12px; border: 1px solid #f5c6cb; border-radius: 4px;"> {{ $nilai }} </div>
                @endforeach
            </div>
        </div> --}}

        <h2>Perulangan Foreach</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
            <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                <span>Nilai =</span>
                @foreach ($total_nilai as $nilai)
                    @if ($nilai < 50)
                        @break
                      @continue
                    @endif
                    <div class="alert d-inline-block" style="background-color: #f8d7da; color: #721c24; margin: 0; padding: 8px 12px; border: 1px solid #f5c6cb; border-radius: 4px;"> {{ $nilai }} </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
