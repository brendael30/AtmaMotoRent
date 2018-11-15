<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Motor;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\MotorTransformers;

class MotorController extends RestController
{

    protected $transformer=MotorTransformers::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors = Motor::all();
        $response = $this->generateCollection($motors);
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
            'plat' => 'required',
            'nama_motor' => 'required',
            'deskripsi' => 'required',
            'harga'=> 'required',
            'gambar' => 'required',
        ]);   

        try {
                $motors = new Motor;

                if($request->hasfile('gambar'))
                {
                    $file = $request->file('gambar');
                    $name=time().$file->getClientOriginalName();
                    $file->move(public_path().'/Motor/', $name);
                    $motors->gambar=$name;
                } else {
                    $motors->gambar = 'null';
                }
                $motors->status='available';
                $motors->plat=$request->get('plat');
                $motors->nama_motor=$request->get('nama_motor');
                $motors->deskripsi=$request->get('deskripsi');
                $motors->harga=$request->get('harga');
                $motors->gambar=$request->get('gambar');
                $motors->save();

                // Mail::to($users->email)->send(new UserRegistered($users));

                $response = $this->generateItem($motors);

                return $this->sendResponse($response, 201);
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
            $motors=Motor::find($id);
            $response = $this->generateItem($motors);
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
            $motors = Motor::find($id);
            if($request->hasfile('gambar'))
                {
                    $file = $request->file('gambar');
                    $name=time().$file->getClientOriginalName();
                    $file->move(public_path().'/Motor/', $name);
                    $motors->gambar=$name;
                } else {
                    $motors->gambar = 'null';
                }
            $motors->status='available';
            $motors->plat=$request->get('plat');
            $motors->nama_motor=$request->get('nama_motor');
            $motors->deskripsi=$request->get('deskripsi');
            $motors->harga=$request->get('harga');
            $motors->gambar=$request->get('gambar');
            $motors->save();            
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
            $motors=Motor::find($id);
            $motors->delete();
            return response()->json('Success',200);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
