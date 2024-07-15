<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Fo = 'fo';
    case Member = 'member';
}