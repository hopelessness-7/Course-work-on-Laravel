<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ball;
use Illuminate\Http\Request;

class BallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balls = Ball::latest()->paginate(5);

        return view('admin.balls.index', compact('balls'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.balls.create');
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
            'student_id' => 'required|min:1',
            'subject_id' => 'required|min:1',
            'ball' => 'required|min:1|max:1',
        ]);

        ball::create($request->all());

        return redirect()->route('balls.index')
            ->with('success', 'Оценка была успешна создана.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function show(Ball $ball)
    {
        return view('admin.balls.show', compact('ball'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function edit(Ball $ball)
    {
        return view('admin.balls.edit', compact('ball'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ball $ball)
    {
        $request->validate([
            'student_id' => 'required|min:1',
            'subject_id' => 'required|min:1',
            'ball' => 'required|min:1|max:1',
        ]);

        $ball->update($request->all());

        return redirect()->route('balls.index')
            ->with('success', 'Оценка была успешно изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ball $ball)
    {
        $ball->delete();

        return redirect()->route('balls.index')
            ->with('success', 'Оценка была успешно удалена');
    }
}
