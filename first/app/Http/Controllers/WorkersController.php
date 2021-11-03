<?php

namespace App\Http\Controllers;

use App\workers;
use Illuminate\Http\Request;
use App\Http\Requests\WorkersRequest;

class WorkersController extends Controller{
    public function submit(WorkersRequest $data)
    {
        $action = $data->input('action');

        if ($action == 'add') {
            $workers = new workers();

        } else {
            $id = $data->input('id');
            $workers = Workers::find($id);
        }

        $workers->name = $data->input('name');
        $workers->date = $data->input('date');
        $workers->prof = $data->input('prof');
        $workers->save();

        return redirect()->route('main')->with('success', ($action == 'add' ? 'Сотрудник добавлен.' : 'Данные сотрудника обновлены.'));
    }

    public function edit($id){
        return view('add', ['data' => Workers::find($id)]);
    }

    public function delete($id){
        Workers::find($id)->delete();
        return redirect()->route('main')->with('success', 'Данные сотрудника удалены.');
    }

    public function allWorkers(){
        return view('main', ['data' => Workers::all()]);
    }
}
