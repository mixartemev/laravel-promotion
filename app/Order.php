<?php

namespace Insta;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Insta\Order
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $type
 * @property int $value
 * @property int $acc_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static Builder|Order whereAccId($value)
 * @method static Builder|Order whereCreatedAt($value)
 * @method static Builder|Order whereId($value)
 * @method static Builder|Order whereType($value)
 * @method static Builder|Order whereUpdatedAt($value)
 * @method static Builder|Order whereValue($value)
 * @property-read \Insta\Acc $acc
 */
class Order extends Model
{
    public function acc(){
    	return $this->belongsTo(Acc::class);
    }
}
