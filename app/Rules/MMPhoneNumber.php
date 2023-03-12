<?php

namespace App\Rules;

use Closure;
use CyberWings\MyanmarPhoneNumber;
use Illuminate\Contracts\Validation\ValidationRule;

class MMPhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $phone_number = new MyanmarPhoneNumber();

        $telenor =  $phone_number->is_telecom('Telenor', $value);
        $mpt =  $phone_number->is_telecom('mpt', $value);
        $ooredoo =  $phone_number->is_telecom('ooredoo', $value);
        $mytel =  $phone_number->is_telecom('mytel', $value);
        $mec =  $phone_number->is_telecom('mec', $value);
        return (in_array(true,[$telenor,$mpt,$ooredoo,$mytel,$mec]));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your phone number is invalid.';
    }
}
