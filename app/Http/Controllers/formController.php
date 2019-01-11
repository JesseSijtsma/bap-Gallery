<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class formController extends Controller
{
    public function showForm()
    {
        return view('forms.registration');
    }
    public function handleForm(Request $request)
    {
        $geldigeData = $request->validate(
            [
                'firstname' => 'required',
                'middlename' => '',
                'lastname' => 'required|min:2',
                'email' => 'email',
                'geboortedatum' => 'date',
                'website' => 'url',
            ]
        );
        // Als de data niet geldig is, dan worden we naar vorige pagina gestuurd
        // Er is dan automatisch een $errors variabele in onze view.
        // Zo kunnen we foutmeldingen tonen
        // Maar, als we WEL tot hier komen, dan is alle data geldig
        // Zo kunnen we dat "debuggen" en op het scherm zetten
        return redirect()->route('registration.confirmation')->with('formData', $geldigeData);
    }
    public function confirmationPage()
    {
        return view('forms.confirmation');
    }
}
