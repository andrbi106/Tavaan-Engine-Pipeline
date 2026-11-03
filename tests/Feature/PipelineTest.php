<?php

declare(strict_types=1);

namespace Tavaan\Engine\Pipeline\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Pipeline\Pipeline;
use Tavaan\Engine\Pipeline\PipelineServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Pipeline.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class PipelineTest extends TestCase
{
    private Pipeline $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Pipeline($config);
    }

    /**
     * T-01: ترتیب اجرا (onion): before/after در هر لایه
     */
    public function test_t01___onion_beforeafter_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: پارامتر `throttle:60,1` → `['60','1']`
     */
    public function test_t02__throttle601__601(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Closure به‌عنوان pipe
     */
    public function test_t03_closure__pipe(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: short-circuit: pipe بدون `$next` → زنجیره قطع
     */
    public function test_t04_shortcircuit_pipe__next__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: exception در pipe میانی → propagate + terminate اجرا شد
     */
    public function test_t05_exception__pipe___propa(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: `thenReturn()` = identity
     */
    public function test_t06_then_return__identity(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Passable دلخواه (string, array, DTO)
     */
    public function test_t07_passable__string_array_d(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: `max_depth` → خطا
     */
    public function test_t08_max_depth__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: Alias نامعتبر → `PipelinePipeNotFoundException`
     */
    public function test_t09_alias___pipeline_pipe_not(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

}