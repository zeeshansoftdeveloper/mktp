<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;
use Auth;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $gender
 * @property Carbon|null $date_of_birth
 * @property int $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Booking[] $bookings
 * @property Collection|Menu[] $menus
 * @property Collection|Message[] $messages
 * @property Collection|Order[] $orders
 * @property Collection|Store[] $stores
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use Notifiable;
	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $dates = [
		'email_verified_at',
		'date_of_birth'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'phone',
		'address',
		'gender',
		'date_of_birth',
		'role_id',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}

	public function menus()
	{
		return $this->hasMany(Menu::class);
	}

	public function messages()
	{
		return $this->hasMany(Message::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function stores()
	{
		return $this->hasMany(Store::class, 'owner_id');
	}

	public function getRole()
	{
		return Role::where('id', '=', Auth::user()->role_id)->value('role_name');
	}

	public function hasRole($role)
	{
		if ($this->role()->where('id', '=', $role)->first()) {
			return true;
		}
	
		return false;
	}
}
