<?php

/**
* Register a user
*
* @param string $email
* @param string $username
* @param string $name
* @param string $user_type
* @param string $phone
* @param string $password
* @return bool
*/
function register_user(string $email, string $phone,string $name,string $user_type, string $username, string $password): bool
{
    if ($user_type == 'Customer')
    {
        $sql = 'INSERT INTO customer(CName, CPhoneNum, Email, AddressID, username, password)
            VALUES(:name, :phone, :email, NULL, :username, :password)';

    }elseif ($user_type == 'Supplier')
    {
        $sql = 'INSERT INTO supplier(SupplierName, SPhoneNum, SEmail, AddressID, username, password)
            VALUES(:name, :phone, :email, NULL, :username, :password)';

    }elseif ($user_type == 'ShopOwner') {

        $sql = 'INSERT INTO shopowner(SOname, OPhoneNum, OEmail, AddressID, username, password)
            VALUES(:name, :phone, :email, NULL, :username, :password)';
    }
    $statement = db()->prepare($sql);

    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->bindValue(':phone', $phone, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

    return $statement->execute();
}

function find_user_by_username(string $username, string $user_type)
{
    if ($user_type == 'Customer')
    {
        $sql = 'SELECT username, password
                FROM customer
                WHERE username=:username';

    }elseif ($user_type == 'Supplier')
    {
        $sql = 'SELECT username, password
                FROM supplier
                WHERE username=:username';

    }elseif ($user_type == 'ShopOwner') {

        $sql = 'SELECT username, password
                FROM shopowner
                WHERE username=:username';
    }
    $statement = db()->prepare($sql);

    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
}

function login(string $username, string $password, string $user_type): bool
{
    $user = find_user_by_username($username, $user_type);

    // if user found, check the password
    if ($user && password_verify($password, $user['password'])) {

        // prevent session fixation attack
        session_regenerate_id();

        // set username in the session
        $_SESSION['username'] = $user['username'];
        
        if($user_type == 'Supplier' )
        {
            $_SESSION['user_type'] = 'Supplier';
        }elseif($user_type == 'ShopOwner')
        {
            $_SESSION['user_type'] = 'ShopOwner';
        }elseif($user_type == 'Customer')
        {
            $_SESSION['user_type'] = 'Customer';
        }
        return true;
    }

    return false;
}

function is_user_logged_in(): bool
{
    return isset($_SESSION['username']);
}

function require_login(): void
{
    if (!is_user_logged_in()) {
        redirect_to('login.php');
    }
}

function logout(): void
{
    if (is_user_logged_in()) {
        unset($_SESSION['username']);
        session_destroy();
        redirect_to('login.php');
    }
}

function current_user()
{
    $details = [
        'username'=> $_SESSION['username'],
        'user_type'=> $_SESSION['user_type']
    ];
    if (is_user_logged_in()) {
        return $details;
    }
    return null;
}

function current_user_details()
{
    if (current_user() !=null)
    {
        $user_name = $_SESSION['username'];
        $Cuser_type = $_SESSION['user_type'];

        if ($Cuser_type == 'Supplier')
        {
            $sql = 'SELECT *
            FROM supplier
            WHERE username=:username';
        }elseif($Cuser_type == 'Customer')
        {
            $sql = 'SELECT *
            FROM customer
            WHERE username=:username';
        }elseif($Cuser_type == 'ShopOwner')
        {
            $sql = 'SELECT *
            FROM shopowner
            WHERE username=:username';
        }

        $statement = db()->prepare($sql);
        $statement->bindValue(':username', $user_name, PDO::PARAM_STR);
        $statement->execute();

       $account_info = $statement->fetch(PDO::FETCH_ASSOC);
    }
    return $account_info;
}