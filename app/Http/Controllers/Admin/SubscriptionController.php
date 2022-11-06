<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subscription_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriptions = Subscription::with(['customer', 'package', 'address', 'vehicle', 'selected_period'])->get();

        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    public function show(Subscription $subscription)
    {
        abort_if(Gate::denies('subscription_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscription->load('customer', 'package', 'address', 'vehicle', 'selected_period');

        return view('admin.subscriptions.show', compact('subscription'));
    }
}
