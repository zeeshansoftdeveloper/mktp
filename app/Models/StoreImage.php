<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StoreImage
 * 
 * @property int $id
 * @property int|null $store_id
 * @property string|null $banner
 * @property string|null $logo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Store|null $store
 *
 * @package App\Models
 */
class StoreImage extends Model
{
	protected $table = 'store_images';

	protected $casts = [
		'store_id' => 'int'
	];

	protected $fillable = [
		'store_id',
		'banner',
		'logo'
	];

	public function store()
	{
		return $this->belongsTo(Store::class);
	}
}
