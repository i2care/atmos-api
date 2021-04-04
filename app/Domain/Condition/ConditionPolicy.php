<?php

namespace App\Domain\Condition;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Authenticatable as AuthUser;

class ConditionPolicy
{
    use HandlesAuthorization;

    public function index(): bool
    {
        return true;
    }

    public function show(): bool
    {
        return true;
    }

    public function store(): bool
    {
        return true;
    }

    public function update(): bool
    {
        return true;
    }

    public function destroy(): bool
    {
        return true;
    }
}
