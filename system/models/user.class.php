<?php

namespace App;

use Jc\User\jc_user;

class user extends jc_user
{
    protected static $_users_username = 'mail_address';
    protected static $_users_password = 'password';

    protected $table = 'jc_users'; // Change to "users" if you want your own users table.
    protected $autoIncrementColumn = 'userid';

}

?>