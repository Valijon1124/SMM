<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $services = Service::orderby('created_at', 'DESC')->get();
        $networks = Network::orderby('created_at', 'DESC')->get();
        return view('front.index', compact('services', 'networks'));
    }

    public function service(){
        $services = Service::orderby('created_at', 'DESC')->get();
        return view('front.services', compact('services'));
    }

    public function single($id){
        $service = Service::FindOrFail($id);
        return view('front.single', compact('service'));
    }

    public function contact(){
        return view('front.contact');
    }
}
