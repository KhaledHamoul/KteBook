<?php 

namespace App\Http\Controllers;

use App\Http\Requests\produitUpdateRequest;
use App\Http\Requests\produitRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Request;
use Auth;
use App\User;
use App\Photo;
use App\Produit;
use App\Livre;
use Storage;


class ProduitController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::check())
    {
       $userId = Auth::id();
      $livres = null ;
      $myProducts = User::find($userId)->user_prod_offert;
      $livres = null ;
      $photos = null ;
       
      foreach($myProducts as $prod)
      {
          $livres[$prod->id] = Livre::find($prod->id);
          $photos[$prod->id] =  Produit::find($prod->id)->prod_photo;
      }
      
        return view('produits',['produits' =>  $myProducts ,'livres' => $livres , 'photos' => $photos ] );
       
    }
        return redirect()->route('index');
    
  }

  /**
   * Display the specified resource.>
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $livre = Livre::find($id);
    $produit = Produit::find($id);
    $photos = Produit::find($id)->prod_photo;
    if (Auth::check())  return view('showProduit' , [ 'livre' => $livre , 'produit' => $produit , 'photos' => $photos ]);
            return redirect()->route('index');  
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $file = Storage::allFiles();
      if (Auth::check())  return view('addProduits')->with('file',$file);
            return redirect()->route('index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */


  public function store(produitRequest $request)
  {
   
    $livre = new Livre;
    $prod = new Produit;
    
    $prod->user_id = Auth::user()->id ;
    $prod->type_prod = 'livre';
    $prod->type_offre = $request->type_offre ;
    $prod->etat_offre = 'جاري' ;
    $prod->description = $request->description ;
    $prod->nombre = $request->nombre ;
    $prod->lieu = $request->lieu ;
    $prod->prixDuree = $request->inputVE ;
    $prod->save();
    
    $i = 0 ;
    foreach ($request->photos as $photo)
    {
         $p[$i] = new Photo ;
         $file = $photo;
         $extension = $file->getClientOriginalExtension() ;
         $fileName = Auth::user()->id . $prod->id . $i . '.' . $extension ;
         Storage::disk('public')->put( $fileName , File::get($photo), 'public');
         $p[$i]->chemin = $fileName ;
         $p[$i]->produit_id =  $prod->id ;
         $p[$i]->save();
         $i++;
        
    }

    $livre->id = $prod->id ; 
    $livre->titre = $request->titre ;
    $livre->langue = $request->langue ;
    $livre->domaine = $request->domaine ;
    $livre->etat_livre = $request->etatLivre ;
    $livre->save();

    return redirect()->route('produit.index');
  }



  

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $livre = Livre::find($id);
    $produit = Produit::find($id);
    $photos = Produit::find($id)->prod_photo;
    if (Auth::check())  return view('editProduit' , [ 'livre' => $livre , 'produit' => $produit , 'photos' => $photos ]);
            return redirect()->route('index'); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(produitUpdateRequest $request, $id)
  {
    
    $prod = Produit::find($id);
    $prod->type_offre = $request->type_offre ;
    $prod->etat_offre = 'جاري' ;
    $prod->description = $request->description ;
    $prod->nombre = $request->nombre ;
    $prod->lieu = $request->lieu ;
    $prod->prixDuree = $request->inputVE ;
    $prod->save();
    

    $livre = Livre::find($id) ; 
    $livre->titre = $request->titre ;
    $livre->langue = $request->langue ;
    $livre->domaine = $request->domaine ;
    $livre->etat_livre = $request->etatLivre ;
    $livre->save();

    return redirect()->route('produit.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $photos = Produit::find($id)->prod_photo;
    foreach($photos as $p) Storage::disk('public')->delete($p->chemin);
    Produit::destroy($id);
    Livre::destroy($id);
    return redirect()->route('produit.index');
  }

  public function ForSale()
  {
   $userId = Auth::id();
      $livres = null ;
      $myProducts = User::find($userId)->user_prod_offert->where('type_offre', '==', 'بيع');
      $livres = null ;
      $photos = null ;
       
      foreach($myProducts as $prod)
      {
          $livres[$prod->id] = Livre::find($prod->id);
          $photos[$prod->id] =  Produit::find($prod->id)->prod_photo;
      }
      
      if (Auth::check())  return view('produits',['produits' =>  $myProducts ,'userId' => $userId ,'livres' => $livres , 'photos' => $photos ] );
            return redirect()->route('index');
  }



  public function ToExchange ()
  {
    $userId = Auth::id();
      $livres = null ;
      $myProducts = User::find($userId)->user_prod_offert->where('type_offre', '==', 'تبادل');;
      $livres = null ;
      $photos = null ;
       
      foreach($myProducts as $prod)
      {
          $livres[$prod->id] = Livre::find($prod->id);
          $photos[$prod->id] =  Produit::find($prod->id)->prod_photo;
      }
      
      if (Auth::check())  return view('produits',['produits' =>  $myProducts ,'userId' => $userId ,'livres' => $livres , 'photos' => $photos ] );
            return redirect()->route('index');
  }
  
}

?>