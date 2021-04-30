<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 75%;
            padding: 5px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {

            margin-left: 25px;
            margin-top: 25px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 1000px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 10px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: start;
            background-color: #f1f1f1;
        }

        h3 {
            padding-top: 1px;
            margin-top: 1px;
        }

        h5 {
            text-align: end;
            margin-top: 25px;
            margin-left: 100px;
            size: 10px;
        }

        img {
            padding-top: 5px;
            padding-left: 5px;
            width: 70px;
        }

        label {
            text-align: center;
            padding: 50;
            size: 50;
            margin-top: 5;
        }

        .text {
            text-align: center;
            padding-left: 10;
        }

        .col {
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="column">
            <div class="card">
                <table>
                    <tr>
                        <td class="col"> <img src="<?= base_url('assets/gambar_profil/image_logo.jpeg') ?>" alt="Paris"></td>
                        <td>
                            <h2 class="text">Voucher Siswa</h2>
                        </td>
                    </tr>
                </table>



                <hr>
                <h3>Nama : <?= $voucher['nama']; ?></h3>
                <h3>Nim : <?= $voucher['nim']; ?></h3>
                <p>kode : <?= $voucher['kode']; ?></p>
                <p>info : <?= $voucher['info']; ?></p>
                <h5>alamat : Jl. Mandor Samin RT 02/06 Kalibaru, Cilodong Depok.</h5>
            </div>

        </div>

    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>