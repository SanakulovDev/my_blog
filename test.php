<?php


interface UserValidatorInterface
{
    public function validate(User $user): bool;
}

class EmailValidator implements UserValidatorInterface
{
    public function validate(User $user): bool
    {
        return filter_var($user->email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

class AgeValidator implements UserValidatorInterface
{
    public function validate(User $user): bool
    {
        return $user->age >= 18;
    }
}

function validateUser(UserValidatorInterface $validator, User $user)
{
    return $validator->validate($user);
}

echo validateUser();