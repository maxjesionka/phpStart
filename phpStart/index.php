<?php
require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php course</title>
</head>

<body style="background-color:antiquewhite;">
    <div>
     <?php

    /*    $fruit01 = 'apple';
        $fruits = ['apple', 'cherry', 'strawberry', array('maliny', 'jagody')];
        $fruits[] = 'orange';
        array_push($fruits, "mango"); //to samo dla ponumerowanych tablic

        echo '<br>';
        echo $fruits[3][0];
        // unset($fruits[2]);
        array_splice($fruits, 0, 1);

        echo '<br>';
        echo $fruits[1];

        $tasks = [
            'laundry' => 'max',
            'trash' => 'ande',
            'shopping' => 'adren'
        ];
        $tasks['dusting'] = 'paul'; // dodawanie do tablic nienumerowanych

        echo '<br>';
        echo $tasks['laundry'];
        echo '<br>';
        print_r($tasks);
*/
        ?> 
    </div>
    <h3>Create account</h3>
  <form action='includes/formhandler.inc.php' method='post'>
    <input type ='text' name='username' placeholder='username'>
    <input type ='text' name='pwd' placeholder='passwords'>
    <input type ='text' name='email' placeholder='email'>
    <button>Signup</button>
  </form>
  <br>

  <h3>Change account</h3>
  <form action='includes/userupdate.inc.php' method='post'>
    <input type ='text' name='username' placeholder='username'>
    <input type ='text' name='pwd' placeholder='passwords'>
    <input type ='text' name='email' placeholder='email'>
    <button>Update</button>
  </form>
  <br>

<h3>Delete account</h3>
<form action='includes/userdelete.inc.php' method='post'>
  <input type ='text' name='username' placeholder='username'>
  <input type ='text' name='pwd' placeholder='passwords'>
  <button>Delete</button>
</form>
<br>
  

<form class="searchform" action="search.php" method="post">
  <label for="search">Search for user:</label>
  <input id="search" type="text" name="usersearch" placeholder="search..">
  <button>Search</button>
</form>

</body>

</html>