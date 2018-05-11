<?php
/**
 * Created by PhpStorm.
 * User: shakin
 * Date: 11.05.18
 * Time: 10:55
 */

namespace App\Constants;


use MyCLabs\Enum\Enum;

/**
 * Class PostStatus
 * @package App\Constants
 *
 * @method static PostStatus PUBLISHED()
 *
 */
class PostStatus extends Enum
{

    const UNKNOWN = 'Неихвестный';
    const PUBLISHED = 'Опубликован';

}