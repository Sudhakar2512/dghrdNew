<?php

namespace App\Http\Controllers\website;

use App\Models\Slider;
use App\Models\Gallery;
use App\Models\MiniSlider;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Suggestion;
use App\Models\HRCon;
use App\Models\Manas;
use App\Models\Regularization;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Models\Photo;
use App\Models\CommonPdf;

class IndexController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $mini = MiniSlider::all();
        // $gallery= Gallery::all();
        $gallery = Photo::all();
        $notification = Notification::all();
        return view('Dghrd.website.index', compact('slider', 'mini', 'gallery', 'notification'));
    }
    public function gallery()
    {
        $gallery = Gallery::all();

        return view('Dghrd.website.photo-gallery', compact('gallery'));
    }
    public function notification()
    {
        $notification = Notification::all();

        return view('Dghrd.website.notification', compact('notification'));
    }

    public function infrastructure_projects()
    {
        $senior = Project::all();

        return view('Dghrd.website.infrastructure_projects', compact('senior'));
    }

    public function index_page()
    {
        $slider = Slider::all();
        $mini = MiniSlider::all();
        $gallery = Gallery::orderBy('id', 'desc')->get();
        $notification = Notification::all();
        return view('Dghrd.website.index', compact('slider', 'mini', 'gallery', 'notification'));
    }

    public function manuals()
    {


        return view('Dghrd.website.manual');
    }

    public function suggestion()
    {


        return view('Dghrd.website.suggestion');
    }
    public function hrm1()
    {


        return view('Dghrd.website.hrm1');
    }
    public function hrm2()
    {


        return view('Dghrd.website.hrm2');
    }
    public function infra_emc()
    {


        return view('Dghrd.website.infra_emc');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'suggestions' => 'required|string',
            'g-recaptcha-response' => 'required',

        ]);

        // Create a new suggestion using the validated data
        $suggestion = Suggestion::create($validatedData);

        // You can optionally return a response, redirect, or perform any other action here
        return back()->with('success', 'Suggestion stored successfully');
    }

    public function rti()
    {
        return view('Dghrd.website.rti');
    }

    public function training()
    {
        return view('Dghrd.website.training');
    }


    public function gallery_album()
    {
        $gallery = Photo::all();
        return view('Dghrd.website.gallery_album', ['gallery' => $gallery]);
    }

    public function gallery_album_view($id)
    {
        $gallery = Photo::find($id);
        return view('Dghrd.website.gallery_album_detail', ['gallery' => $gallery]);
    }

    public function faq()
    {
        return view('Dghrd.website.faq');
    }
    
    public function HR_con()
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $hrcon = HRCon::orderBy('id', 'desc')->get();
        return view('Dghrd.website.HR-con', compact('hrcon','common'));
    }

    public function viewPdf()
    {
        $path = public_path('assets/Document/manas.pdf');

        if (!File::exists($path)) {
            abort(404, 'File not found.');
        }

        return response()->file($path);
    }

    public function regularization()
    {
        $common = CommonPdf::orderBy('id','desc')->get();
        $regularization = Regularization::orderBy('id', 'asc')->get();
        return view('Dghrd.website.regularization', ['regularization' => $regularization , 'common'=>$common]);
    }

    public function viewManas()
    {
        $pdf = Manas::orderBy('year', 'desc')->get();
        return view('Dghrd.website.manas', ['pdf' => $pdf]);
    }

    public function viewFlipbook()
    {
        return view('Dghrd.website.pdf-viewer');
    }

    public function Flipbook($id)
    {
        $pdf = Manas::findOrFail($id);
        return view('Dghrd.website.ebookshow', compact('pdf'));
    }
}
