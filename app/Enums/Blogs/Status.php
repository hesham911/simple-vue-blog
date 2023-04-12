<?php

namespace App\Enums\Blogs;

use App\Enums\AbstractEnum;

class Status extends AbstractEnum
{
    const ACTIVE    = 'active';
    const INACTIVE  = 'inactive';
    const PENDING   = 'pending';
}
