<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\User;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::all();
        return view('homeworks.index', ['homeworks' => $homeworks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student' => 'required|max:255',
            'url' => 'required|max:255'
        ]);

        if ($validated) {
            $data = $request->only(['student', 'url']);
            $homework = new Homework();
            $homework->fill($data)->save();
            return redirect()->route('homeworks.index');
        } else {
            return redirect()->route('homeworks.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        return view('homeworks.edit', ['homework' =>$homework]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homework $homework)
    {
        $validated = $request->validate([
            'grade' => 'integer|min:0|max:5'
        ]);

        if ($validated) {
            $data = $request->only(['review', 'grade']);
            $homework->fill($data);
            $homework->save();
            return redirect()->route('homeworks.index');
        } else {
            return redirect()->route('homeworks.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homeworks.index');
    }
}
