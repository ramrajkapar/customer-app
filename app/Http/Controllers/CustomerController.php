<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DataTables;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function index()
    {
        return view('customer.index');
    }

    public function storeCustomers(Request $request)
    {
        // dd($request->all());
        // Customer::create($request->all());
        $customer = Customer::updateOrCreate(
            [ 'id' => $request->customer_id ],
            $request->all()
        );
        if($customer){
            return response([
                'success' => true,
                'data' => $customer,
            ], 200);
        }
    }
    public function getCustomerList(Request $request)
    {
        $data = Customer::all();
        return Datatables::of($data)
            // ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit-customer btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a> <a href="javascript:void(0)" class="delete-customer btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getCustomerById(Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer)
            return response([
                'success' => true,
                'data' => $customer,
            ], 200);
        else
            return response([
                'success' => false,
                'message' => 'The given Customer does not exists',
            ], 422);
    }

    public function deleteCustomerById(Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer->delete())
            return response([
                'success' => true,
            ], 200);
        else
            return response([
                'success' => false,
                'message' => 'The given Customer does not exists',
            ], 422);
    }
}
