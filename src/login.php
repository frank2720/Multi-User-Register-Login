<?php
if (is_user_logged_in()) {
    redirect_to('index.php');
}

$inputs = [];
$errors = [];

if (is_post_request()) {

    [$inputs, $errors] = filter($_POST, [
        'user_type' => 'string | required',
        'username' => 'string | required',
        'password' => 'string | required'
    ]);

    if ($errors) {
        redirect_with('login.php', ['errors' => $errors, 'inputs' => $inputs]);
    }

    // if login fails
    if (!login($inputs['username'], $inputs['password'], $inputs['user_type'])) {

        $errors['login'] = 'Invalid username or password';

        redirect_with('login.php', [
            'errors' => $errors,
            'inputs' => $inputs
        ]);
    }
    // login successfully
    
    if($inputs['user_type']=='ShopOwner')
    {
        redirect_to('SOindex.php');
    }elseif ($inputs['user_type']=='Supplier') 
    {
        redirect_to('index.php');
    }elseif($inputs['user_type']=='Customer')
    {
        redirect_to('shop.php');
    }

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}