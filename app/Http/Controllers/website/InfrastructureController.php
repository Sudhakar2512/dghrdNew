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
use App\Models\CommonPdf;

class InfrastructureController extends Controller
{
    public function infra_officer(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= InfrastructureOfficerDetail::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.officer_detailes',compact('senior','common'));
    }

    public function instrustion(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= Instruction::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.instrustion',compact('senior','common'));
    }
    public function fast_track(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= FastTrack::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.fasttrack',compact('senior','common'));
    }
    public function infra_ppt(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= InfrastructurePpt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.ppt',compact('senior','common'));
    }

    public function infra_manual(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= InfrastructureManual::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.manual',compact('senior','common'));
    }

    public function asset_register(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= AssetRegister::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.asset_register',compact('senior','common'));
    }
    public function land_assets(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= LandAssets::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.land_assets',compact('senior','common'));
    }

    public function construction(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= Construction::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.construction',compact('senior','common'));
    }

    public function repair_maintainence(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= RepairMaintenance::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.repair_maintainence',compact('senior','common'));
    }

    public function ready_built(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= ReadyBuilt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.ready_built',compact('senior','common'));
    }
    public function hired_office(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= HiredOffice::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.hired_office',compact('senior','common'));
    }

    public function infra_various_communication(){
        // $perpage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior= VariousCommunication::orderBy('id', 'desc')->get();
        return view('Dghrd.website.infrastructure.infra_various_communication',compact('senior','common'));
    }
}
