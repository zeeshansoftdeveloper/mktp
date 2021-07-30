<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductAttribute
 * 
 * @property int $id
 * @property int|null $product_id
 * @property int|null $attribute_id
 * @property string|null $vals
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product|null $product
 * @property Attribute|null $attribute
 *
 * @package App\Models
 */
class ProductAttribute extends Model
{
	protected $table = 'product_attributes';

	protected $casts = [
		'product_id' => 'int',
		'attribute_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'attribute_id',
		'vals'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function attribute()
	{
		return $this->belongsTo(Attribute::class);
	}
}
