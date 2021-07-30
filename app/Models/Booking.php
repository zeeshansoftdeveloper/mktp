<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 * 
 * @property int $id
 * @property Carbon|null $booking_date
 * @property Carbon|null $booking_time
 * @property int|null $user_id
 * 
 * @property User|null $user
 * @property Collection|BookingDetail[] $booking_details
 *
 * @package App\Models
 */
class Booking extends Model
{
	protected $table = 'bookings';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'booking_date',
		'booking_time'
	];

	protected $fillable = [
		'booking_date',
		'booking_time',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function booking_details()
	{
		return $this->hasMany(BookingDetail::class);
	}
}
