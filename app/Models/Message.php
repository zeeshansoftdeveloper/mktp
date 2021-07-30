<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string|null $message
 * @property int|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'message',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
