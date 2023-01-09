<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutDesign;

class TutController extends Controller
{
    public function get_meta($meta_key)
    {
        $meta = TutDesign::where('meta_key', $meta_key)->first();
        if($meta == null)
        {
            return null;
        } else {
            return $meta->meta_value;
        }        
    }
}
