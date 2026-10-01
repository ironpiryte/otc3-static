<?php

namespace App\Http\Controllers;
use App\Services\CyberNewsService;
use App\Services\CyberJobsService;

class HomeController extends Controller
{
    public function index(CyberNewsService $cyberNewsService, CyberJobsService $cyberJobsService)
    {
        $news = $cyberNewsService->getNews();
        $jobs = $cyberJobsService->getJobs();

        return view('welcome', compact('news', 'jobs'));
    }
}
