<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttendanceDetailRequest;
use App\Http\Requests\CreateAttendanceRequest;
use App\Http\Resources\EmployeeDetail;
use App\Imports\AttendanceImport;
use domain\Facades\AttendanceFacade;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Create Attendance Records
     *
     * @param  mixed $request
     * @return void
     */
    public function createAttendance(CreateAttendanceRequest $request)
    {
        Excel::import(new AttendanceImport, $request['excel']);
        return response()->json('Attendance Excel Imported Successfully.', 200);
    }

    /**
     * Get Attendance Details
     *
     * @param  mixed $request
     * @return void
     */
    public function getAttendance(AttendanceDetailRequest $request)
    {
        return EmployeeDetail::collection(AttendanceFacade::getByEmployee($request['employee_id']));
    }

    /**
     * Get Attendance List
     *
     * @return void
     */
    public function attendanceList()
    {
        return EmployeeDetail::collection(AttendanceFacade::all());
    }
}
