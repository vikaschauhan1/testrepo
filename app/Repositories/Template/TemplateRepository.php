<?php 

namespace App\Repositories\Template ;


use App\Repositories\Template\TemplateRepositoryInterface ;
use App\Models\TemplateMaster;


class TemplateRepository implements TemplateRepositoryInterface
{
    public $TemplateMaster;

    /**
     * TemplateRepository constructor.
     * @param TemplateMaster $TemplateMaster
     */

    function __construct(TemplateMaster $TemplateMaster)
    {
         $this->TemplateMaster = $TemplateMaster;
    }

    public function getAllTemplate()
    {
        //
    }

    public function templateFindById($id)
    {
       //
    }

    public function templateDeleteById($id)
    {
       //
    }

 
}



