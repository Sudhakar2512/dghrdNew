<?php

namespace App\Http\Controllers\website;

use App\Models\Sparrow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apar;
use App\Models\CadreRestructuring2018;
use App\Models\DPC;
use App\Models\EmpanelmentDeputation;
use App\Models\OfficerDetails;
use App\Models\RecruitmentRules;
use App\Models\SeniorityList;
use App\Models\SparrowCBIC;
use App\Models\IPR;
use App\Models\Rajyabhasha;
use App\Models\CommonPdf;
use App\Models\VariousCommunicationFieldFormations;

class Hrm1Controller extends Controller
{
    public function online_writing()
    {
        return view('Dghrd.website.online-writing-apar');
    }

    public function help_desk()
    {
        return view('Dghrd.website.sparrow-help-desk');
    }
    
    public function showSparrowContent($tab)
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $sparrowContent = Sparrow::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.sparrow', compact('sparrowContent', 'tab' , 'common'));
    }


    public function apar_missing()
    {
        // Specify the number of items per page (e.g., 10 items per page)
        // $perPage = 10;

        // Fetch paginated Apar data ordered by the 'date' column in descending order
        $common = CommonPdf::orderBy('id','desc')->get();
        $apar = Apar::orderBy('id', 'desc')->get();
        // Pass the paginated data to the view
        return view('Dghrd.website.hrm1.missing_apar', compact('apar','common'));
    }


    public function ipr()
    {
        // $perPage = 10;
        // Fetch paginated Apar data ordered by the 'date' column in descending order
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = IPR::orderBy('id', 'desc')->get();
        // Pass the paginated data to the view
        return view('Dghrd.website.hrm1.ipr', compact('senior','common'));
    }

    public function group_a($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'group_a';
        // Add pagination and order by 'id'
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get(); // Adjust the number of items per page as needed
        return view('Dghrd.website.hrm1.group_a', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }


    public function group_b($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'group_b';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get(); // Adjust the number of items per page as needed
        return view('Dghrd.website.hrm1.group_b', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }
    
    public function group_c($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'group_c';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.group_c', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }

    public function canteen($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'canteen_staff';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.canteen', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }
    
    public function cbn($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'cbn';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.cbn', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }
    
    public function crcl($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'crcl';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.crcl', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }

    public function dgpm($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'dgpm';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.dgpm', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }

    public function dol($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'directorate_of_logistics';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.director', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }

    public function dppr($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'dppr';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.dppr', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }
    
    public function dri($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'dri';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.dri', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }
    
    public function rrs_of_directorates($subTabId)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $tabName = 'rrs_of_directorates';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
            ->where('sub_tab', $subTabId)
            ->orderBy('id', 'desc') // You can change 'asc' to 'desc' if you want descending order
            ->get();
        return view('Dghrd.website.hrm1.rrs_of_directorates', compact('recruitmentRules', 'tabName', 'subTabId','common'));
    }

    public function telecommunication($tab)
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        // $perPage = 10;
        $sparrowContent = RecruitmentRules::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.telecommunication', compact('sparrowContent', 'tab','common'));
    }


    public function seniorty_list()
    {
        // $perPage = 10;
        // $senior= SeniorityList::orderBy('id', 'desc')->paginate($perPage);
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = SeniorityList::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.seniorty_list', compact('senior','common'));
    }

    public function dpc($tab)
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $dpc = DPC::where('tab', $tab)->orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.dpc', compact('dpc', 'tab','common'));
    }

    public function empanelment_deputation()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = EmpanelmentDeputation::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.empanelment_deputation', compact('senior','common'));
    }

    public function cadre_restructuring()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = CadreRestructuring2018::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.cadre_restructuring', compact('senior','common'));
    }

    public function cbic()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = SparrowCBIC::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.sparrow_cbic', compact('senior','common'));
    }

    public function officer_detailes()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = OfficerDetails::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.officer_detailes', compact('senior','common'));
    }

    public function various()
    {
        // $perPage = 10;
        $common = CommonPdf::orderBy('id','desc')->get();
        $senior = VariousCommunicationFieldFormations::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.various_communication', compact('senior','common'));
    }
    
    public function bhasha()
    {
        // $perPage = 10;
        $senior = Rajyabhasha::orderBy('id', 'desc')->get();
        return view('Dghrd.website.hrm1.rajyabhasha', compact('senior'));
    }
    
}
