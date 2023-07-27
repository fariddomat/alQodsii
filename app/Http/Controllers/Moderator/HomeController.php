<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LogSystem;
use App\Models\ProfileDownload;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories=Category::count();
        $projects=Project::count();
        $pcounter=ProfileDownload::find(1);
        $counter=0;
        if ($pcounter) {
            $counter=$pcounter->count;
        }

        $logs=LogSystem::latest()->take(5)->get();
        return view('moderator.index', compact('categories', 'projects', 'counter', 'logs'));
    }
}
