<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidEmailPrefix implements Rule
{
    public function passes($attribute, $value){
        $prefix = explode('@', $value)[0];

        // If it contains at least one vowel, assume it's a human-generated word
        if (!preg_match('/[aeiou]/i', $prefix)) {
            return false;
        }

        // If it has more than 5 consecutive consonants, it's likely gibberish
        if (preg_match('/[^aeiou]{5,}/i', $prefix)) {
            return false;
        }

        // If it has the same letter 4+ times in a row, reject
        if (preg_match('/(.)\1{3,}/', $prefix)) {
            return false;
        }

        return true;
    }


    public function message()
    {
        return 'The email prefix appears to be invalid or generated randomly.';
    }
}