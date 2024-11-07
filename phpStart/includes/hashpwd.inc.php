<?php


$sesitiveData = 'maxx';

$salt = bin2hex(random_bytes(16)); //random salt
$pepper = 'superSecretString';

echo "<br>" . $salt;

$dataToHash = $sesitiveData . $salt . $pepper;
$hash = hash('sha256', $dataToHash);

echo "<br>" . $hash;
echo "<br>";
///////////////////////////


$pwd = 'maxxx2';

$pwdOptions = [
    'cost' => 12
];
$hashedPassword = password_hash($pwd, PASSWORD_BCRYPT, $pwdOptions);

$userLoginPdw = 'maxxx23';

if(password_verify($userLoginPdw, $hashedPassword)){
    echo 'GOOD';
} else {
    echo 'passwords dont match';
};
