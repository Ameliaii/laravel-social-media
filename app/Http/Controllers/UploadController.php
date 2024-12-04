<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if the user is a super account, and fetch uploads accordingly
        $uploads = auth()->user()->is_super
            ? Upload::with('user')->latest()->get() // Super accounts can see all uploads
            : Upload::where('user_id', auth()->id())->latest()->get(); // Regular accounts see their own uploads only

        return view('uploads.index', ['uploads' => $uploads]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'upload' => 'required|file|mimes:jpg,jpeg,png,gif,pdf,docx|max:2048', // Restrict file types and size
        ]);

        $upload = new Upload;
        $upload->title = $request->input('title');
        $upload->content = $request->input('content');
        $upload->mimeType = $request->file('upload')->getMimeType();
        $upload->originalName = $request->file('upload')->getClientOriginalName();
        $upload->path = $request->file('upload')->store('uploads');
        $upload->user_id = auth()->id();
        $upload->save();

        return view('uploads.create', [
            'id' => $upload->id,
            'path' => $upload->path,
            'originalName' => $upload->originalName,
            'mimeType' => $upload->mimeType,
            'title' => $upload->title,
            'content' => $upload->content,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @param  string $originalName
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload, $originalName = '')
    {
        // Ensure the user can only view their own file or the super account can view all files
        if (!auth()->user()->is_super && $upload->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return response()->file(storage_path('app/' . $upload->path));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        // Ensure the user can only edit their own file or the super account can edit all files
        if (!auth()->user()->is_super && $upload->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('uploads.edit', [
            'id' => $upload->id,
            'path' => $upload->path,
            'originalName' => $upload->originalName,
            'mimeType' => $upload->mimeType,
            'title' => $upload->title,
            'content' => $upload->content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'upload' => 'nullable|file|mimes:jpg,jpeg,png,gif,pdf,docx|max:2048', // Restrict file types and size
        ]);

        // Ensure the user can only update their own file or the super account can update all files
        if (!auth()->user()->is_super && $upload->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        $upload->title = $request->input('title');
        $upload->content = $request->input('content');

        if ($request->hasFile('upload')) {
            // Delete the old file if a new one is uploaded
            Storage::delete($upload->path);
            $upload->originalName = $request->file('upload')->getClientOriginalName();
            $upload->path = $request->file('upload')->store('uploads');
            $upload->mimeType = $request->file('upload')->getClientMimeType();
        }

        $upload->save();

        return redirect()->route('uploads.index')->with('success', 'Upload updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        // Ensure the user can only delete their own file or the super account can delete all files
        if (!auth()->user()->is_super && $upload->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        Storage::delete($upload->path);
        $upload->delete();

        return redirect()->route('uploads.index')->with('success', 'Upload deleted successfully!');
    }
}
