<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\FunFact;
use App\Models\Service;
use App\Models\Equipment;
use App\Models\Insurance;
use Illuminate\View\View;
use App\Models\Admin\About;
use App\Models\Admin\Contact;
use App\Models\MissionVision;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(): View
    {
        $sliders = Slider::orderBy("created_at", "desc")->get();
        return view('frontend.index', [
            'sliders' => $sliders
        ]);
    }

    public function services(string $slug): View|Response
    {
        $service = Service::where('slug', $slug)->first();

        if (!$service) {
            abort(404);
        }

        return view('frontend.service', [
            'service' => $service,
        ]);
    }

    public function equipments(string $slug): View|Response
    {
        $equipment = Equipment::where('slug', $slug)->first();
        if (!$equipment) {
            abort(404);
        }

        return view('frontend.equipment', [
            'equipment' => $equipment,
        ]);
    }

    public function contact(): View|Response
    {
        $contact = Contact::first();
        if (!$contact) {
            abort(404);
        }

        return view('frontend.contact', [
            'contact' => $contact,
        ]);
    }

    public function insurance(): View|Response
    {
        $insurances = Insurance::all();
        if (!$insurances) {
            abort(404);
        }

        return view('frontend.insurance', [
            'insurances' => $insurances,
        ]);
    }


    public function about(): View|Response
    {
        $about = About::first();
        $missionvisions = MissionVision::all();
        $funfacts = FunFact::all();
        if (!$about) {
            abort(404);
        }

        return view('frontend.about-us', [
            'about' => $about,
            'missionvisions' => $missionvisions,
            'funfacts' => $funfacts,
        ]);
    }



}
