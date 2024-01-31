<?php

namespace App\Repository;
use App\Models\Inscription;
use App\Repository\BaseRepository;

class InscriptionRepository extends BaseRepository{
    public function __construct(Inscription $inscription)
    {   
        parent::__construct($inscription);
    }

    public function create($data)
    {
        parent::create($data);
    }
}