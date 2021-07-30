<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property Carbon|null $order_datetime
 * @property int|null $user_id
 * 
 * @property User|null $user
 * @property Collection|OrdersDetail[] $orders_details
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'order_datetime'
	];

	protected $fillable = [
		'order_datetime',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function orders_details()
	{
		return $this->hasMany(OrdersDetail::class);
	}
}
