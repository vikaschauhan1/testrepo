<?php

namespace App\Http\Controllers;

use App\Repositories\Template\TemplateRepositoryInterface ;
use App\Models\GroupMaster ;
use App\Models\UserMaster ;
use App\Models\TemplateMaster ;
use Auth ;
use Illuminate\Http\Request;



class TemplateController extends Controller
{
    Protected $TemplateRepository ;

    public function __construct(TemplateRepositoryInterface $TemplateRepositoryInterface) {
        $this->TemplateRepository = $TemplateRepositoryInterface;
    }

    /*
     *
     */

    public function edittemplate()
    {
        return view('template.edit-template');
    }


    public function templateDetails()
    {
        return view('template.template-details');
    }


    public function createTemplate()
    {
        return view('template.create-template');
    }


    public function templateList()
    {
        return view('template.view-template');
    }


}
