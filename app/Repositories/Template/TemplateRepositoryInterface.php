<?php

namespace App\Repositories\Template;

interface TemplateRepositoryInterface
{


    public function getAllTemplate();


    public function templateFindById($id);


    public function templateDeleteById($id);

}


