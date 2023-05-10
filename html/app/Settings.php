<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    protected $table = 'settings';

    protected $fillable = ['bank_wheel', 'bank_dice', 'bank_mines', 'bank_admin', 'ref_percent'];

    protected $hidden = ['created_at', 'updated_at'];
}
