<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWorkerAddressRequest;
use App\Http\Requests\StoreWorkerAddressRequest;
use App\Http\Requests\UpdateWorkerAddressRequest;
use App\Models\Customer;
use App\Models\WorkerAddress;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkerAddressController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('worker_address_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workerAddresses = WorkerAddress::with(['customer'])->get();

        return view('admin.workerAddresses.index', compact('workerAddresses'));
    }

    public function create()
    {
        abort_if(Gate::denies('worker_address_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.workerAddresses.create', compact('customers'));
    }

    public function store(StoreWorkerAddressRequest $request)
    {
        $workerAddress = WorkerAddress::create($request->all());

        return redirect()->route('admin.worker-addresses.index');
    }

    public function edit(WorkerAddress $workerAddress)
    {
        abort_if(Gate::denies('worker_address_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $workerAddress->load('customer');

        return view('admin.workerAddresses.edit', compact('customers', 'workerAddress'));
    }

    public function update(UpdateWorkerAddressRequest $request, WorkerAddress $workerAddress)
    {
        $workerAddress->update($request->all());

        return redirect()->route('admin.worker-addresses.index');
    }

    public function show(WorkerAddress $workerAddress)
    {
        abort_if(Gate::denies('worker_address_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workerAddress->load('customer');

        return view('admin.workerAddresses.show', compact('workerAddress'));
    }

    public function destroy(WorkerAddress $workerAddress)
    {
        abort_if(Gate::denies('worker_address_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workerAddress->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkerAddressRequest $request)
    {
        WorkerAddress::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
