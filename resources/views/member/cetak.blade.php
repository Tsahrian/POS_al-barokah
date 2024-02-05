<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <title>Cetak Kartu Member</title>

    <style>
        .box {
            position: relative;
            background-color: #25b3ee;
            border-radius: 15px;
            padding: 15px;
        }

        .card {
            /* width: 85.60mm; */
        }

        /* .logo {
            position: absolute;
            top: 3pt;
            right: 0pt;
            font-size: 16pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            /* color: #fff !important; */
        /* } */


        .app {
            font-size: 24px;
            font-weight: 500px;

        }

        .barcode {
            text-align: right;
        }

        .title-card {
            text-align: right;
        }

        .nama {
            padding-top: 20pt;
            font-size: 12pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }


        .telepon {
            position: absolute;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <section style="border: 1px solid #fff">
        <table width="100%">
            @foreach ($datamember as $key => $data)
                <tr>
                    @foreach ($data as $item)
                        {{-- @dd($item) --}}
                        <td class="card text-center">
                            <div class="box">
                                {{-- <div class="logo"> --}}
                                <p class="app">{{ $setting->nama_perusahaan }}</p>
                                <p class="title-card">Kartu Member</p>
                                {{-- <img src="{{ asset($setting->path_logo) }}" alt="logo"> --}}
                                <div class="title">
                                    <div class="nama">{{ $item->nama }}</div>
                                    <div class="telepon">{{ $item->telepon }}</div>
                                    <div class="barcode text-left">
                                        <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG("$item->kode_member", 'QRCODE') }}"
                                            alt="qrcode" height="50" width="50">
                                    </div>
                                </div>
                            </div>
                        </td>
                        @if (count($datamember) == 1)
                            <td class="text-center" style="width: 50%"></td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </section>
</body>

</html>
