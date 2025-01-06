<div class="bg-white p-6 rounded-lg shadow-md">
    <p class="text-xl font-semibold mb-4">Hi, {{ Auth::user()->name }}</p>
    <p class="text-gray-700 mb-2">Your job has been posted successfully.</p>
    <p class="text-lg font-medium text-blue-600 mb-4">Job Title: <a
            href="{{ url('/jobs', $job->id) }}">{{ $job->title }}</a></p>
    <p class="text-gray-600 mb-6">Thank you for using our service.</p>
    <p class="text-gray-600">Best Regards,</p>
    <p class="text-gray-600 font-semibold">Job Portal</p>
</div>
