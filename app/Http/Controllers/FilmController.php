<?php

// app/Http/Controllers/FilmController.php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // WAJIB: Import Storage facade

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Tampilkan daftar film.
     */
    public function index()
    {
        $films = Film::latest()->paginate(10);
        return view('film.index', compact('films'));
    }

    /**
     * Tampilkan form untuk membuat film baru.
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Simpan film baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'tahun_rilis' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'nullable|string|max:100',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Max 5MB
        ]);

        $data = $request->all();

        // Handle Upload Poster
        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('public/film_posters');
            $data['poster'] = basename($path);
        }

        Film::create($data);

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil ditambahkan ke Leo Cinema!');
    }

    /**
     * Tampilkan detail film tertentu.
     */
    public function show(Film $film)
    {
        return view('film.show', compact('film'));
    }

    /**
     * Tampilkan form untuk mengedit film.
     */
    public function edit(Film $film)
    {
        return view('film.edit', compact('film'));
    }

    /**
     * Update film tertentu di database.
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'tahun_rilis' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'nullable|string|max:100',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $data = $request->all();

        // Handle Update Poster
        if ($request->hasFile('poster')) {
            // Hapus poster lama
            if ($film->poster) {
                Storage::delete('public/film_posters/' . $film->poster);
            }
            // Simpan poster baru
            $path = $request->file('poster')->store('public/film_posters');
            $data['poster'] = basename($path);
        }

        $film->update($data);

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil diperbarui!');
    }

    /**
     * Hapus film dari database.
     */
    public function destroy(Film $film)
    {
        // Hapus file poster dari storage
        if ($film->poster) {
            Storage::delete('public/film_posters/' . $film->poster);
        }

        $film->delete();

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil dihapus.');
    }
}