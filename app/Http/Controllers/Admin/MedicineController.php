<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medicine;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::with('supplier')->get();
        return view('admin.medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('admin.medicine.add', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'medicine_name' => 'required|string|max:255',
            'generic_name' => 'nullable|string|max:255',
            'brand_name' => 'nullable|string|max:255',
            'drug_name' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'manufacturer' => 'nullable|string|max:255',
            'dosage' => 'nullable|string|max:255',
            'quantity_stock' => 'nullable|integer',
            'manufacture_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $medicine = new Medicine();

        $medicine->supplier_id = $request->supplier_id;
        $medicine->medicine_name = $request->medicine_name;
        $medicine->generic_name = $request->generic_name;
        $medicine->brand_name = $request->brand_name;
        $medicine->drug_name = $request->drug_name;
        $medicine->price = $request->price;
        $medicine->manufacturer = $request->manufacturer;
        $medicine->dosage = $request->dosage;
        $medicine->quantity_stock = $request->quantity_stock;
        $medicine->manufacture_date = $request->manufacture_date;
        $medicine->expiration_date = $request->expiration_date;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/uploads/', $filename);
            $medicine->image = $filename;
        }

        $medicine->save();

        return redirect()->route('medicines.index')
                         ->with('success', 'Medicine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('admin.medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        $suppliers = Supplier::all();
        return view('admin.medicine.edit', compact('medicine', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'medicine_name' => 'required|string|max:255',
            'generic_name' => 'nullable|string|max:255',
            'brand_name' => 'nullable|string|max:255',
            'drug_name' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'manufacturer' => 'nullable|string|max:255',
            'dosage' => 'nullable|string|max:255',
            'quantity_stock' => 'nullable|integer',
            'manufacture_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $medicine = Medicine::findOrFail($id);

        $medicine->supplier_id = $request->supplier_id;
        $medicine->medicine_name = $request->medicine_name;
        $medicine->generic_name = $request->generic_name;
        $medicine->brand_name = $request->brand_name;
        $medicine->drug_name = $request->drug_name;
        $medicine->price = $request->price;
        $medicine->manufacturer = $request->manufacturer;
        $medicine->dosage = $request->dosage;
        $medicine->quantity_stock = $request->quantity_stock;
        $medicine->manufacture_date = $request->manufacture_date;
        $medicine->expiration_date = $request->expiration_date;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/uploads/', $filename);
            $medicine->image = $filename;
        }

        $medicine->save();

        return redirect()->route('medicines.index')
                         ->with('success', 'Medicine updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();

        return redirect()->route('medicines.index')
                         ->with('success', 'Medicine deleted successfully.');
    }
}

