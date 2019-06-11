<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestPagesController extends Controller
{
  public function index()
  {
      return view('links.index');
  }

  public function ranking()
  {
      return view('links.ranking');
  }

  public function pilotEntry()
  {
      return view('links.pilotEntry');
  }

  public function eventEntry()
  {
      return view('links.eventEntry');
  }

  public function eventDisplay()
  {
      return view('links.eventDisplay');
  }

  public function classEntry()
  {
      return view('links.classEntry');
  }
}
