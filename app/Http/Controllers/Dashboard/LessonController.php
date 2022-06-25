<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Notifications\AddLesson;
use App\StudentLesson;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class LessonController extends Controller
{

    function __construct()
    {

        $this->middleware('permission:lessons', ['only' => ['index']]);
        $this->middleware('permission:add lessons', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit lessons', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete lessons', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Lesson::orderBy('id', 'DESC')->get();
        if (auth()->user()->hasRole('Teacher')) {
            $data = Lesson::where('user_id', Auth()->user()->id)
                ->get();
        }

        if (auth()->user()->hasRole('Student')) {
            $s = StudentLesson::where('student_id', Auth()->user()->id)->get('lesson_id')->toArray();
            $data = Lesson::whereIn('id', $s)
                ->get();
        }
        return view('dashboard.lessons.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::orderBy('id', 'DESC')
            ->whereHas(
                'roles',
                function ($q) {
                    $q->where('name', 'Student');
                }
            )
            ->get();
        return view('dashboard.lessons.create', compact('students'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        $input = $request->all();
        $user = Lesson::create([
            'title' => $input['title'],
            'start' => $input['start'],
            'end' => $input['end'],
            'description' => $input['description'],
            'user_id' => Auth()->user()->id,
            'students' => $input['students'] ?? ''
        ]);
        foreach ($input['students'] as $i) {
            StudentLesson::create([
                'user_id' => Auth()->user()->id,
                'teacher_id' => Auth()->user()->id,
                'student_id' => $i,
                'lesson_id' => $user->id,

            ]);
        }

        $users = User::whereIn('id', $input['students'])->get();
        foreach ($users as $u) {
            $u->notify(new AddLesson($user->id));
        }


        session()->flash('Add', __('messages.success'));

        return redirect()->route('lessons.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);

        return view('dashboard.lessons.show', compact('lesson'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        $students = User::orderBy('id', 'DESC')
            ->whereHas(
                'roles',
                function ($q) {
                    $q->where('name', 'Student');
                }
            )
            ->get();
        return view('dashboard.lessons.edit', compact('lesson', 'students'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        $input = $request->all();
        $lesson = Lesson::find($id);
        $lesson->update([
            'title' => $input['title'],
            'start' => $input['start'],
            'end' => $input['end'],
            'description' => $input['description'],
            'user_id' => Auth()->user()->id,
            'students' => $input['students'] ?? ''
        ]);
        StudentLesson::where('lesson_id', $lesson->id)->delete();
        if (isset($input['students'])) {
            foreach ($input['students'] as $i) {
                StudentLesson::create([
                    'user_id' => Auth()->user()->id,
                    'teacher_id' => Auth()->user()->id,
                    'student_id' => $i,
                    'lesson_id' => $lesson->id,
                ]);
            }
        }

        session()->flash('edit', __('messages.Update'));
        return redirect()->route('lessons.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Lesson::find($request->id)->delete();
        session()->flash('delete', __('messages.Delete'));

        return redirect()->route('lessons.index');
    }
}
