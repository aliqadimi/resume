<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    public $guarded = [];

    public function username($id)
    {
        $user = User::where('id', $id)->first();
        return $user->name;
    }
    public function userrole($id)
    {
        $user = User::where('id', $id)->first();
        return $user->role;
    }
    public function userimage($id)
    {
        $user = User::where('id', $id)->first();
        return $user->image;
    }
}
