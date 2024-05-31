<?php

namespace App\Enums;

enum UserRole: string
{
    case Normal = 'normal';
    case Admin = 'admin';
    case Tutor = 'tutor';
}
