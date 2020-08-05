<?php
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html =  '
<html>

<head>
</head>

<style>
    body {
        background-color: white;
    }

    .text-center {
        text-align: center;
    }

    .box {
        margin: 20px;
    }

    h1 {
        color: turquoise;
        font-style: italic;
        font-size: 45px;
        margin: 0;
    }

    table {
        width: 100%;
    }

    table tr td {
        padding-bottom: 2px;
    }

    table tr td.padding {
        padding-bottom: 10px;
    }

    table.grid {
        width: 100%;
        border-spacing: 5px;
    }

    table.grid tr td {
        vertical-align: top;
        text-align: center;
        width: 33.33%;
        border: 2px turquoise solid;
        border-radius: 10px;
        padding: 5px;
        height: 130px;
    }

    table.grid tr td p {
        margin: 0em;
        font-weight: bold;
    }
</style>

<body>
    <div>
        <div class="header">

        </div>
        <div class="box">
            <div class="text-center header">
                <h1 class="header">Akta Ikrar Wakaf</h1>
                <hr />
                <p class="text">No. </p>
            </div>
            <p>Saya menyatakan bahwa dana yang tercamtum dibawah ini telah
                ditempatkan sebagai <b>Wakaf Uang</b> yang dikelola oleh <b>
                    Wakaf BSM Umat</b>, yang selajutnya disebutkan sebagai <b>Nadzir</b>
            </p>
            <div class="box">
                <table>
                    <tr>
                        <td>Nama Wakif</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>No. KTP Wakif</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>Wakif Atas Nama</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>Alamat/No. Hp</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>Rekening Pengembalian Dana</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td class="padding">Rekening Pengembalian Atas Nama</td>
                        <td class="padding">:</td>
                        <td class="padding">________________________________</td>
                    </tr>
                </table>
            </div>
            <p>Atas Wakaf yang diberikan melalui <b>PT. Bank Syahriah Mandiri</b></p>
            <div class="box">
                <table>
                    <tr>
                        <td>Nominal Pembayaran (IDR)</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>Peruntukan Wakaf</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                    <tr>
                        <td>Jumlah Wakaf</td>
                        <td>:</td>
                        <td>________________________________</td>
                    </tr>
                </table>
            </div>
            <div class="text-center">
                <p style="margin-bottom: 75px;"> Diterbitkan di </p>
                <p style="margin-bottom: 50px;"> Jakarta,____ _______________ 2020</p>
            </div>
            <table class="grid">
                <tr>
                    <td>
                        <p>Wakif</p>
                        <hr />
                    </td>
                    <td>
                        <p>Nadsir</p>
                        <hr />
                    </td>
                    <td>
                        <p>PPAIW</p>
                        <hr />
                    </td>
                </tr>
            </table>

        </div>

    </div>
</body>

</html>';


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("laporan-akta.pdf");
?>
