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