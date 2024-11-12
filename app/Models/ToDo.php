<?php

namespace App\Models;

use App\ToDoStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property ToDoStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int|null $tag_id
 * @property int|null $category_id
 * @property-read \App\Models\Tag|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\TodoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Todo whereUserId($value)
 * @mixin \Eloquent
 */
class Todo extends Model
{
    /** @use HasFactory<\Database\Factories\ToDoFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => ToDoStatus::class,
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'todo_tag');
    }

    public function category(): HasOne
    {
        return $this->hasOne(Tag::class);
    }
}
