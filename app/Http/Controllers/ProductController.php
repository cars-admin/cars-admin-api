<?php

namespace senseibistro\Http\Controllers;

use Illuminate\Http\Request;
use Factories\Car;  

class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return response()->json([
				'list' => Car::getProduct()->list()
		], 200);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($product)
	{
		return response()->json([
				'item' => Car::getProduct()->find($product)
		], 200);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		$inputs = $this->request->all();
		return response()->json([
				'item' => Car::getProduct()->save($inputs)
		], 200);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update($product)
	{
		$inputs = $this->request->all();
		return response()->json([
				'item' => Car::getProduct()->update($product,$inputs)
		], 200);
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($product)
	{
		return response()->json([
				'item' => Car::getProduct()->delete($product)
		], 200);
	}
}