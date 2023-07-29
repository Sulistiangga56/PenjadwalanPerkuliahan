<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Admin</title>
    <?php include "../function.php" ?>
    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
    </script>
    
</head>
<body>

<nav>
  <a href="../index.php" style="float: right; margin-right: 50px"><button class="btn btn-danger" >Logout</button></a> 
  <h3 style="color:white; text-align:center">WELCOME IN PAGE ADMIN</h3>
  <marquee bgcolor="#000080" style="color: #FFFFFF; font-family: Book Antiqua" behavior="scroll">Halaman Page ini Khusus untuk Admin, Harap memasukkan file yang sesuai untuk penguploadan jadwal perkuliahan!</marquee>
  
</nav>
