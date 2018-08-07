<?php
return [
    [
        'Pattern'   =>'|^home/?$|',
        'Controller'=>'Home',
        'Method'    =>'index'
    ],
    [
        'Pattern'   =>'|^products/?$|',
        'Controller'=>'Products',
        'Method'    =>'index'
    ],
    [
        'Pattern'   =>'|^product/([0-9]+)/?$|',
        'Controller'=>'Products',
        'Method'    =>'productsCat'
    ],
    [
        'Pattern'   =>'|^details/([0-9]+)/?$|',
        'Controller'=>'Products',
        'Method'    =>'details'
    ],
    [
        'Pattern'   =>'|^contact/?$|',
        'Controller'=>'Contact',
        'Method'    =>'index'
    ], 
    [
        'Pattern'   =>'|^register/?$|',
        'Controller'=>'Register',
        'Method'    =>'index'
    ],
    [
        'Pattern'   =>'|^registration/?$|',
        'Controller'=>'Register',
        'Method'    =>'register'
    ],
    [
        'Pattern'   =>'|^admin/?$|',
        'Controller'=>'Admin',
        'Method'    =>'index'
    ],
    [
        'Pattern'   =>'|^admin/([0-9]+)/?$|',
        'Controller'=>'Admin',
        'Method'    =>'productCat'
    ],
    [
        'Pattern'   =>'|^update/([0-9]+)/?$|',
        'Controller'=>'Admin',
        'Method'    =>'update'
    ],
    [
        'Pattern'   =>'|^delete/([0-9]+)/?$|',
        'Controller'=>'Admin',
        'Method'    =>'delete'
    ],
    [
        'Pattern'   =>'|^loginForm/?$|',
        'Controller'=>'Login',
        'Method'    =>'index'
    ],
    [
        'Pattern'   =>'|^login/?$|',
        'Controller'=>'Login',
        'Method'    =>'login'
    ],
    [
        'Pattern'   =>'|^logout/?$|',
        'Controller'=>'Login',
        'Method'    =>'logout'
    ],
    [   # Ovaj mora biti zadnji
        'Pattern'   =>'|^.*$|',
        'Controller'=>'Home',
        'Method'    =>'index'
    ]
];