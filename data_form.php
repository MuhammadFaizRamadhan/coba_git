<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <!-- cssanimation.io -->
        <link rel="stylesheet" href="css/admin_login.css">
        <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
        <?php include("../form_login/komponen/komponen.php")?>
    </head>
    <body>
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="justify-content-center">
                <div class="card">
                    <div class="card-head m-3">
                        <h1 class="text-center">Data Form</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Id suggestion</th> -->
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Saran</th>
                                        <!-- <th scope="col">Edit</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include "koneksi.php";
                                    if (isset($_POST['cari'])) {
                                        $cari = $_POST['cari'];
                                        $query_suggestion = mysqli_query($koneksi, "select * from suggestion where id_suggestion = '$cari' or nama like '%$cari%' ");
                                    }
                                    else{
                                        $query_suggestion = mysqli_query($koneksi, "select * from suggestion");
                                    }
                                    while($data_suggestion = mysqli_fetch_array($query_suggestion)){
                                ?>
                                    <tr>
                                        <!-- <td><?=$data_suggestion['id_suggestion']?></td> -->
                                        <td><?=$data_suggestion['nama']?></td>
                                        <td><?=$data_suggestion['nim']?></td>
                                        <td><?=$data_suggestion['email']?></td>
                                        <td><?=$data_suggestion['jurusan']?></td>
                                        <td><?=$data_suggestion['gender']?></td>
                                        <td><?=$data_suggestion['saran']?></td>
                                        <!-- <td>
                                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $data_suggestion['nama']; ?>?')) window.location.href = 'suggestion.php?aksi=hapus&data=<?php echo $data_suggestion['id_suggestion'];?>'">
                                                <button class="btn" id="btn-delete"><i class="fa-solid fa-trash"></i> Hapus</button>
                                            </a>
                                        </td> -->
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>