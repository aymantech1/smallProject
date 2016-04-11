<?php
include ('../../../../vendor/mpdf/mpdf/mpdf.php');
include_once ('../../../../vendor/autoload.php');
use App\BITM\SEIP116718\Book\Book;
$obj = new Book();
$alldata = $obj->index();
$trs="";
$serial=0;
foreach($alldata as $data):
    $serial++;
    $trs.="<tr>";
    $trs.="<td>".$serial."</td>";
    $trs.="<td>".$data['id']."</td>";
    $trs.="<td>".$data['title']."</td>";
    $trs.="</tr>";
endforeach;
//
//echo"<pre>";
//print_r($alldata);
//echo "</pre>";
$html =<<<EOD
    <!DOCTYPE html>
    <html>
        <head>
            <title>List of the Books</title>
        </head>
        <body>
            <h1>List of the Books</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    $trs
                </tbody>
            </table>
        </body>
    </html>
EOD;
//echo $html;

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
