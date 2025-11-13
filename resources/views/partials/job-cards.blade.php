<div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($jobs as $job)
        <a href="{{ route('jobdetails', data_get($job, 'id_oferta')) }}">
            <x-job-card :job="$job" />
        </a>
    @endforeach
</div>