<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class PythonController extends Controller
{
    public function run()
    {
        // $process = new Process(['C:\Users\rifqi\AppData\Local\Programs\Python\Python310\python ', base_path() . 'C:\xampp\htdocs\detikKP\laravel\public\Python\main.py']);
        // $process->run();
        // dd($process->getOutput());
        // return view('list', ['process' => $process]);

        $result = shell_exec('C:\Users\rifqi\AppData\Local\Programs\Python\Python310\python C:\Users\rifqi\Downloads\laravel\laravelKP\public\Python\main.py');
        $data = ['list' => json_decode($result)];
        // $main_array = array();

        // $first_array = array("name" => "first", "url" => "http://test.com/");
        // $second_array = array("name" => "second", "url" => "http://otherwebsite.com/");
        // $third_array = array("name" => "third", "url" => "http://anotherwebsite.com/");

        // $main_array[] = $first_array;
        // $main_array[] = $second_array;
        // $main_array[] = $third_array;
        // dd($main_array);

        // $collection = collect(json_decode($result));
        // dd($collection);
        // $filteredItems = $collection->where(1, 'Polisi');
        // dd($filteredItems);

        return view('dashboard.scrap', $data);
    }
}
