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

    .header {
        margin: 30px;
        margin-bottom: 10px;
        position: static;
        top: 10px;
    }

    .float-left{
        margin: 0px;
        float: left;
        width: 150px;
    }

    .float-right{
        margin: 0px;
        float: right;
        width: 150px;
    }

    .img-center{
        width: 170px;
        margin: 5px;
    }

    .text-center {
        text-align: center;
    }

    .box {
        margin: 15px;
    }

    .boxtable {
        margin: 15px 0px 15px 15px;
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
        padding-bottom: 5px;
    }

    table tr td.padding {
        padding-bottom: 10px;
    }

    td.colsm {
        width: 1%;
    }

    td.colmd {
        width: 45%;
    }

    td.collg {
        width: 55%;
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
        margin: 0;
        font-weight: bold;
    }
</style>

<body>
    <div>
        <div class="header">
            <img class="float-left" src="img/wakaf.jpg" alt="">
            <img class="float-right" src="img/mandiri.jpg" alt="">
        </div>
        <div style="clear: both;">
            <p style="text-align: center;">

                <img class="img-center" src="img/bismillah.jpg" alt="">
            </p>
        </div>
        <div class="box">
            <div class="text-center">
                <h1>Akta Ikrar Wakaf</h1>
                <hr />
                <p class="text">No. </p>
            </div>
            <p>Saya menyatakan bahwa dana yang tercantum dibawah ini telah
                ditempatkan sebagai <b>Wakaf Uang</b> yang dikelola oleh <b>
                    Wakaf BSM Umat</b>, yang selajutnya disebutkan sebagai <b>Nadzir</b>
            </p>
            <div class="box">
                <table>
                    <tr>
                        <td class="colmd">Nama Wakif</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">No. KTP Wakif</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">Wakif Atas Nama</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">Alamat/No. Hp</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">Rekening Pengembalian Dana</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd padding">Rekening Pengembalian Atas Nama</td>
                        <td class="colsm padding">:</td>
                        <td class="collg padding">_______________________________________</td>
                    </tr>
                </table>
            </div>
            <p>Atas Wakaf yang diberikan melalui <b>PT. Bank Syariah Mandiri</b></p>
            <div class="box">
                <table>
                    <tr>
                        <td class="colmd">Nominal Pembayaran (IDR)</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">Peruntukan Wakaf</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                    <tr>
                        <td class="colmd">Jumlah Wakaf</td>
                        <td class="colsm">:</td>
                        <td class="collg">_______________________________________</td>
                    </tr>
                </table>
            </div>
            <div class="text-center">
                <p style="margin-bottom: 50px;"> Diterbitkan di </p>
                <p style="margin-bottom: 20px;"> Jakarta, ___ _______________ 2020</p>
            </div>
            <table class="grid">
                <tr>
                    <td>
                        <p>Wakif</p>
                        <hr />
                    </td>
                    <td>
                        <p>Nadzir</p>
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

</html>
';


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("laporan-akta.pdf");
?>
