<?php

namespace App\Http\Controllers;
use App\Parse\GoogleNews;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getNews(){
		//$obj = new GoogleNews;
		//$obj->getParse();
		dd($_POST);
		if (isset($_COOKIE['lang'])) {
            if ($_COOKIE['lang'] == 'DEU') {
                $news = "";
            } elseif ($_COOKIE['lang'] == 'Rus') {
                $news = "новости";
            } else {
                $news = "news";

            }
        }
		return view('country',  compact('news'));
    }
}
