<?php

namespace App\Imports;

use App\Models\HumanResource\Schedule;
use domain\Facades\AttendanceFacade;
use domain\Facades\ScheduleFacade;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AttendanceImport implements ToCollection, WithValidation, WithHeadingRow
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if ($row->filter()->isNotEmpty()) {;
                AttendanceFacade::make([
                    'employee_id'     => $this->getEmployee($row['schedule_id'])?->employee_id,
                    'schedule_id'    => $row['schedule_id'],
                    'check_in'    => $this->convertDateTimeFormat($row['check_in']),
                    'check_out'    => $this->convertDateTimeFormat($row['check_out']),
                ]);
            }
        }
    }
    
    /**
     * rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'schedule_id' => ['required', 'integer'],
            'check_in' => ['required'],
            'check_in' => ['required'],
        ];
    }

    /**
     * Get Employee
     *
     * @param  Int $employeeId
     * @return Schedule
     */
    public function getEmployee(Int $scheduleId): ?Schedule
    {
        return ScheduleFacade::get($scheduleId);
    }
    
    /**
     * Convert Date Time Format
     *
     * @param  mixed $date
     * @return void
     */
    public function convertDateTimeFormat($dateTime)
    {
        return \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($dateTime)->format('Y-m-d H:i:s');
    }
}
