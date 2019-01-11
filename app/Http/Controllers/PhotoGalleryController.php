<?php
namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;
class PhotoGalleryController extends Controller
{
    public function listPhotos()
    {
        $photos = Photo::all();
        return view('gallery.index', ['photos' => $photos]);
    }
    public function showPhotoForm()
    {
        return view('gallery.addPhoto');
    }
    public function savePhotoForm(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'description' => 'min:10',
                'photo' => 'required|image'
            ]
        );
        $targetFolder = public_path('photos');
        $fileName = str_random(16) . '.' . $validatedData['photo']->getClientOriginalExtension();
//        dd($fileName);
        $validatedData['photo']->move($targetFolder, $fileName);
        // maak object foto aan
        $photo = new Photo();
        $photo->fill([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'photo' => $fileName
        ]);
        $photo->save();
        return redirect()->route('gallery.index');
    }
}
