<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BookingDetail
 * 
 * @property int $id
 * @property int|null $booking_id
 * @property int|null $service_id
 * @property bool|null $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Booking|null $booking
 * @property Service|null $service
 *
 * @package App\Models
 */
class BookingDetail extends Model
{
	protected $table = 'booking_details';

	protected $casts = [
		'booking_id' => 'int',
		'service_id' => 'int',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'booking_id',
		'service_id',
		'is_active'
	];

	public function booking()
	{
		return $this->belongsTo(Booking::class);
	}

	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
