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
};

if (isset($email)) {    
    $response = checkEmail($email);
}


// var_dump($response['message']);
// var_dump($response['outcome'])

?>

<!doctype html>
<html lang="en">

<head>
    <title>Newsletter</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>

        <?php if (isset($response)) : ?>

            <div class="alert alert-<?= $response['outcome']; ?>" role="alert">

                <h2 class="alert-heading"><?= $response['message']?></h2>

            </div>

        <?php endif; ?>



    </header>


    <main>


        <form action="" method="get">

            <div class="m-3">
                <label for="" class="form-label">Newsletter</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Type a valid e-mail address" />
                <small id="helpId" class="form-text text-muted">Type your e-mail up here to be updated on any news!</small>
            </div>

            <button class="m-3" type="submit">Send it</button>

        </form>


    </main>


    <footer>

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