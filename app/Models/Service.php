<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $name
 * @property string $service_code
 * @property string $service_detail
 * @property string $service_img
 * @property int|null $store_id
 * @property int $category_id
 * @property int|null $price_type_id
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Store|null $store
 * @property PricingType|null $pricing_type
 * @property Collection|BookingDetail[] $booking_details
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'services';

	protected $casts = [
		'store_id' => 'int',
		'category_id' => 'int',
		'price_type_id' => 'int',
		'is_active' => 'int'
	];

	protected $fillable = [
		'name',
		'service_code',
		'service_detail',
		'service_img',
		'store_id',
		'category_id',
		'price_type_id',
		'is_active'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function store()
	{
		return $this->belongsTo(Store::class);
	}

	public function pricing_type()
	{
		return $this->belongsTo(PricingType::class, 'price_type_id');
	}

	public function booking_details()
	{
		return $this->hasMany(BookingDetail::class);
	}
}
