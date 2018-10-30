<?php
/**
 * Created by PhpStorm.
 * User: Suriaya
 * Date: 10/31/2018
 * Time: 1:43 AM
 */

class UsersController
{
  public function index(){
    $users = App::get('db')->selectAll('users', 'Task');

    return view('users', compact('users'));
  }

  public function store()
  {
    App::get('db')->insert('users', [
      'name' => $_POST['name'],
    ]);

   return redirect('users');
  }
}