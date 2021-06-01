<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\News;
use App\Models\news_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('user_id', Auth::id())->paginate(25);
        return view('content', compact('news'));
    }

    public function addNews(Request $request)
    {

        $coms = Company::paginate(25);
        return view('add_news', compact('coms'));
    }

    public function saveNews(Request $request)
    {
        $request->validate([
            'title'   => 'required',
            'summary'    => 'required',
            'language'    => 'required',
            'url'    => 'required',
            'image'    => 'required|image|max:1024',
            'companies'    => 'required',
        ]);
        $logofile = '';
        if ($request->hasFile('image')) {
            $logo      = $request->file('image');
            $logo_name = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
            $logo_path = 'uploads/' . date('y/m/');
            $logo->move($logo_path, $logo_name);
            $logofile = asset($logo_path . $logo_name);
        }

        $news = new News();
        $news->user_id = Auth::id();
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->language = $request->language;
        $news->url = $request->url;
        $news->image = $logofile;

        if($news->save()){
            $coms = $request->companies;
            foreach ($coms as $c_id){
                $newscom = new news_company();
                $newscom->company_id = $c_id;
                $newscom->news_id = $news->id;
                $newscom->save();
            }

        }
        return response()->json('News Added Successfully.');
    }

}
