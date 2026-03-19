<?php

namespace App\Http\Controllers\website;

use App\Models\EmcManual;
use App\Models\VehiclePolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BudgetaryAuthority;
use App\Models\Crb;
use App\Models\EmcOfficerDetail;
use App\Models\EmcPpt;
use App\Models\EmcVariousCommunication;
use App\Models\FundAllocation;
use App\Models\GemEprocurement;

class EmcController extends Controller
{
    public function emc_officer(){
        // $perPage = 10;
        $senior= EmcOfficerDetail::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.emc_officer',compact('senior'));
    }

    public function fund_allocation(){
        // $perPage = 10;
        $senior= FundAllocation::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.fund_allocation',compact('senior'));
    }

    public function emc_ppt(){
        // $perPage = 10;
        $senior= EmcPpt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.emc_ppt',compact('senior'));
    }

    public function emc_manual(){
        // $perPage = 10;
        $senior= EmcManual::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.emc_manual',compact('senior'));
    }

    public function budgetary_authority(){
        // $perPage = 10;
        $senior= BudgetaryAuthority::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.budgetary_authority',compact('senior'));
    }

    public function gem_eprocurements(){
        // $perPage = 10;
        $senior= GemEprocurement::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.gem_eprocurements',compact('senior'));
    }

    public function vehicle_policy(){
        // $perPage = 10;
        $senior= VehiclePolicy::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.vehicle_policy',compact('senior'));
    }

    public function crb(){
        // $perPage = 10;
        $senior= Crb::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.crb',compact('senior'));
    }

    public function emc_communication(){
        // $perPage = 10;
        $senior= EmcVariousCommunication::orderBy('id', 'desc')->get();
        return view('Dghrd.website.emc.emc_communication',compact('senior'));
    }
}
