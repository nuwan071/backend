<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeDetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'employee_name' => $this->employee->first_name. ' ' .$this->employee->last_name,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'total_working_hours' => $this->totalWorkingHours(),
        ];
    }
    
    /**
     * Total Working Hours
     *
     * @return void
     */
    public function totalWorkingHours()
    {
        $checkIn = Carbon::parse($this->check_in);
        $checkOut = Carbon::parse($this->check_out);
        //Calculate total hours
        $hours = $checkIn->diff($checkOut)->format('%H');

        return $hours;
    }
}
