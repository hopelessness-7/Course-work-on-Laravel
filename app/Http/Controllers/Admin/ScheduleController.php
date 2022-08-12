<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function createForm(){
        
        
        return view('admin.schedules.schedules');
    }
    
    public function fileUpload(Request $req){
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
    
        $fileModel = new Schedule;
    
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
    
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->name_group = $req->input('name_group');
            $fileModel->data_from = $req->input('data_from');
            $fileModel->data_to = $req->input('data_to');
            $fileModel->save();
    
            return back()
            ->with('success','File has been uploaded.')
            ->with('file','name_group','data_from','data_to', $fileName);

            
            
        }
    }
}
