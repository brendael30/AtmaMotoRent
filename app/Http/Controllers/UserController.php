<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\UserTransformers;
use Hash;

class UserController extends RestController
{
    protected $transformer=UserTransformers::class;

    public function index()
    {
        $users = User::all();
        $response = $this->generateCollection($users);
        return $this->sendResponse($response);
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
        $this->validate($request,[
            'nama_lengkap' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password'=> 'required',
        ]);   

        try {

            $cekemail = User::where('email',$request->get('email'))->count();

            if($cekemail==0)
            {
                $users = new User;

                $users->nama_lengkap=$request->get('nama_lengkap');
                $users->username=$request->get('username');
                $users->role='member';
                $users->phone=$request->get('phone');
                $users->alamat=$request->get('alamat');
                $users->email=$request->get('email');
                $users->password=bcrypt($request->get('password'));
                $users->verifikasi=0;
                $users->code=str_random(32);
                
                $users->save();

                // Mail::to($users->email)->send(new UserRegistered($users));

                $response = $this->generateItem($users);

                return $this->sendResponse($response, 201);
            }
            else{
                return response()->json('Email already used',404);
            }

        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $users=User::find($id);
            $response = $this->generateItem($users);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('User not found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
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
        try {

            $users = User::find($id);
            // if (Hash::check($request->get('oldpassword'), $users->password))
            // {
                // The passwords match...
                

                $users->nama_lengkap=$request->get('nama_lengkap');
                $users->username=$request->get('username');
                $users->phone=$request->get('phone');
                $users->alamat=$request->get('alamat');
                $users->save();

                $response = $this->generateItem($users);

                return $this->sendResponse($response, 201);
            // }
            // else{
            //     return response()->json('Wrong Password');
            // }

        }catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('barang_not_found');
        }
        catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $users=User::find($id);
            $users->delete();
            return response()->json('Success',200);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        
        try {
            $users = User::where('email',$request->get('email'))->first();
            if($users){
                if (Hash::check($request->get('password'), $users->password))
                {
                    $response = $this->generateItem($users);
                    return $this->sendResponse($response, 201);
                }
                else{
                    return response()->json('Wrong Password'); 
                }
            }
            else
            {
                return response()->json('Email Not Found'); 
            }
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addRek(Request $request,$id){
        $this->validate($request,[
            'message' => 'required',
        ]);   

        try {
                $user=  User::find($id);
                $rekomendasi = $user->rekomendasi()->create(['message'=>$request->get('message')]);
                return response()->json('Rekomendasi Terkirim'); 
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

}
