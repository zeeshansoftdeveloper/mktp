<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PricingType
 * 
 * @property int $id
 * @property string|null $type_name
 * @property bool|null $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ProductDetail[] $product_details
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class PricingType extends Model
{
	protected $table = 'pricing_type';

	protected $casts = [
		'is_active' => 'bool'
	];

	protected $fillable = [
		'type_name',
		'is_active'
	];

	public function product_details()
	{
		return $this->hasMany(ProductDetail::class, 'price_type_id');
	}

	public function services()
	{
		return $this->hasMany(Service::class, 'price_type_id');
	}
}
