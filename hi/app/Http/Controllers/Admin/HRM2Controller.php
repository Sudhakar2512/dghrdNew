<?php

namespace App\Http\Controllers\Admin;

use App\Models\CivilList;
use App\Models\Hop;
use App\Models\Policy;
use App\Models\IrsOfficer;
use App\Models\E_Dispostion;
use App\Models\EmployeeCode;
use App\Models\ModuleUpdate;
use App\Models\TenderNotice;
use App\Models\VerifiedData;
use Illuminate\Http\Request;
use App\Models\DpcModuleUpdate;
use App\Models\PostingTransfer;
use App\Models\SanctionedWorking;
use App\Models\SwachhtaActionPlan;
use App\Http\Controllers\Controller;
use App\Models\EVacencyModuleUpdate;
use App\Models\HalfYearlyBrochure;
use App\Models\HrmVariousCommunication;

class HRM2Controller extends Controller
{
     public function posting_transfer_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = PostingTransfer::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = PostingTransfer::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM2.PostingTransfer', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function posting_transfer_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = PostingTransfer::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-posting-transfer'))->with(['success' => 'Posting & Transfer data uploaded Successfully']);
    }

    public function posting_transfer_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
            'tittle' => "required"
        ]);
        $data = PostingTransfer::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-posting-transfer'))->with(['success' => 'Posting & Transfer data Updated Successfully']);
    }

    public function posting_transfer_delete($id)
    {
        $data = PostingTransfer::where('id', $id)->delete();
        return redirect(url('add-posting-transfer'))->with(['error' => 'Posting & Transfer data deleted successfully']);
    }


#e_dispostion
public function e_diposition_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = E_Dispostion::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = E_Dispostion::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.E_Dispostion', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function e_diposition_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = E_Dispostion::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-e-diposition-list'))->with(['success' => 'e-Disposition List data uploaded Successfully']);
}

public function e_diposition_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = E_Dispostion::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-e-diposition-list'))->with(['success' => 'e-Disposition List data Updated Successfully']);
}

public function e_diposition_delete($id)
{
    $data = E_Dispostion::where('id', $id)->delete();
    return redirect(url('add-e-diposition-list'))->with(['error' => 'e-Disposition List data deleted successfully']);
}

#Sanctioned and Working Strength of Group A IRS (C&IT) Officers

public function sanctioned_working_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = SanctionedWorking::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = SanctionedWorking::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.SanctionedWorking', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function sanctioned_working_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = SanctionedWorking::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-sanctioned-working'))->with(['success' => 'Sanctioned Workings data uploaded Successfully']);
}

public function sanctioned_working_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = SanctionedWorking::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-sanctioned-working'))->with(['success' => 'Sanctioned Workings data Updated Successfully']);
}

public function sanctioned_working_delete($id)
{
    $data = SanctionedWorking::where('id', $id)->delete();
    return redirect(url('add-sanctioned-working'))->with(['error' => 'Sanctioned Workings data deleted successfully']);
}

#HOP
public function hop_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Hop::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Hop::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.HOP', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function hop_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = Hop::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-hop'))->with(['success' => 'HOPs data uploaded Successfully']);
}

public function hop_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = Hop::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-hop'))->with(['success' => 'HOPs data Updated Successfully']);
}

public function hop_delete($id)
{
    $data = Hop::where('id', $id)->delete();
    return redirect(url('add-hop'))->with(['error' => 'HOPs data deleted successfully']);
}



#employee Codes

public function employee_code_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = EmployeeCode::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = EmployeeCode::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.Employee_code', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function employee_code_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = EmployeeCode::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-empolyee_code'))->with(['success' => 'Employee Code data uploaded Successfully']);
}

public function employee_code_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = EmployeeCode::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-empolyee_code'))->with(['success' => 'Employee Code data Updated Successfully']);
}

public function employee_code_delete($id)
{
    $data = EmployeeCode::where('id', $id)->delete();
    return redirect(url('add-empolyee_code'))->with(['error' => 'Employee Code data deleted successfully']);
}


#Various communicationwith fiels formation

public function communication_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = HrmVariousCommunication::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = HrmVariousCommunication::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.various_communication', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function communication_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = HrmVariousCommunication::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-various_communication'))->with(['success' => 'Various Communications data uploaded Successfully']);
}

public function communication_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = HrmVariousCommunication::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-various_communication'))->with(['success' => 'Various Communications data Updated Successfully']);
}

public function communication_delete($id)
{
    $data = HrmVariousCommunication::where('id', $id)->delete();
    return redirect(url('add-various_communication'))->with(['error' => 'Various Communications data deleted successfully']);
}



#Tender Notice

public function tender_notice_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = TenderNotice::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = TenderNotice::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.tender_notice', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function tender_notice_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = TenderNotice::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-tender_notice'))->with(['success' => 'Tender Notices Data uploaded Successfully']);
}

public function tender_notice_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = TenderNotice::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-tender_notice'))->with(['success' => 'Tender Notices Data Updated Successfully']);
}

public function tender_notice_delete($id)
{
    $data = TenderNotice::where('id', $id)->delete();
    return redirect(url('add-tender_notice'))->with(['error' => 'Tender Notices Data deleted successfully']);
}

#Group B & C Module updates

public function module_updates_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = ModuleUpdate::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = ModuleUpdate::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.module_update', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function module_updates_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = ModuleUpdate::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-module_update'))->with(['success' => 'Module Updates data uploaded Successfully']);
}

public function module_updates_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = ModuleUpdate::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-module_update'))->with(['success' => 'Module Updates data Updated Successfully']);
}

public function module_updates_delete($id)
{
    $data = ModuleUpdate::where('id', $id)->delete();
    return redirect(url('add-module_update'))->with(['error' => 'Module Updates data deleted successfully']);
}


#Group A IRS (C&IT) Officers on Deputation

public function irs_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = IrsOfficer::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = IrsOfficer::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.irs_officer', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function irs_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = IrsOfficer::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-irs'))->with(['success' => 'Group A IRS (C&IT) Officers data uploaded Successfully']);
}

public function irs_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = IrsOfficer::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-irs'))->with(['success' => 'Group A IRS (C&IT) Officers data Updated Successfully']);
}

public function irs_delete($id)
{
    $data = IrsOfficer::where('id', $id)->delete();
    return redirect(url('add-irs'))->with(['error' => 'Group A IRS (C&IT) Officers data deleted successfully']);
}


# E vacency Module Update

public function e_vacency_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = EVacencyModuleUpdate::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = EVacencyModuleUpdate::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.add-e_vacency', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function e_vacency_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = EVacencyModuleUpdate::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-e_vacency'))->with(['success' => 'e-Vacancy Module Updates uploaded Successfully']);
}

public function e_vacency_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = EVacencyModuleUpdate::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-e_vacency'))->with(['success' => 'e-Vacancy Module Updates Updated Successfully']);
}

public function e_vacency_delete($id)
{
    $data = EVacencyModuleUpdate::where('id', $id)->delete();
    return redirect(url('add-e_vacency'))->with(['error' => 'e-Vacancy Module Updates deleted successfully']);
}

# Dpc Module Update

public function dpc_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = DpcModuleUpdate::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = DpcModuleUpdate::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.add-dpc_module', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function dpc_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = DpcModuleUpdate::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-dpc'))->with(['success' => 'DPCs data uploaded Successfully']);
}

public function dpc_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = DpcModuleUpdate::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-dpc'))->with(['success' => 'DPCs data Updated Successfully']);
}

public function dpc_delete($id)
{
    $data = DpcModuleUpdate::where('id', $id)->delete();
    return redirect(url('add-dpc'))->with(['error' => 'DPCs data deleted successfully']);
}




#swachhta action plan

public function swachhta_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = SwachhtaActionPlan::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = SwachhtaActionPlan::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.add-swachhta', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function swachhta_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = SwachhtaActionPlan::create([
        'tab' => $request->tab,
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-swachhta'))->with(['success' => 'Swachhta Action Plans data uploaded Successfully']);
}

public function swachhta_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
    ]);
    $data = SwachhtaActionPlan::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tab = $request->tab;
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-swachhta'))->with(['success' => 'Swachhta Action Plans data uploaded Successfully']);
}

public function swachhta_delete($id)
{
    $data = SwachhtaActionPlan::where('id', $id)->delete();
     return redirect(url('add-swachhta'))->with(['error' => 'Swachhta Action Plans data deleted successfully']);
}





#Verified Data

public function verified_data_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = VerifiedData::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = VerifiedData::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.add-verified_data', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function verified_data_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = VerifiedData::create([
        'tab' => $request->tab,
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-verified_data'))->with(['success' => 'Verified data uploaded Successfully']);
}

public function verified_data_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
    ]);
    $data = VerifiedData::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tab = $request->tab;
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-verified_data'))->with(['success' => 'Verified data uploaded Successfully']);
}

public function verified_data_delete($id)
{
    $data = VerifiedData::where('id', $id)->delete();
     return redirect(url('add-verified_data'))->with(['error' => 'Verified data deleted successfully']);
}





#Policy

public function policy_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Policy::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Policy::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.add-policy', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function policy_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = Policy::create([
        'tab' => $request->tab,
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-policy'))->with(['success' => 'Policies data uploaded Successfully']);
}

public function policy_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
    ]);
    $data = Policy::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tab = $request->tab;
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-policy'))->with(['success' => 'Policies data uploaded Successfully']);
}

public function policy_delete($id)
{
    $data = Policy::where('id', $id)->delete();
     return redirect(url('add-policy'))->with(['error' => 'Policies data deleted successfully']);
}


public function civil_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = CivilList::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = CivilList::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.civil', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function civil_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = CivilList::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-civil'))->with(['success' => 'Civil Lists data uploaded Successfully']);
}

public function civil_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = CivilList::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-civil'))->with(['success' => 'Civil Lists data Updated Successfully']);
}

public function civil_delete($id)
{
    $data = CivilList::where('id', $id)->delete();
    return redirect(url('add-civil'))->with(['error' => 'Civil Lists data deleted successfully']);
}



public function half_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = HalfYearlyBrochure::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = HalfYearlyBrochure::where('id', $id)->first();
    }
    return view('Dghrd.Admin.HRM2.half', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function half_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = HalfYearlyBrochure::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-half'))->with(['success' => 'Brouchers data uploaded Successfully']);
}

public function half_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
        'tittle' => "required"
    ]);
    $data = HalfYearlyBrochure::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-half'))->with(['success' => 'Brouchers data Updated Successfully']);
}

public function half_delete($id)
{
    $data = HalfYearlyBrochure::where('id', $id)->delete();
    return redirect(url('add-half'))->with(['error' => 'Brouchers data deleted successfully']);
}






    #upload function
    public function UploadImage($storage, $path, $image)
    {

        if (count(array($image)) > 0) {
            $new_name_of_profile_photo = uniqid('', true) . "." . $image->getClientOriginalExtension();
            $image->move($storage, $new_name_of_profile_photo);
            return $path . '/' . $new_name_of_profile_photo;
        } else {
        }
    }
}
