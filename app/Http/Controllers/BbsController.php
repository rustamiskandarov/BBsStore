<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BbsController extends Controller
{
    private const BB_VALIDATOR = [
        'title'=> 'required|max:50',
        'content'=>'required',
        'price'=>'required|numeric',
        'unit'=>'required',
        'quantity'=>'required|numeric',
        'img'=>'required'
    ];

    private const BB_ERROR_MESSAGES = [
        'price.required'=>'Поле цена должна быть заполнено',
        'required'=>'Поле не должно быть пустым',
        'max'=>'Значение поля не должно быть длинее :max символов',
        'numeric'=>'Введите число'
    ];

    public function index(){
        $bbs=Bb::latest()->get();
        return view('bb.index',compact('bbs') );
    }

    public function show(Bb $bb):string{
        return view('bb.show', compact('bb'));
    }

    public function create(){
        return view('bb.create');
    }

    public function store(Request $request){

        $validated = $request->validate(self::BB_VALIDATOR, self::BB_ERROR_MESSAGES);

        Auth::user()->bbs()->create(
            [
                'title'=>$validated['title'],
                'slug'=>Str::substr(Str::lower(preg_replace('/\s+/', '-', $request->title)),0,-1),
                'content'=>$validated['content'],
                'price'=>$validated['price'],
                'unit'=>$validated['unit'],
                'img'=>$validated['img'],
                'quantity'=>$validated['quantity']
            ]);
        return redirect()->route('bb.home');
    }

    public function update(Request $request, Bb $bb){
       $validated = $request->validate(self::BB_VALIDATOR, self::BB_ERROR_MESSAGES);
        $bb->fill([
            'title'=>$validated['title'],
            'slug'=>Str::substr(Str::lower(preg_replace('/\s+/', '-', $request->title)),0,-1),
            'content'=>$validated['content'],
            'price'=>$validated['price'],
            'unit'=>$validated['unit'],
            'img'=>$validated['img'],
            'quantity'=>$validated['quantity']
        ])->save();

        return redirect()->route('bb.home');
    }

    public function edit(Bb $bb){
        return view('bb.edit', compact('bb'));
    }
    public function delete(Bb $bb){
        $bb->delete();
        return redirect()->route('bb.home');
    }
}
