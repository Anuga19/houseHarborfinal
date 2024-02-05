<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agent::all();
     
        return view('agent.agents')->with('agents',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Agent $agent)
    {
        $input = $agent->all();
        Agent::create($input);
        return redirect('agent')->with('flash_message', 'Agent Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);
        return view('agent.show')->with('agents', $agent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);
        return view('agent.edit')->with('agents', $agent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agent = Agent::find($id);
        $input = $request->all();
        $agent->update($input);
        return redirect('agent')->with('flash_message', 'agent Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agent::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }

    public function showview(){
        return view('agent.agents');
    }
}
