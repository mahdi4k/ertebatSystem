<?php

namespace App\Http\Controllers\survey;

use App\Http\Controllers\Controller;
use App\Question;
use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {

        return view('question.create',compact('questionnaire'));
    }

    /**
     * store question and answers
     * @param Questionnaire $questionnaire
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Questionnaire $questionnaire)
    {
        $data = request()->validate([
            'question.question'=>'required',
            'answers.0.answer'=>'required',
            'answers.1.answer'=>'required',
            'answers.2.answer'=>'nullable',
            'answers.3.answer'=>'nullable',
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answer()->createMany($data['answers']);
        return redirect('/ertebat/survey/'.$questionnaire->id);
    }

    public function destroy(Questionnaire $questionnaire , Question $question)
    {
        $question->answer()->delete();
        $question->delete();
        return  redirect($questionnaire->path());
    }
}
