<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $cat_name
 * @property int|null $parent_id
 * @property int|null $cat_type
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category|null $category
 * @property Collection|Category[] $categories
 * @property Collection|ProductDetail[] $product_details
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'parent_id' => 'int',
		'cat_type' => 'int',
		'is_active' => 'int'
	];

	protected $fillable = [
		'cat_name',
		'parent_id',
		'cat_type',
		'is_active'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function categories()
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function product_details()
	{
		return $this->hasMany(ProductDetail::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
