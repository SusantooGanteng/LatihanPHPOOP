<?php

include 'ServiceGreeting.php';
class User
{
    
    use ServiceGreeting;
}

$user = new User();

echo $user->name;
/* Output
SERVICEGREETING
 */