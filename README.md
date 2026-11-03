# Tavaan Engine — Pipeline

> **خط لوله** — موتور Pipeline در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.pipeline` |
| نام | `Pipeline` |
| عنوان فارسی | خط لوله |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Pipeline` |
| نوع | `engine` |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Pipeline\Contracts\MiddlewareInterface`
- `Tavaan\Engine\Pipeline\Contracts\PipelineInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Pipeline\Exceptions\PipelineException`
- `Tavaan\Engine\Pipeline\Exceptions\PipelineMaxDepthException`
- `Tavaan\Engine\Pipeline\Exceptions\PipelinePipeNotFoundException`

## کلاس‌های اصلی

- `src/Pipeline.php`
- `src/PipelineServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\Pipeline\PipelineServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `container`

## پیکربندی

- فایل پیکربندی: `config/pipeline.php`
- کلید: `pipeline`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Pipeline.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Pipeline`** (این مخزن) | موتور Pipeline |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
