<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnounceStatusController extends Controller
{

public function index()
{
    return view('admin.Announcement.StatusAnnounce');
}

public function edit($id)
{
    $announcement = Announcement::findOrFail($id);
    return view('admin.Announcement.StatusAnnounce',compact('announcement'));
}

public function UpdateStatus(Request $request,Announcement $announcement)
{

dd($request);
    $data = $request->validate([
        'announcestatus' => 'required|in:rejected,accepted,pending',
    ]);
    $announcement->update($data);
    // dd($announcement);
    return view('admin.Announcement.StatusAnnounce',compact('announcement'));

}




}
