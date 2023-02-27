<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getTime($time)
    {
        return date('H:i', strtotime($time));
    }

    public function getBooleanIcon($boolean)
    {
        $check = "<i class=\"fa-regular fa-circle-check\"></i>";
        $uncheck = "<i class=\"fa-regular fa-circle-xmark\"></i>";
        return $boolean === 1 ? $check : $uncheck;
    }
}
