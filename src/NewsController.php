<?php
namespace Procivam\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class NewsController extends Controller
{
    public function index()
    {
        try {
            $news = News::where('status', 1)->get();
        } catch (\Exception $e) {
            return 'DB: ' . $e->getMessage();
        }

        return view('news::index', ['news' => $news]);
    }
}
