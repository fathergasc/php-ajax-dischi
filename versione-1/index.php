<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>PHP Dischi</title>
</head>

<body>

    <?php
    include __DIR__ . '/../database.php';
    ?>

    <header class="px-3 d-flex justify-content-between align-items-center">
        <img id="spotify-logo" src="../img/logo.svg" alt="">
    </header>

    <main>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row row-cols-5 g-5 d-flex">
                <?php
                foreach ($database as $album) {
                echo    '<div class="col"> 
                            <div class="album text-center">
                                <img src="' . $album['poster'] . '">
                                <span class="uppercase fs-5 text-white fw-bold py-2">' . $album['title'] . '</span> 
                                <span class="fs-6 text-white-50 pt-2">' . $album['author'] . '</span> 
                                <span class="fs-6 text-white-50">' . $album['year'] . '</span>
                            </div>
                        </div>';
                }
                
                ?>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>