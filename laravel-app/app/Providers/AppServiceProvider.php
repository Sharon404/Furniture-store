<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');

            $appUrl = config('app.url');
            if (is_string($appUrl) && $appUrl !== '') {
                $host = parse_url($appUrl, PHP_URL_HOST);

                // Do not force localhost-style APP_URL values in production.
                if (in_array($host, ['localhost', '127.0.0.1'], true)) {
                    $appUrl = '';
                }
            }

            if (is_string($appUrl) && $appUrl !== '') {
                URL::forceRootUrl($appUrl);
            }
        }

        Blade::directive('money', function ($expression) {
            return "<?php echo format_currency($expression); ?>";
        });

        Blade::directive('ksh', function ($expression) {
            return "<?php echo ksh($expression); ?>";
        });
    }
}
