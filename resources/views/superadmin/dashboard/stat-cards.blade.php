<div
    class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-sm rounded-sm border border-slate-200">
    <div class="px-5 py-5">
        <header class="flex justify-between items-start mb-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 21H4C2.89543 21 2 20.1046 2 19V5C2 3.89543 2.89543 3 4 3H10C10.2652 3 10.5195 3.10545 10.707 3.293L12.414 5H20C21.1046 5 22 5.89543 22 7V19C22 20.1046 21.1046 21 20 21ZM4 7V19H20V7H4ZM16 14H8V12H16V14Z"
                    fill="#2E3A59"></path>
            </svg>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 mb-2">Number of Tourists</h2>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 mr-2">{{ $totalTourists }}</div>
        </div>
    </div>
</div>

<div
    class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-sm rounded-sm border border-slate-200">
    <div class="px-5 py-5">
        <header class="flex justify-between items-start mb-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 21H4C2.89543 21 2 20.1046 2 19V5C2 3.89543 2.89543 3 4 3H10C10.2652 3 10.5195 3.10545 10.707 3.293L12.414 5H20C21.1046 5 22 5.89543 22 7V19C22 20.1046 21.1046 21 20 21ZM4 7V19H20V7H4ZM16 14H8V12H16V14Z"
                    fill="#2E3A59"></path>
            </svg>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 mb-2">Day Tourists</h2>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 mr-2">{{ $day_tourists }}</div>
        </div>
    </div>
</div>

<div
    class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-sm rounded-sm border border-slate-200">
    <div class="px-5 py-5">
        <header class="flex justify-between items-start mb-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 21H4C2.89543 21 2 20.1046 2 19V5C2 3.89543 2.89543 3 4 3H10C10.2652 3 10.5195 3.10545 10.707 3.293L12.414 5H20C21.1046 5 22 5.89543 22 7V19C22 20.1046 21.1046 21 20 21ZM4 7V19H20V7H4ZM16 14H8V12H16V14Z"
                    fill="#2E3A59"></path>
            </svg>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 mb-2">Night Tourists</h2>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 mr-2">{{ $night_tourists }}</div>
        </div>
    </div>
</div>

<div
    class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-sm rounded-sm border border-slate-200">
    <div class="px-5 py-5">
        <header class="flex justify-between items-start mb-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 21H4C2.89543 21 2 20.1046 2 19V5C2 3.89543 2.89543 3 4 3H10C10.2652 3 10.5195 3.10545 10.707 3.293L12.414 5H20C21.1046 5 22 5.89543 22 7V19C22 20.1046 21.1046 21 20 21ZM4 7V19H20V7H4ZM16 14H8V12H16V14Z"
                    fill="#2E3A59"></path>
            </svg>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 mb-2">Unclassified Tourists</h2>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 mr-2">{{ $total_unclassified_tourists }}</div>
        </div>
    </div>
</div>

@include('superadmin.dashboard.tourist_per_year')

@include('superadmin.dashboard.unclassified_tourist_per_year')