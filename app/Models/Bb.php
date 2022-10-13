<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bb
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bb query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bb whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bb wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bb whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bb whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bb extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'price', 'slug', 'img', 'unit', 'quantity'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
