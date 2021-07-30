<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Store
 * 
 * @property int $id
 * @property string $store_name
 * @property string $store_address
 * @property string|null $store_address2
 * @property string|null $store_phone
 * @property string $owner_mobile
 * @property int $owner_id
 * @property string|null $lat
 * @property string|null $lng
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Product[] $products
 * @property Collection|Service[] $services
 * @property Collection|StoreImage[] $store_images
 *
 * @package App\Models
 */
class Store extends Model
{
	protected $table = 'stores';

	protected $casts = [
		'owner_id' => 'int',
		'is_active' => 'int'
	];

	protected $fillable = [
		'store_name',
		'store_address',
		'store_address2',
		'store_phone',
		'owner_mobile',
		'owner_id',
		'lat',
		'lng',
		'is_active'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'owner_id');
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}

	public function store_images()
	{
		return $this->hasMany(StoreImage::class);
	}
}
