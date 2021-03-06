<?php

namespace RenewableEnergy\Http\Controllers;

use Illuminate\Http\Request;

use RenewableEnergy\Http\Requests;
use RenewableEnergy\User;

use RenewableEnergy\Admin\LocationDistributor;
use RenewableEnergy\Admin\Location;
use RenewableEnergy\Admin\Distributor;

class UsersController extends Controller
{
  //
  function index() {
    //
    $users = User::where('user_type_id', 2)->get();
    $userLocationDistributorsArray = array();
    foreach ($users as $user) {
      $locationDistributorId = $user->location_distributor_id;
      $location = $locationDistributorId != 0 ? Location::find(LocationDistributor::find($locationDistributorId)->location_id) : array('name' => 'Not Set');
      $distributor = $locationDistributorId != 0 ? Distributor::find(LocationDistributor::find($locationDistributorId)->distributor_id) : array('name' => 'Not Set');
      array_push($userLocationDistributorsArray, array(
        'id' => $user->id,
        'user' => $user,
        'location' => $location,
        'distributor' => $distributor
      ));
    }

    return view('users.index', ['userLocationDistributors' => $userLocationDistributorsArray, 'users' => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
