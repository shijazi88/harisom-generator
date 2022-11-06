<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sms;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SmsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sms_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $smss = Sms::all();

        return view('admin.smss.index', compact('smss'));
    }

    public function show(Sms $sms)
    {
        abort_if(Gate::denies('sms_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.smss.show', compact('sms'));
    }
}
