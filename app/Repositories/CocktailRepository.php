<?php

namespace App\Repositories;

use App\Interfaces\CocktailRepositoryInterface;
use App\Models\Cocktail;

class CocktailRepository extends Repository implements CocktailRepositoryInterface
{
    /**
     * ServiceTypeRepository constructor.
     *
     * @param Cocktail $cocktail
     */
    public function __construct(Cocktail $cocktail)
    {
        $this->model = $cocktail;
    }
    public function findByUrlWithRelations(string $link, array $relations) {

        return $this->model->where('link',$link)->with($relations)->first();
    }
}
