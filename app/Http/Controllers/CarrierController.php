<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use Illuminate\Http\Request;
use App\Models\Banner;

class CarrierController extends Controller
{
    /**
     * Display a listing of the carriers.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banners = Banner::where('banner_key', 'carrier')
            ->first();

        $query = Carrier::query();

        // Apply type filter
        if ($request->has('type')) {
            $type = $request->input('type');
            switch ($type) {
                case 'full-time':
                    $query->fullTime();
                    break;
                case 'part-time':
                    $query->partTime();
                    break;
                case 'internship':
                    $query->internship();
                    break;
                case 'freelance':
                    $query->freelance();
                    break;
            }
        }

        // Apply location/city filter
        if ($request->has('city')) {
            $query->where('city', 'like', '%' . $request->input('city') . '%');
        }

        // Apply division filter
        if ($request->has('division')) {
            $query->where('division', 'like', '%' . $request->input('division') . '%');
        }

        // Get all available cities and divisions for filters
        $cities = Carrier::select('city')->distinct()->pluck('city');
        $divisions = Carrier::select('division')->distinct()->pluck('division');
        $types = ['full-time', 'part-time', 'internship', 'freelance'];

        // Get paginated results
        $carriers = $query->latest()->paginate(10);

        return view('career', compact('carriers', 'cities', 'divisions', 'types', 'banners'));
    }

    /**
     * Display the specified carrier.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrier = Carrier::findOrFail($id);

        return view('career-detail', compact('carrier'));
    }
}
