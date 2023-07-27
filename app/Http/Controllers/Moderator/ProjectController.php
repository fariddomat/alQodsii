<?php


namespace App\Http\Controllers\Moderator;

use Mail;
use App\Models\Apartment;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Facility;
use App\Models\LogSystem;
use App\Models\ProjectImage;
use App\Promoter;
use App\Models\Propertie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('sort_id', 'asc')->whenSearch(request()->search)
            ->paginate(30);
        return view('moderator.projects.index', compact('projects'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {}

   
}
