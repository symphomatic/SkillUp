<?php

return [
    'required' => 'Este campo es obligatorio.',  // Mensaje general para validation.required

    'custom' => [
        'name' => [
            'required' => 'El campo de nombre es obligatorio.',
        ],
        'email' => [
            'required' => 'El campo de correo electrónico es obligatorio.',
            'unique' => 'Este correo electrónico ya está registrado.',
            'email' => 'El formato del correo electrónico no es válido.',
        ],
        'role' => [
            'required' => 'Por favor, selecciona un rol.',
        ],
        'password' => [
            'required' => 'El campo de contraseña es obligatorio.',
            'min' => 'La contraseña debe tener al menos 8 caracteres, 1 mayúscula y un símbolo especial.',
        ],
        'password_confirmation' => [
            'required' => 'Por favor, confirma tu contraseña.',
            'same' => 'La confirmación de la contraseña no coincide.',
        ],
    ],
];
