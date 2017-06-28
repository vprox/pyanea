<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
   protected $fillable=['afm','at','surname','name','fathername','klados','katigoria_pinaka','email','aa',
   						'aathinas','bathinas','cathinas','dathinas','anatolikiattiki','ditikiattiki','peiraias',
   						'keddyaathinas','keddybathinas','keddycathinas','keddydathinas','keddyanatolikiattiki','keddyditikiattiki','keddypeiraias'
   							];
}
