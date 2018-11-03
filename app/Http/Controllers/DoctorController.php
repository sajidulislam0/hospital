<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class DoctorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    public function add_doctor() {
        $title = "Add new Doctor";
        return view('pages.add-doctor')->with('title', $title);
    }

    public function save_doctor(Request $request) {
        $data = array();
        $data['DOCTOR_NAME']         = $request->doctor_name;
        $data['DOCTOR_DESIGNATION']  = $request->designation;
        $data['DOCTOR_DEPARTMENT']   = $request->department;
        $data['DOCTOR_BIRTH_DATE']   = $request->birth_date;
        $data['DOCTOR_JOINING_DATE'] = $request->joining_date;
        $data['DOCTOR_INFORMATION']  = $request->message;

        DB::table('doctor_infos')->insert($data);
        return Redirect::to('/add-doctor');
    }

    public function view_doctor() {
        $title = "View Doctor";
        return view('pages.view-doctor')->with('title', $title);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
