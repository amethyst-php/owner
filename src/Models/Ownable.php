<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class Ownable extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.owner.data.ownable');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function owner(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function ownable(): MorphTo
    {
        return $this->morphTo();
    }
}
