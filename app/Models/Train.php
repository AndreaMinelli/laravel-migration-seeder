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

    public function getStatus($deleted, $delay)
    {
        $status = '';
        if ($deleted === 1) {
            $status = 'Cancellato';
        } else if ($delay === 1) {
            $status = 'In ritardo';
        } else {
            $status = 'In orario';
        }

        return $status;
    }
}
