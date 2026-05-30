<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StorecarsRequest;
use App\Http\Requests\UpdatecarsRequest;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->paginate(10);
        return view('exploreCars', ['cars' => $cars]);
    }

    public function details($id){
        $details = Car::where('id',$id)->first();
        return view('details',['details'=> $details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecarsRequest $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer',
        'price' => 'required|numeric',
        'km_driven' => 'required|numeric',
        'fuel_type' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image'
    ]);

    $uploadedFile = Cloudinary::upload(
        $request->file('image')->getRealPath(),
        [
            'folder' => 'cars'
        ]
    );

    $secure_url = $uploadedFile->getSecurePath();

    $public_id = $uploadedFile->getPublicId();

    $car = new Car();

    $car->title = $request->title;
    $car->brand = $request->brand;
    $car->model = $request->model;
    $car->year = $request->year;
    $car->price = $request->price;
    $car->km_driven = $request->km_driven;
    $car->fuel_type = $request->fuel_type;
    $car->description = $request->description;

    $car->secure_url = $secure_url;
    $car->public_id = $public_id;

    $car->sold = 0;

    $car->save();

    return redirect('/admin/cars')
        ->with('message','Car Added Successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(cars $cars)
    {
        
    }

    public function featuredCars(){
        $cars = Car::latest()->limit(6)->get();
        return view('welcome', ['cars' => $cars]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecarsRequest $request, car $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $cars)
    {
        //
    }

    public function CarsApi()
{
    try{

        $cars = Car::all();

        return response()->json([
            'success' => true,
            'cars' => $cars
        ]);

    }catch(\Exception $e){

        return response()->json([
            'error' => $e->getMessage()
        ]);

    }
}
}
