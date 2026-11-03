<?php

declare(strict_types=1);

namespace Tavaan\Engine\Pipeline\Contracts;

/**
 * قرارداد Pipeline.
 *
 * @see \Tavaan\Engine\Pipeline\Pipeline
 * @api 1.0
 */
interface PipelineInterface
{
    /**
     * متد send.
     *
     * @return mixed
     */
    public function send(/* ... */): mixed;

    /**
     * متد through.
     *
     * @return mixed
     */
    public function through(/* ... */): mixed;

    /**
     * متد pipe.
     *
     * @return mixed
     */
    public function pipe(/* ... */): mixed;

    /**
     * متد via.
     *
     * @return mixed
     */
    public function via(/* ... */): mixed;

    /**
     * متد then.
     *
     * @return mixed
     */
    public function then(/* ... */): mixed;

    /**
     * متد thenReturn.
     *
     * @return mixed
     */
    public function thenReturn(/* ... */): mixed;

    /**
     * متد after.
     *
     * @return mixed
     */
    public function after(/* ... */): mixed;

    /**
     * متد terminate.
     *
     * @return mixed
     */
    public function terminate(/* ... */): mixed;
}