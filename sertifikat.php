<?php
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html =  '
<html>

<head>
    <style>
        body {
            background-color: white;
        }

        .header {
            margin: 10px;
            margin-bottom: 20px;
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

        .image {
            width: 100%;
            justify-content: center;
        }

        .text-center {
            text-align: center;
        }

        .box {
            margin: 30px;
        }

        h1 {
            color: turquoise;
            font-style: italic;
            font-size: 45px;
            margin: 0;
        }

        table tr td {
            padding-bottom: 5px;
        }

        table tr td.padding {
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img class="float-left" src="img/wakaf.jpg" alt="">
        <img class="float-right" src="img/mandiri.jpg" alt="">
    </div>
    <div style="clear: both;">
        <div class="box">
            <div class="text-center header">
                <h1 class="header">Sertifikat Wakaf</h1>
                <hr />
                <p class="text">No. </p>
            </div>
            <p>Sertifikat diberikan kepada : </p>
            <div class="box">
                <table>
                    <tr>
                        <td>Nama Wakif</td>
                        <td>:</td>
                        <td>__________________________________</td>
                    </tr>
                    <tr>
                        <td class="padding">Alamat</td>
                        <td class="padding">:</td>
                        <td class="padding">__________________________________</td>
                    </tr>
                    <tr>
                        <td rowspan="2"> Atas Wakaf yang diberikan melalui</td>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="padding">&nbsp;</td>
                        <td class="padding"><b>Pt Bank Mandiri Syariah</b></td>
                    </tr>
                    <tr>
                        <td>Nominal Wakaf</td>
                        <td>:</td>
                        <td>__________________________________</td>
                    </tr>
                    <tr>
                        <td class="padding">Jenis Wakaf</td>
                        <td class="padding">:</td>
                        <td class="padding">__________________________________</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="padding"><b>Kepada</b></td>
                    </tr>
                    <tr>
                        <td>Nazhir</td>
                        <td>:</td>
                        <td>__________________________________</td>
                    </tr>
                    <tr>
                        <td>Alamat Nazhir</td>
                        <td>:</td>
                        <td>__________________________________</td>
                    </tr>
                </table>
            </div>
            <div class="box">
                <div class="text-center">
                    <p style="margin-bottom: 75px;"> Diterbitkan di </p>
                    <p style="margin-bottom: 15px;"> Jakarta,____ _______________ 2020</p>
                    <p>Dokumen ini diterbitkan oleh Bank secara sistem,
                        oleh karenanya tidak memerlukan tanda tangan pejabat bank </p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>';


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("laporan-sertifikat.pdf");
?>
