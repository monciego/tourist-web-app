<div class="mt-4 col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200 relative">
    <div class="p-3">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 flex items-center justify-between py-5 sm:px-6">
                <div>
                    <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $business->name }} Information</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details of {{ $business->name }}.</p>
                </div>
                <div>
                    @include('superadmin.business-owners.create')
                </div>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Name of Taxpayer/Registrant</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if(empty($business->business_owner->name_of_registrant))
                            Not Specified
                            @else
                            {{ $business->business_owner->name_of_registrant }}
                            @endif
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Owner's Address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if(empty($business->business_owner->owner_address))
                            Not Specified
                            @else
                            {{ $business->business_owner->owner_address }}
                            @endif
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Gender</dt>
                        <dd class="mt-1 capitalize text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if(empty($business->business_owner->owner_gender))
                            Not Specified
                            @else
                            {{ $business->business_owner->owner_gender }}
                            @endif
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date of Birth</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if(empty($business->business_owner->owner_date_of_birth))
                            Not Specified
                            @else
                            {{ \Carbon\Carbon::parse($business->business_owner->owner_date_of_birth)->isoFormat('MMM
                            D YYYY')}}
                            @endif
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Contact Number</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if(empty($business->business_owner->owner_contact_number))
                            Not Specified
                            @else
                            <a class="underline text-indigo-600"
                                href="tel:{{  $business->business_owner->owner_contact_number  }}">
                                {{ $business->business_owner->owner_contact_number }}
                            </a>
                            @endif
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>