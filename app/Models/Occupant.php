<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Occupant extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = "occupants";
    protected $fillable = ["email", "password", "password_repeat"];
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getAuthEmail()
    {
        return $this->email;
    }
}
