<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class JournalController
{

    public static function warmDate($date)
    {
        // Get the system timezone dynamically
        $systemTimezone = date_default_timezone_get();
    
        return Carbon::parse($date)
            ->timezone($systemTimezone)
            ->isoFormat('dddd Do MMMM YYYY');
    }

    public static function SubmitMusing(Request $request) {
        try {
            $journal = new Journal;
            $journal->entry_title = $request->get('journal-title');
            $journal->entry_body = $request->get('journal-content');
            $journal->save();
        } catch (Exception $e) {
            Log::info($e);
        }
        return redirect()->route('displayMyMusingsPage');
    }

    public static function DisplayMyMusingsPage() {

        $musings = DB::table('journal')->get();
        // Format the date for each musing
        if ($musings) {
            $musings = $musings->map(function ($musing) {
                $musing->date_title = self::warmDate($musing->created_at);
                return $musing;
            });
        }


        $page_data = [
            'musings' => $musings ?? []
        ];
        return view('pages.my-musings', $page_data);
    }

    public static function DisplayEditMyMusingPage() {
        return view('pages.edit-musing');
    }
}
