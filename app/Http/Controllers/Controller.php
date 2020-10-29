<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\Jobdetail;
use App\Model\Jobtype;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnWithHearderData($view, $data) {
        $jobtype = Jobtype::all();
        $data['header'] = $jobtype;
        return view($view,$data);
    }
}
