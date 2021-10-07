<?php

namespace App\Http\Controllers;

use App\Models\InformasiBuku;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class InformasiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi_buku = InformasiBuku::orderBy('waktu_buat', 'DESC')->get();
        $response = [
            'message' => 'List data informasi buku diurutkan berdasarkan waktu',
            'data' => $informasi_buku
        ];

        return response()->json($response, Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['required'],
            'halaman' => ['required', 'numeric'],
            'isi' => ['required'],
            'gambar' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $informasi_buku = InformasiBuku::create($request->all());
            $response = [
                'message' => 'Informasi buku created',
                'data' => $informasi_buku
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
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
        $informasi_buku = InformasiBuku::findOrFail($id);
        try {
            $response = [
                'message' => 'Detail of informasi buku resource',
                'data' => $informasi_buku
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
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
        $informasi_buku = InformasiBuku::findOrFail($id);
        $validator = Validator::make($request->all(), [
            // 'judul' => ['required'],
            // 'halaman' => ['required', 'numeric'],
            // 'isi' => ['required'],
            // 'gambar' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $informasi_buku->update($request->all());
            $response = [
                'message' => 'Informasi buku updated',
                'data' => $informasi_buku
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
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
        $informasi_buku = InformasiBuku::findOrFail($id);
        try {
            $informasi_buku->delete();
            $response = [
                'message' => 'Delete informasi buku resource',

            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }
}
