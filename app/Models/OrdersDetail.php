<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdersDetail
 * 
 * @property int $id
 * @property int|null $order_id
 * @property int|null $product_id
 * @property int|null $quantity
 * @property bool|null $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Order|null $order
 * @property ProductDetail|null $product_detail
 *
 * @package App\Models
 */
class OrdersDetail extends Model
{
	protected $table = 'orders_details';

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'quantity',
		'is_active'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product_detail()
	{
		return $this->belongsTo(ProductDetail::class, 'product_id');
	}
}
