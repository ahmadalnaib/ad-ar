<?php

namespace App\Http\Controllers;

use App\Repositories\Ads\AdInterface;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    protected $ads;
    
    public function __construct(AdInterface $ad)
    {
        $this->ads=$ad;
    }

    public function all()
    {
        $ads=$this->ads->all();
    }

    public function create()
    {
        return view('ads.create');
    }

}
