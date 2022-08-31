<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Portifolio;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(): Factory|View|Application
    {
      $projects = Portifolio::all();
      return view('index', [
        'projects' => $projects
      ]);
    }

    public function portfolio(int $id)
    {
      $project = Portifolio::find($id);
      dd($project);
      return \view('portfolio-details');
    }
}
