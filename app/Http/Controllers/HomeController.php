<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Fungsionaris;
use App\Jabatan;
use App\Period;
use App\Newsfeed;
use App\Oprec;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use App\Guest;

class HomeController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function show($id)
    {
        $news_sidebar = Newsfeed::latest()->get();
        $news = Newsfeed::find($id);

        return view('detail_berita',compact('news','news_sidebar'));
    }

    public function listBerita()
    {
        $news_sidebar = Newsfeed::latest()->get();
        $news = Newsfeed::latest()->paginate(1);
        return view('list_berita', compact('news','news_sidebar'));
    }

    public function comingSoon()
    {
        return view('coming_soon');
    }

    public function showFungsionaris()
    {
        $period = Period::find(1);
        $period_awal=$period->period_awal;
        $period_akhir=$period->period_akhir;
        $fungsionariss = Fungsionaris::with('jabatan')->where('periode_awal',$period_awal)
        ->where('periode_akhir',$period_akhir)->orderBy('jabatan_id', 'asc')->paginate(10);
        return view('list_fungsionaris', compact('fungsionariss'));
    }
    public function notFound()
    {
        return view('404_not_found');
    }
}
