@servers(['web' => '192.168.1.1'])

@task('deploy', ['on' => 'web'])
cd site

@if ($branch)
    git pull origin {{ $branch }}
@endif

php artisan migrate
@endtask
