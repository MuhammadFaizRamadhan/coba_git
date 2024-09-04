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
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                        <form action="proses_login.php" method="post">
                            <h2 class="mt-4 cssanimation fadeInBottom" id="judul">Login Admin</h2>
                            <div class="mt-4 mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" id="form-control-admin-login" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" id="form-control-admin-login" name="email">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn" id="btn-submit" name="login">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </body>
    </html>