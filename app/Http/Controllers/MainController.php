<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function test() {
        return 'Hello World';
    }

    public function index(Request $request){
        return $request->ips();
    }

    # Метод для динамической ссылки
    # Будет присылать id пользователя
    public function user(Request $request, $id)
    {
        return 'User id: ' . $id;
    }

    public function PageOneTemplate()
    {
        return view('PageOne');
    }

    public function PageOneAccess(Request $request)
    {
        $request->session()->put('FIO', $request->FIO);
        $request->session()->put('Age', $request->Age);
        $request->session()->put('Country', $request->Country);
        $request->session()->put('Address', $request->Address);
        $request->session()->put('Enthusiasm', $request->Enthusiasm);
        $request->session()->put('About', $request->About);
        return back();
    }

    public function PageTwoTemplate()
    {
        return view('PageTwo');
    }



}
