<?php

namespace App\Http\Controllers\website;

use App\Models\InfrastructureManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssetRegister;
use App\Models\Construction;
use App\Models\FastTrack;
use App\Models\HiredOffice;
use App\Models\InfrastructureOfficerDetail;
use App\Models\InfrastructurePpt;
use App\Models\Instruction;
use App\Models\LandAssets;
use App\Models\ReadyBuilt;
use App\Models\RepairMaintenance;
use App\Models\VariousCommunication;

class InfrastructureController extends Controller
{
    public function infra_officer(){
        // $perpage = 10;
        $senior= InfrastructureOfficerDetail::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.officer_detailes',compact('senior'));
    }

    public function instrustion(){
        // $perpage = 10;
        $senior= Instruction::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.instrustion',compact('senior'));
    }
    public function fast_track(){
        // $perpage = 10;
        $senior= FastTrack::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.fasttrack',compact('senior'));
    }
    public function infra_ppt(){
        // $perpage = 10;
        $senior= InfrastructurePpt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.ppt',compact('senior'));
    }

    public function infra_manual(){
        // $perpage = 10;
        $senior= InfrastructureManual::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.manual',compact('senior'));
    }

    public function asset_register(){
        // $perpage = 10;
        $senior= AssetRegister::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.asset_register',compact('senior'));
    }
    public function land_assets(){
        // $perpage = 10;
        $senior= LandAssets::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.land_assets',compact('senior'));
    }

    public function construction(){
        // $perpage = 10;
        $senior= Construction::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.construction',compact('senior'));
    }

    public function repair_maintainence(){
        // $perpage = 10;
        $senior= RepairMaintenance::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.repair_maintainence',compact('senior'));
    }

    public function ready_built(){
        // $perpage = 10;
        $senior= ReadyBuilt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.ready_built',compact('senior'));
    }
    public function hired_office(){
        // $perpage = 10;
        $senior= HiredOffice::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.hired_office',compact('senior'));
    }

    public function infra_various_communication(){
        // $perpage = 10;
        $senior= VariousCommunication::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.infra_various_communication',compact('senior'));
    }
}
