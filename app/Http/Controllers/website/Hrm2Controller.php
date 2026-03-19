<?php

namespace App\Http\Controllers\website;

use App\Models\E_Dispostion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CivilList;
use App\Models\DpcModuleUpdate;
use App\Models\EmployeeCode;
use App\Models\EVacencyModuleUpdate;
use App\Models\HalfYearlyBrochure;
use App\Models\Hop;
use App\Models\HrmVariousCommunication;
use App\Models\IrsOfficer;
use App\Models\ModuleUpdate;
use App\Models\Policy;
use App\Models\PostingTransfer;
use App\Models\SanctionedWorking;
use App\Models\SwachhtaActionPlan;
use App\Models\TenderNotice;
use App\Models\CommonPdf;
use App\Models\VerifiedData;

class Hrm2Controller extends Controller
{
    public function posting_transfers(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= PostingTransfer::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.posting_transfers',compact('senior','common'));
    }

    public function e_diposition(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= E_Dispostion::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.e-diposition',compact('senior','common'));
    }
    public function sanctioned_working(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= SanctionedWorking::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.sanctioned-working',compact('senior','common'));
    }
    public function hop(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= Hop::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.hop',compact('senior','common'));
    }
    
    public function empolyee_code(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= EmployeeCode::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.empolyee_code',compact('senior','common'));
    }
    
    public function swachhta($tab)
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $sparrowContent = SwachhtaActionPlan::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.swachhta', compact('sparrowContent','tab','common'));
    }

    public function v_communication()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = HrmVariousCommunication::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.various_communication', compact('senior','common'));
    }
    
    public function tender_notice(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= TenderNotice::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.tender_notice',compact('senior','common'));
    }

    public function verified($tab)
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $sparrowContent = VerifiedData::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.verified_data', compact('sparrowContent','tab','common'));
    }
    public function module_updates(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= ModuleUpdate::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.module_updates',compact('senior','common'));
    }

    public function irs_officer(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= IrsOfficer::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.irs_officers',compact('senior','common'));
    }

    public function e_vacency(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= EVacencyModuleUpdate::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.e_vacency',compact('senior','common'));
    }

    public function civil_list(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= CivilList::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.civil_list',compact('senior','common'));
    }

    public function half_yearly_brochure(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= HalfYearlyBrochure::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.half_yearly_brochure',compact('senior','common'));
    }
    public function dpc_module(){
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= DpcModuleUpdate::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.dpc_module',compact('senior','common'));
    }

    public function policy($tab)
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $sparrowContent = Policy::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm2.policy', compact('sparrowContent','tab','common'));
    }
}
