<?php

declare(strict_types=1);
/**
 *
 * This is my open source code, please do not use it for commercial applications.
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code
 *
 * @author CodingHePing<847050412@qq.com>
 * @link   https://github.com/Hyperf-Glory/socket-io
 */
namespace App\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $emoticon_ids
 */
class UsersEmoticon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_emoticon';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'emoticon_ids'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'user_id' => 'integer'];
}
