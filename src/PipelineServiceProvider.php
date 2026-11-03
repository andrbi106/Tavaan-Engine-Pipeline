<?php

declare(strict_types=1);

namespace Tavaan\Engine\Pipeline;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Pipeline\Contracts\PipelineInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * PipelineServiceProvider — ثبت سرویس‌های موتور Pipeline.
 */
final class PipelineServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(PipelineInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Pipeline($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            PipelineInterface::class,
        ];
    }
}