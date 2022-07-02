<?php
namespace Domain\Users;

enum Roles: string
{
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case USER = 'user';
}