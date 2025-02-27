<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h1 {
            background: linear-gradient(to right, #1f67bf, #40d6ff);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        h2 {
            background: linear-gradient(to right, #696c70, #91abb3);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
<div class="container">
    <h1>Informasi Nilai</h1>
    <br />
    <div class="card mb-3">
        <h2 style="padding-left: 15px;">Nilai Siswa</h2>
        <div class="card-body">
            <div class="row">
                <?php
                $numRows = 12;
                echo '<table>';
                echo '
                    <tr>
                        <td style="max-width: 20px; text-align: center; vertical-align: middle;" rowspan="2">No</td>
                        <td style="text-align: center; vertical-align: middle;" rowspan="2">Mata Pelajaran</td>
                        <td colspan="3" style="text-align: center;">Nilai Tugas</td>
                        <td style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UTS</td>
                        <td style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UAS</td>
                    </tr>
                    <tr>
                        <td style="max-width: 20px; text-align: center;">1</td>
                        <td style="max-width: 20px; text-align: center;">2</td>
                        <td style="max-width: 20px; text-align: center;">3</td>
                    </tr>
                ';
                for ($i = 1; $i <= $numRows; $i++) {
                    echo '
                    <tr>
                        <td style="max-width: 20px; text-align: center;">' . $i . '.</td>
                        <td style="text-align: center; vertical-align: middle;">TEST</td>
                        <td style="max-width: 20px; text-align: center;">1</td>
                        <td style="max-width: 20px; text-align: center;">2</td>
                        <td style="max-width: 20px; text-align: center;">3</td>
                        <td style="max-width: 20px; text-align: center;">1</td>
                        <td style="max-width: 20px; text-align: center;">2</td>
                    </tr>
                    ';
                }
                echo '</table>';
                ?>
                <div class="text-end">
                    <br />
                    <a href="#" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>