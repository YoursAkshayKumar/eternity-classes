<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Admin;
use App\Models\Applicant;
use App\Models\ApplicationStatus;

class HomeController extends WebAppBaseController
{

    public function home()
    {
        try {
            return view('front.pages.home', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function home2()
    {
        try {
            return view('front.pages.home2', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }
   
    public function about()
    {
        try {
            return view('front.pages.about', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function courses()
    {
        try {
            return view('front.pages.courses', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function contact()
    {
        try {
            return view('front.pages.contact', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }




    //Home Controller
}
