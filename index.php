<?php

//creiamo delle condizioni affinchè la mial fornita dall'utente soddisfi i criteri minimi di validazione

//variabile per input email

$email = $_GET['email'];
function checkEmail ($mail){
    
    
    if (str_contains($mail, '@') && str_contains($mail, '.')) {
        return [
            'message' => "Thank you! You won't be disappointed!",
            'outcome' => 'success'
        ];
        
    } else return [
        'message' => "I'm sorry! Type a valid e-mail address.",
        'outcome' => 'danger'
    ];
    // var_dump($response['message']);
    // var_dump($response['outcome'])
};

if (isset($email)) {    
    $response = checkEmail($email);
}



?>

<!doctype html>
<html lang="en">

<head>
    <title>Newsletter</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <style>
        header{
            height: fit-content ;
            justify-content: space-between;
        }
        .logo{
            img{
                height: 50px;
            }
        }
        .alert{
            left: 25%;
            top: 30px;
        }
        .credits{
            ul{
                list-style: none;
            }
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header class="d-flex bg-light ms-5">
        <div class="logo mr-auto py-3">
            <img class="" src="./assets/img/10505896.png" alt="">
        </div>

        <nav class="nav fw-bold justify-content-center px-2 me-3 align-items-center">
            <a class="text-body-tertiary nav-link active" href="#" aria-current="page">Contacts</a>
            <a class="text-body-tertiary nav-link" href="#">About</a>
            <a class="text-primary nav-link" target="_blank" href="https://www.google.com">Google</a>
        </nav>
        

        <?php if (isset($response)) : ?>

            <div class="position-fixed alert alert-<?= $response['outcome']; ?>" role="alert">

                <h2 class="alert-heading"><?= $response['message']?></h2>

            </div>

        <?php endif; ?>



    </header>


    <main class="bg-secondary">
        
        <div class="container-fluid bg-dark p-4">
            <div class="row g-3 mb-3 ">
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="w-100" src="./assets/img/obama.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-3 mt-1 bg-secondary p-3">
                <div class="col-3">
                    <div class="card">
                        <img class="w-100" src="./assets/img/yamcha.jpeg" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="w-100" src="./assets/img/yamcha.jpeg" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="w-100" src="./assets/img/yamcha.jpeg" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="w-100" src="./assets/img/yamcha.jpeg" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="container w-50 mx-auto border bg-light text-center mt-3 rounded">

            
            <form class="" action="" method="get">
                
                <div class="m-3 text-start">
                    <label for="" class="form-label">Newsletter</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" />
                    <small id="helpId" class="form-text text-muted">Type your e-mail up here to be updated on any news!</small>
                </div>
                
                <button class="m-2 btn btn-primary px-5" type="submit">Send it</button>
                
            </form>
            
        </div>

    </main>


    <footer>


        <div class="container-fluid bg-secondary credits pt-5 text-white text-center">
            <div class="row">
                <div class="col-4">
                    <ul>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    

  
            <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"
            ></script>
    
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"
            ></script>
        </body>
    </html>
    
</body>

</html>