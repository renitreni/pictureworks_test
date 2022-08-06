<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class PasswordMatched implements InvokableRule
{
    /**
     * Check if password the same as set in config.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param $fail
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (strtoupper($value) !== config('app.password')) {
            $fail('The :attribute does not matched.');
        }
    }
}
