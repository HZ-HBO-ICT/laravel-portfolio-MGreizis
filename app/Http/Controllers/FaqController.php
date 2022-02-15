<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Faq;

class FaqController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
            //'faq' => Faq::all()
            return view('faq', ['faq' => Faq::all()]);
    }
}
