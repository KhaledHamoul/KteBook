<?php 

namespace App\Http\Controllers;
use Auth;
use App\User;

class UserController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
    if (Auth::check())
    {
       $user = User::find($id);
       $forSale = $user->user_prod_offert->where('type_offre', '==', 'بيع');
       $toExchange = $user->user_prod_offert->where('type_offre', '==', 'تبادل');
       return view('showUser',['user' =>  $user , 'vente' => count($forSale) , 'echange' => count($toExchange) ]  );
       
    }
        return redirect()->route('index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    return $id;
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>