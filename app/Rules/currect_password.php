<?php

namespace App\Rules;

use App\Models\login;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class currect_password implements ValidationRule
{

    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = login::where('email', $this->email)->first();
        
        if ($user->password !== $value) {
            $fail('Plese enter Currect password');
            }
    }
}
