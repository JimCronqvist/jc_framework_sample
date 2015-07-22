<?php

namespace App;

use Jc\User\jc_user;

class user extends jc_user
{
    protected static $_users_table = 'users';
    protected static $_users_username = 'mail_address';
    protected static $_users_password = 'password';

    protected $autoIncrementColumn = 'userid';

}

?>