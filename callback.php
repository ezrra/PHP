<?php

class User {
    public $id;
    public $name;
    public $user_name;

}

class UserLogin {
    public static function TryToLogin($user, $pass, $callback) {

        if ($user == 'user' && $pass == '123') {
            $user = new User();
            $user->id = 1;
            $user->name = 'Juan';
            $user->user_name = 'juan_hack';
            $callback($user);
        } else {
            $callback(null);
        }
    }
}