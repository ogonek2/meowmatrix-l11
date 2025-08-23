<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch application language
     *
     * @param Request $request
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage(Request $request, $locale)
    {
        // Validate locale
        if (!in_array($locale, ['uk', 'en'])) {
            abort(404);
        }
        
        // Store locale in session
        Session::put('locale', $locale);
        
        // Redirect back to previous page
        return redirect()->back();
    }
}
