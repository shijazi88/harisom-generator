<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPackagePeriodRequest;
use App\Http\Requests\StorePackagePeriodRequest;
use App\Http\Requests\UpdatePackagePeriodRequest;
use App\Models\Package;
use App\Models\PackagePeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PackagePeriodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('package_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packagePeriods = PackagePeriod::with(['package'])->get();

        return view('admin.packagePeriods.index', compact('packagePeriods'));
    }

    public function create()
    {
        abort_if(Gate::denies('package_period_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = Package::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.packagePeriods.create', compact('packages'));
    }

    public function store(StorePackagePeriodRequest $request)
    {
        $packagePeriod = PackagePeriod::create($request->all());

        return redirect()->route('admin.package-periods.index');
    }

    public function edit(PackagePeriod $packagePeriod)
    {
        abort_if(Gate::denies('package_period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = Package::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $packagePeriod->load('package');

        return view('admin.packagePeriods.edit', compact('packagePeriod', 'packages'));
    }

    public function update(UpdatePackagePeriodRequest $request, PackagePeriod $packagePeriod)
    {
        $packagePeriod->update($request->all());

        return redirect()->route('admin.package-periods.index');
    }

    public function show(PackagePeriod $packagePeriod)
    {
        abort_if(Gate::denies('package_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packagePeriod->load('package');

        return view('admin.packagePeriods.show', compact('packagePeriod'));
    }

    public function destroy(PackagePeriod $packagePeriod)
    {
        abort_if(Gate::denies('package_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packagePeriod->delete();

        return back();
    }

    public function massDestroy(MassDestroyPackagePeriodRequest $request)
    {
        PackagePeriod::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
