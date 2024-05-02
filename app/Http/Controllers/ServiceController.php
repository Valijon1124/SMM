<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Requests\SaveServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderby('id','desc')->get();
        return view('admin.services.index',[
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();
        return view('admin.services.form',[
            'service' => $service
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveServiceRequest $request,Service $service)
    {
        $img = time().'.jpg';
        $path = 'img/service/';
        $request->img->move($path, $img);

        $service->create([
            'title' => $request['title'],
            'description' => $request['description'],
            'img' => $img
        ]);

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.form',[
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(SaveServiceRequest $request, Service $service)
    {
        if ($request->img == NULL) $img = $service->img;
        else {
            File::delete(public_path('img/service/'.$service->img));
            $img = time().'.jpg';
            $path = 'img/service/';
            $request->img->move($path, $img);
        }

        $service->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'img'=>$img
            ]);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $img=$service->img;
        if (File::exists(public_path('img/service/'.$img))){
            File::delete(public_path('img/service/'.$img));
        }
        $service->delete();
        return  redirect()->route('services.index');
    }
}
