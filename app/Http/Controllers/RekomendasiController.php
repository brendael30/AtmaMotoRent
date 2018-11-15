<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;            return $this->sendNotFoundResponse('barang_not_found');
        }
        source from (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Remov storage.
 specified re
use App\Http\Controllers\Controller;
use App\Rekomendasi;
use Illuminate     *
     *se Illuminate\Support\F * Remove the specified resource from storage.
     *
     * * Remove the specified  *
     *urce from storage.
se Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\RekomendasiTransformers;

class RekomendasiController extends RestController
{
inate\Htptp\Responseint
     */

     * @returublic functiparam  int  $id
     * @return \Illu)
    {
        try {
            
ted $transformer=RekomendasiTransformers::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekomendasi = Rekomendasi::all();
        $response = $this->generateCollection($rekomendasi);
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

n \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            
lluminate\Http\R            return $this->sendNotFoundResponse('barang_not_found');
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
            
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'message' => 'required',
        ]);   

        try {
                $rekomendasi = new Rekomendasi;
                $rekomendasi->message=$request->get('message');
                $motors->save();


                $response = $this->generateItem($rekomendasi);

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
    publ function show($id)
    {
        try {
            $rekomendasi=Rekomendasi::find($id);
            $response = $this->generateItem($rekomendasi);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('User not found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
   /**
