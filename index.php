<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./styles/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body> 
    
    <main>

        <div class="main-wrapper">
            <div class="mc-container">
                <div class="container bg-light p-3">
                    <h1 class="text-center mb-5">Strong Password Generator</h1>
                    <form action="">
                        <div class="row my-2">
                            <div class="col-6">
                                <span>Lunghezza Della Password:</span>
                            </div>
                            <div class="col-6 mb-3">
                                <input type="number" name="pwlength">
                            </div>

                            <div class="col">
                                <button class="btn btn-success" type="submit">Generate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

</body>
</html>