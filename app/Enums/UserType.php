<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserType extends Enum
{
    const Admin = 0;
    const Staff = 1;
    const Student = 2;
}
