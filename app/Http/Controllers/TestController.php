<?php

namespace App\Http\Controllers;


class TestController extends Controller {

  public function someMethod() {
    $this->request['d'] = '5';
    echo $this->request->input('f','asd');
    echo "<br>";
    var_dump($this->request->all());
    echo "<br>";
    var_dump($this->request->input('g'));
    echo "<br>";
    $data = [];
    $data['first'] = '123';
    $data['second'] = '124';
    return view('test/test',$data);
  }

  public function someMethod2($first,$second) {

    $data = [];
    $data['first']  = $first;
    $data['second'] = $second;

    return view('test/test', $data);
  }
}