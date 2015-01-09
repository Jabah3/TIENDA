<?php

class UsuarioController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex()
	{
		//$roles = DB::table('roles')->orderBy('created_at', 'desc')->paginate(5);
		$usuarios= Usuario::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('usuarios.contenido', array('usuarios' => $usuarios))->render());
        	}

		return View::make('usuarios.index')->with('usuarios',$usuarios);
	}


	public function postGuarda()
	{
		$Usuarios = new Usuario; 
		$Usuarios->usuario=$usuario=Input::get('usuario');
		//$Usuarios->contrasena=$contrasena=Input::get('contrasena');
		$Usuarios->contrasena=Hash::make(Input::get('contrasena'));
		$Usuarios->nombre=$nombres=Input::get('nombre');
	    $Usuarios->apellido=$apellidos=Input::get('apellido');
	    $Usuarios->rol_id=$rol_id=Input::get('rol_id');
	    $Usuarios->sucursal_id=$sucursal_id=Input::get('sucursal_id');
	    $Usuarios->telefono=$telefono=Input::get('telefono');
	    $Usuarios->email=$email=Input::get('email');
	    $Usuarios->grupo_id=$grupos_id=Input::get('grupo_id');
	    $Usuarios->ciudad=$ciudad=Input::get('ciudad');
	    $Usuarios->estado=$estado=Input::get('estado');
	    $Usuarios->activo=1;
	    $Usuarios->sexo=$sexo=Input::get('sexo');
	    $Usuarios->foto=$foto=Input::get('foto');
	    $Usuarios->descripcion=$descripcion=Input::get('descripcion');
		$Usuarios->save();

		return $nombres;
/*

		echo "<br>". Input::get('usuario');
		echo "<br>". Input::get('contrasena');
		//$reg->password=Hash::make(Input::get('password'));
		echo "<br>". Input::get('nombre');
	    echo "<br>". Input::get('apellido');
	    echo "<br>". Input::get('rol_id');
	    echo "<br>". Input::get('sucursal_id');
	    echo "<br>". Input::get('telefono');
	    echo "<br>". Input::get('email');
	    echo "<br>". Input::get('grupo_id');
	    echo "<br>". Input::get('ciudad');
	    echo "<br>". Input::get('estado');
	    echo "<br>". Input::get('activo');
	    echo "<br>". Input::get('sexo');
	    echo "<br>". Input::get('foto');
	    echo "<br>". Input::get('descripcion');

*/

	}



	public function postGuardaedicion()
	{
		//$Rol = new Rol; 
		Rol::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'nombre'=>Input::get('nombre'),				
				'descripcion'=>Input::get('descripcion')
			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Rol::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}




	public function postFormatoedita()
	{
		$id=Input::get('id');
		$rol = Rol::where('id', '=', $id)->get();
		$uri=Input::get('uri');
		return View::make('usuarios.editaformato')->with('rol',$rol)->with('uri',$uri);
	}


	public function getPaginacion()
	{	
		//return $someUsers = Rol::where('id', '>', 1)->simplePaginate(6);
		//return View::make('photos.show', array('photos' => $photos));
  /** 	$per_page=5;
	$Rol = DB::table('roles')->paginate($per_page, array('id', 'nombre', 'created_at'));

	$paginacion=1;
		foreach ($Rol as $order){
		    //echo $order->id." "; 
		    echo $paginacion++." ";
		}

	echo $total = DB::table('roles')->count();
	echo "habra ".$steps=$total/$per_page;*/		
	}








}