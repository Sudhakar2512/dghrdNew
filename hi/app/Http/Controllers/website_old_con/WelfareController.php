<?php

namespace App\Http\Controllers\website;

use App\Models\CommanFacility;
use App\Models\WelfareManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ActionPlan;
use App\Models\Compendium;
use App\Models\Covid19;
use App\Models\GuestHouse;
use App\Models\HotelDraft;
use App\Models\HotelTieup;
use App\Models\Scheme;
use App\Models\WelfareOfficer;
use App\Models\WelfarePpt;
use App\Models\WelfareProposel;
use App\Models\WelfareScheme;
use App\Models\WelfareVariousCommuniction;

class WelfareController extends Controller
{

    public function welfare_officer(){
        // $perPage = 10;
        $senior= WelfareOfficer::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.officer_detailes',compact('senior'));
    }

    public function compendium(){
        // $perPage = 10;
        $senior= Compendium::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.compendium',compact('senior'));
    }
    public function welfare_schems(){
        // $perPage = 10;
        $senior= WelfareScheme::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.poster',compact('senior'));
    }
    public function action_plan(){
        // $perPage = 10;
        $senior= ActionPlan::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.action_plan',compact('senior'));
    }

    public function schemes(){
        // $perPage = 10;
        $senior= Scheme::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.schemes',compact('senior'));
    }

    public function welfare_ppt(){
        // $perPage = 10;
        $senior= WelfarePpt::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.welfare_ppt',compact('senior'));
    }


    public function welfare_manual(){
        // $perPage = 10;
        $senior= WelfareManual::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.welfare_manual',compact('senior'));
    }

    public function comman_facilities(){
        // $perPage = 10;
        $senior= CommanFacility::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.comman_facilities',compact('senior'));
    }

    public function tie_up(){
        // $perPage = 10;
        $senior= HotelTieup::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.tie_up',compact('senior'));
    }

    public function draft(){
        // $perPage = 10;
        $senior= HotelDraft::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.draft',compact('senior'));
    }

    public function guest_house(){
        // $perPage = 10;
        $senior= GuestHouse::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.guest_house',compact('senior'));
    }

    public function covid(){
        // $perPage = 10;
        $senior= Covid19::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.covid',compact('senior'));
    }

    public function welfare_praposals(){
        // $perPage = 10;
        $senior= WelfareProposel::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.welfare_praposals',compact('senior'));
    }

    public function welfare_communication(){
        // $perPage = 10;
        $senior= WelfareVariousCommuniction::orderBy('id', 'desc')->get();
        return view('Dghrd.website.welfare.welfare_communication',compact('senior'));
    }


}
