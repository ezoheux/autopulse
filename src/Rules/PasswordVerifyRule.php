<?php

namespace Ezoheux\App\Rules;

use App\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

/**
 * The password verify rule.
 */
class PasswordVerifyRule implements Rule
{
    /** @var \App\User $user The user model. */
    private $user;

    /**
     * Create a new rule instance.
     *
     * @param \App\User $user The user model.
     *
     * @return void Returns nothing.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute The attribute to test against.
     * @param mixed  $value     The test case value.
     *
     * @return bool Returns true if the validation rule passes and returns false if not.
     */
    public function passes($attribute, $value)
    {
        if (Hash::check($value, $this->user->password)) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string Returns the error message.
     */
    public function message()
    {
        return '';
    }
}
