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

    public function getCustomerSort(Request $request)
    {
        return view('customer.search');
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

    public function sortCustomerByLatLong(Request $request)
    {
        //dd($request->all());
        $customers = Customer::all()->toArray();
        foreach($customers as $key=>$customer){
            // $customer->put('test', 'test');
            $this->distance($customer[''], $customer, $r ,$customers[$key]['gps_lat'] = $customer['id'];
equest->latitude, $request->longitude, 'M');
            $customers[$key]['gps_lat'] = $customer['id'];
        }
        return Datatables::of($customers)
            // ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit-customer btn btn-success btn-sm" data-id="' . $row['id'] . '">Edit</a> <a href="javascript:void(0)" class="delete-customer btn btn-danger btn-sm" data-id="' . $row['id'] . '">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        // dd($customers);
    }
    private function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);
      
          if ($unit == "K") {
            return ($miles * 1.609344);
          } else if ($unit == "N") {
            return ($miles * 0.8684);
          } else {
            return $miles;
          }
        }
      }
}
