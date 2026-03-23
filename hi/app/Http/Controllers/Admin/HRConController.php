<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HRCon;

use Illuminate\Http\Request;

class HRConController extends Controller
{
    public function hr_con($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = HRCon::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = HRCon::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Home.hr_con', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function hr_conference_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
            'title' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage(public_path('Admin/Pdf'), '', $request->file('pdf'));
        }
        $data = HRCon::create([
            'title' => $request->title,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-hr_conference'))->with(['success' => 'HR Conference uploaded Successfully']);
    }

    public function hr_conference_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,xlsx,xls,csv,txt,rtf,png,jpg,jpeg,odt,ods,pptx,ppt,gif",
            'title' => "required"
        ]);
        $data = HRCon::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage(public_path('Admin/Pdf'), '', $request->file('pdf'));
        }
        $data->title = $request->title;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-hr_conference'))->with(['success' => 'HR Conference updated Successfully']);
    }

    public function hr_conference_delete($id)
    {
        $data = HRCon::where('id', $id)->delete();
        return redirect(url('add-hr_conference'))->with(['error' => 'HR Conference deleted successfully']);
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
