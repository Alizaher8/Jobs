<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    public function index()
    {
       // $jobs= Job::with('employer')->paginate(3);
      //  $jobs= Job::with('employer')->simplePaginate(3);
        $jobs= Job::with('employer')->latest()->cursorPaginate(3);
        //dd($jobs);
        return view('jobs.index',compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([

        'title'=> 'required|max:50',
        'salary'=> 'required|max:20'

        ]);
        Job::create([

           'title' => request('title'),
           'salary' => request('salary'),
           'employer_id' => 1

        ]);

      return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show')->with('job',$job);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit')->with('job',$job);
    }

    public function update(Job $job)
    {
        request()->validate([

            'title'=> 'required|max:50',
            'salary'=> 'required|max:20'

            ]);

            $job->update([

               'title' => request('title'),
               'salary' => request('salary'),

            ]);
          return redirect('/jobs');

    }

    public function destroy(Job $job)
    {
         $job->delete($job);
         return redirect('/jobs');
    }
}
