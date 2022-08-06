<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class PasswordMatched implements InvokableRule
{
    public function __invoke($attribute, $value, $fail)
    {
        if (strtoupper($value) !== config('app.password')) {
            $fail('The :attribute does not matched.');
        }
    }
}
