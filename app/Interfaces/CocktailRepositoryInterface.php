<?php

namespace App\Interfaces;

interface CocktailRepositoryInterface extends RepositoryInterface
{
    public function findByUrlWithRelations (string $link, array $relations);

}
