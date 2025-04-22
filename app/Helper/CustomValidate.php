<?php

namespace App\Helper;
use Illuminate\Validation\ValidationException;

trait CustomValidate
{
    public function validatePassword(string $password): string
    {
        $lowcase = preg_match('/[a-z]/', $password);
        $uppercase = preg_match('/[A-Z]/', $password);
        $number = preg_match('/[0-9]/', $password);
        $specialChar = preg_match('/[^\w]/', $password);

        //dd($lowcase, $uppercase, $number, $specialChar);
        if (!$lowcase){
            throw ValidationException::withMessages(['password' => 'A senha deve conter pelo menos uma letra minúscula.']);
        } else if (!$uppercase){
            throw ValidationException::withMessages(['password' => 'A senha deve conter pelo menos uma letra maiúscula.']);
        } else if (!$number){
            throw ValidationException::withMessages(['password' => 'A senha deve conter pelo menos um número.']);
        } else if (!$specialChar){
            throw ValidationException::withMessages(['password' => 'A senha deve conter pelo menos um caractere especial.']);
        }
        return $password;
    }
}
