<?php
/**
 * Created by PhpStorm.
 * User: Suriaya
 * Date: 10/31/2018
 * Time: 1:11 AM
 */

class PagesController
{
  public function home()
  {

    return view('index');

    require_once 'views/index.tpl.php';    // Receive the request.
    // Delegate.
    // Return responses.
  }

  public function about()
  {
    return view('about');
  }

  public function contact()
  {
    return view('contact');
  }

}