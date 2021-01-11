<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        return response([
            'status' => true,
            'data' => Movie::all()
        ]);
    }
    public function show($id){
        $data = Movie::find($id);
        if ($data == null) {
            return response([
                'status' => false,
                'message' => 'ID not found.'
            ]);
        }
        else{
            return response([
                'status' => true,
                'data' => $data
            ]);
        }
    }
    public function store(Request $request){
        Movie::create($request->all());
        return response([
            'status' => true,
            'message' => 'Input Success'
        ]);
    }
    public function update(Request $request, $id){
        $data = Movie::find($id);
        if ($data == null) {
            return response([
                'status' => false,
                'message' => 'ID not found.'
            ]);
        }
        else{
            $data->update($request->all());
            return response([
                'status' => true,
                'message' => 'Updated',
                'data' => $data
            ]);
        }
    }
    public function delete($id){
        $data = Movie::find($id);
        if ($data == null) {
            return response([
                'status' => false,
                'message' => 'ID not found.'
            ]);
        }
        else{
            $data->delete();
            return response([
                'status' => true,
                'message' => 'Deleted'
            ]);
        }
    }
}
