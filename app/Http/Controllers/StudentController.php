<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index()
    {
        $eachYearTotal=[];
        $years = [];
        $totalYearTotal = [];
        $totalMalePerYear = [];
        $totalFemalePerYear = [];

        $yearData = [];

        for($i= 2014; $i <= date('Y'); $i++){
            array_push($years,$i);
            $eachYearTotal = Student::where('yearAdmitted', $i)->count();
            array_push($totalYearTotal, $eachYearTotal);

            $Male = Student::where('gender', 'MALE')
                ->where('yearAdmitted', $i)->count();
            array_push($totalMalePerYear, $Male);

            $Female = Student::where('gender', 'FEMALE')
                ->where('yearAdmitted', $i)->count();
            array_push($totalFemalePerYear, $Female);

            array_push($yearData, $i);

        }


        $TotalStudent = Student::whereBetween('yearAdmitted', [$years[0], $years[count($years )-1]])->count();

        return view('chart')
            ->with('totalYearTotal', $totalYearTotal)
            ->with('totalMalePerYear', $totalMalePerYear)
            ->with('totalFemalePerYear', $totalFemalePerYear)
            ->with('yearData', $yearData);
    }
}
