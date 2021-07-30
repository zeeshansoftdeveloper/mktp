<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string|null $name
 * @property int $store_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Store $store
 * @property Collection|Attribute[] $attributes
 * @property Collection|ProductDetail[] $product_details
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'store_id' => 'int'
	];

	protected $fillable = [
		'name',
		'store_id'
	];

	public function store()
	{
		return $this->belongsTo(Store::class);
	}

	public function attributes()
	{
		return $this->belongsToMany(Attribute::class, 'product_attributes')
					->withPivot('id', 'vals')
					->withTimestamps();
	}

	public function product_details()
	{
		return $this->hasMany(ProductDetail::class);
	}
}
