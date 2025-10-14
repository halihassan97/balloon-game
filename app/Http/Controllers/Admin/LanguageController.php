<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::orderByDesc('is_default')->orderBy('name')->get();
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        $language = new Language();
        return view('admin.languages.form', compact('language'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'code' => 'required|string|max:10|unique:languages,code',
            'is_default' => 'nullable|boolean',
            'active' => 'nullable|boolean',
        ]);

        if (! empty($data['is_default'])) {
            // unset existing default
            Language::where('is_default', true)->update(['is_default' => false]);
        }

        $data['is_default'] = !empty($data['is_default']);
        $data['active'] = !empty($data['active']);

        Language::create($data);

        return redirect()->route('admin.languages.index')->with('success','Language created.');
    }

    public function edit(Language $language)
    {
        return view('admin.languages.form', compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'code' => 'required|string|max:10|unique:languages,code,'.$language->id,
            'is_default' => 'nullable|boolean',
            'active' => 'nullable|boolean',
        ]);

        if (! empty($data['is_default'])) {
            Language::where('is_default', true)->where('id', '!=', $language->id)->update(['is_default' => false]);
        }

        $data['is_default'] = !empty($data['is_default']);
        $data['active'] = !empty($data['active']);

        $language->update($data);

        return redirect()->route('admin.languages.index')->with('success','Language updated.');
    }

    public function destroy(Language $language)
    {
        // Prevent deleting default language
        if ($language->is_default) {
            return back()->with('error', 'Cannot delete default language.');
        }

        $language->delete();
        return redirect()->route('admin.languages.index')->with('success','Language deleted.');
    }
}
