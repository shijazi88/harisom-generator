<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCustomerWalletRequest;
use App\Http\Requests\StoreCustomerWalletRequest;
use App\Http\Requests\UpdateCustomerWalletRequest;
use App\Models\Customer;
use App\Models\CustomerWallet;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerWalletController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_wallet_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerWallets = CustomerWallet::with(['customer'])->get();

        return view('admin.customerWallets.index', compact('customerWallets'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_wallet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.customerWallets.create', compact('customers'));
    }

    public function store(StoreCustomerWalletRequest $request)
    {
        $customerWallet = CustomerWallet::create($request->all());

        return redirect()->route('admin.customer-wallets.index');
    }

    public function edit(CustomerWallet $customerWallet)
    {
        abort_if(Gate::denies('customer_wallet_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $customerWallet->load('customer');

        return view('admin.customerWallets.edit', compact('customerWallet', 'customers'));
    }

    public function update(UpdateCustomerWalletRequest $request, CustomerWallet $customerWallet)
    {
        $customerWallet->update($request->all());

        return redirect()->route('admin.customer-wallets.index');
    }

    public function show(CustomerWallet $customerWallet)
    {
        abort_if(Gate::denies('customer_wallet_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerWallet->load('customer');

        return view('admin.customerWallets.show', compact('customerWallet'));
    }

    public function destroy(CustomerWallet $customerWallet)
    {
        abort_if(Gate::denies('customer_wallet_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerWallet->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomerWalletRequest $request)
    {
        CustomerWallet::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
