<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Jobtype;
use \App\Model\Jobdetail;
use Auth;

class JobController extends Controller
{
    public function index()
    {
        //
        $jobEngineer = Jobtype::with('jobdetails')->where('name', 'エンジニア')->get();
        $jobtype = Jobtype::all();
        return $this->returnWithHearderData('welcome',[
            'jobtype' => $jobtype,
            'job_engineer' => $jobEngineer,
        ]);
    }

    public function index_find()
    {
        //
        $jobtype = Jobtype::all();
        return $this->returnWithHearderData('find',[
            'jobtype' => $jobtype,
        ]);
    }


    public function index_find_job()
    {
        //
        $jobtype = Jobtype::all();
        return $this->returnWithHearderData('find_job.find',[
            'jobtype' => $jobtype
        ]);
    }

    public function index_find_engineer()
    {
        //
        $jobtype = Jobtype::all();
        return $this->returnWithHearderData('find_engineer.find',[
            'jobtype' => $jobtype
        ]);
    }

    public function index_list_job($id)
    {
        //
        $jobtype = Jobtype::with('jobdetails')->where('id', $id)->get();
        return $this->returnWithHearderData('find_job.list_job',[
            'jobtype' => $jobtype
        ]);
    }

    public function index_content($id)
    {
        //
        $jobdetail = Jobdetail::find($id);
        return $this->returnWithHearderData('find_job.job_content',[
            'jobdetail' => $jobdetail,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apply(Request $request)
    {
        # code...
    }
}
