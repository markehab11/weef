<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
       $categories = categoryResource::collection(Categorie::get());
        return $this->apiResponse($categories,'Success', 200);
    }

    public function show($id)
    {
        $categorie = Categorie::find($id);

        if($categorie)
        {
            return $this->apiResponse(new CategoryResource( $categorie),'Success', 200);
        }
        return $this->apiResponse(null,'This Category Not Found', 401);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'name_ar'=>'required',
            'image'=>'required',
            'title'=>'required'
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(), 400 );
        }

        $categorie = Categorie::create($request->all());

        if($categorie)
        {
            return $this->apiResponse(new CategoryResource( $categorie),'This Category Added', 201);
        }
        return $this->apiResponse(null,'This Category Not Found', 404 );
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'name_ar'=>'required',
            'image'=>'required',
            'title'=>'required'
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(), 400 );
        }

        $categorie = Categorie::find($id) ;

        if(!$categorie)
        {
            return $this->apiResponse(null,'This Category Not Found', 404 );
        }

        $categorie->update($request->all());

        if($categorie)
        {
            return $this->apiResponse(new CategoryResource( $categorie),'This Category Updated', 202);
        }
    }

    public function destroy($id)
    {
        $categorie = Categorie::find($id) ;

        if(!$categorie)
        {
            return $this->apiResponse(null,'This Category Not Found', 404 );
        }

        $categorie->delete($id);

        if($categorie)
        {
            return $this->apiResponse(null,'This Category Deleted', 201);
        }
    }
}
