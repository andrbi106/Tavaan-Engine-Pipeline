<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Pipeline Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور pipeline — همهٔ کلیدهای مستندشده در `docs/03-engines/pipeline.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/pipeline.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('PIPELINE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('PIPELINE_PREFIX', 'pipeline:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('PIPELINE_LOG_CHANNEL', 'pipeline'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];