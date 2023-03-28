<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \Torann\GeoIP\Facades\GeoIP;
use Datetime;
use DateTimeInterface;

class MomentumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // geolocalizzazione
        $coord = geoip()->getLocation();
        $latitudine = $coord->lat;
        $longitudine = $coord->lon;

        // timezone
        // Europe/Rome
        date_default_timezone_set('Europe/Rome');

        // Rapallo secondo geolocalizzazione
        // $latitude = 44.3538;
        // $longitude = 9.2436;

        $oggi = new Datetime("now");
        $tstamp = date_timestamp_get(new Datetime("now"));
        $datainfo = date_sun_info($tstamp, $latitudine, $longitudine);

        $sunrise = $datainfo['sunrise'];
        $sunset = $datainfo['sunset'];

        $giornosolare = $sunset - $sunrise;
        $orasolare = $giornosolare/12;
        $quattropuncta = $orasolare/4; 
        $dieciminuta = $orasolare/10;
        $momentum = $orasolare/40;


        $data = [
            'oggi' => $oggi->format("l d F o"),
            'latitudine' => $latitudine,
            'longitudine' => $longitudine,
            'alba' => gmdate("H:i:s", $sunrise),
            'tramonto' => gmdate("H:i:s", $sunset),
            'giornosolare' => gmdate("H:i:s", $giornosolare),
            'orasolare' => gmdate("H:i:s", $orasolare),
            'quattropuncta' => gmdate("i:s", $quattropuncta),
            'dieciminuta' => gmdate("i:s", $dieciminuta),
            'momentum' => gmdate("i:s", $momentum)
            ];

        return view('welcome', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
