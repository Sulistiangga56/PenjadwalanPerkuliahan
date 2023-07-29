<?php
    session_start();
    function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$not_found = false;

// Data user yang bisa untuk login
$list_user = [
    [
        'username' => 'Admin',
        'password' => 'Admin'
    ],
    [
        'username' => 'admin',
        'password' => 'admin'
    ],
    [
        'username' => 'admin@gmail.com',
        'password' => 'admin'
    ],
];

$list_user2 = [
    [
        'username' => 'Mahasiswa',
        'password' => 'Mahasiswa'
    ],
    [
        'username' => 'mahasiswa',
        'password' => 'mahasiswa'
    ],
    [
        'username' => 'mahasiswa@gmail.com',
        'password' => 'mahasiswa@gmail.com'
    ]
];

$list_user3 = [
    [
        'username' => 'Dosen',
        'password' => 'Dosen'
    ],
    [
        'username' => 'dosen',
        'password' => 'dosen'
    ],
    [
        'username' => 'dosen@gmail.com',
        'password' => 'dosen'
    ]
];


// Data yang diperoleh dari form login
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];  


// Perulangan setiap data user untuk diverifikasi dengan data yang dimasukan
foreach ($list_user as $key => $registered_user) {

    // Verifikasi username yang dimasukan dengan data username 
    if ($registered_user['username'] == $user['username']) {

        // Verifikasi password yang dimasukan dengan data password 
        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Anda Berhasil login ke dalam sistem penjadwalan.';  

            // Mengarahkan ke dashboard admin jika berhasil
            header("Location: admin/dashboard.php");
            break;
        } else {
            $_SESSION['error'] = 'Password yang anda masukan salah';
        }
    } else {

        // Menampilkan pesan kesalahan jika data tidak cocok
        alert("Harap untuk memastikan Username & Password anda benar");
        $_SESSION['error'] = 'Password yang anda masukan salah';
        echo "   <script>
                         alert('Harap untuk memastikan Username & Password anda benar');
                         document.location.href = 'admin/login.php';
                     </script>
                 ";
    }
}
if ($not_found == true) {
    alert("Harap untuk memastikan Username & Password anda benar");
    header("Location: admin/login.php");
}

// Perulangan setiap data user untuk diverifikasi dengan data yang dimasukan
foreach ($list_user2 as $key => $registered_user) {

    // Verifikasi username yang dimasukan dengan data username 
    if ($registered_user['username'] == $user['username']) {

        // Verifikasi password yang dimasukan dengan data password 
        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Anda Berhasil login ke dalam sistem penjadwalan.';  

            // Mengarahkan ke dashboard admin jika berhasil
            header("Location: mahasiswa/jadwal.php");
            break;
        } else {
            $_SESSION['error'] = 'Password yang anda masukan salah';
        }
    } else {

        // Menampilkan pesan kesalahan jika data tidak cocok
        alert("Harap untuk memastikan Username & Password anda benar");
        $_SESSION['error'] = 'Password yang anda masukan salah';
        echo "   <script>
                         alert('Harap untuk memastikan Username & Password anda benar');
                         document.location.href = 'admin/login.php';
                     </script>
                 ";
    }
}
if ($not_found == true) {
    alert("Harap untuk memastikan Username & Password anda benar");
    header("Location: admin/login.php");
}

// Perulangan setiap data user untuk diverifikasi dengan data yang dimasukan
foreach ($list_user3 as $key => $registered_user) {

    // Verifikasi username yang dimasukan dengan data username 
    if ($registered_user['username'] == $user['username']) {

        // Verifikasi password yang dimasukan dengan data password 
        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Anda Berhasil login ke dalam sistem penjadwalan.';  

            // Redirect ke dashboard admin jika berhasil
            header("Location: dosen/jadwal.php");
            break;
        } else {
            $_SESSION['error'] = 'Password yang anda masukan salah';
        }
    } else {

        // Menampilkan pesan kesalahan jika data tidak cocok
        alert("Harap untuk memastikan Username & Password anda benar");
        $_SESSION['error'] = 'Password yang anda masukan salah';
        echo "   <script>
                         alert('Harap untuk memastikan Username & Password anda benar');
                         document.location.href = 'admin/login.php';
                     </script>
                 ";
    }
}
if ($not_found == true) {
    alert("Harap untuk memastikan Username & Password anda benar");
    header("Location: admin/login.php");
}

?>