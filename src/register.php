<?php
if (is_user_logged_in()) {
    redirect_to('index.php');
}

$errors = [];
$inputs = [];

if (is_post_request()) {

    $fields = [
        'username' => 'string | required | alphanumeric | between: 3, 25 | unique: customer, username | unique: customer, username | unique: shopowner, username',
        'name'=> 'string | required',
        'phone'=> 'string | required',
        'user_type'=> 'string | required',
        'email' => 'email | required | email | unique: customer, Email | unique: supplier, SEmail | unique: shopowner, OEmail',
        'password' => 'string | required | secure',
        'cpassword' => 'string | required | same: password',
        'agree' => 'string | required'
    ];

    // custom messages
    $messages = [
        'cpassword' => [
            'required' => 'Please enter the password again',
            'same' => 'The password does not match'
        ],
        'agree' => [
            'required' => 'You need to agree to the term of services to register'
        ]
    ];

    [$inputs, $errors] = filter($_POST, $fields, $messages);

    if ($errors) {
        redirect_with('register.php', [
            'inputs' => $inputs,
            'errors' => $errors
        ]);
    }

    if (register_user($inputs['email'],$inputs['phone'],$inputs['name'],$inputs['user_type'], $inputs['username'], $inputs['password'])) {
        redirect_with_message(
            'login.php',
            'Your account has been created successfully. Please login here.'
        );

    }

} else if (is_get_request()) {
    [$inputs, $errors] = session_flash('inputs', 'errors');
}