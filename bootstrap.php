<?php

/*
 * This file is part of reflar/polls.
 *
 * Copyright (c) ReFlar.
 *
 * http://reflar.io
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Reflar\polls;

use Flarum\Foundation\Application;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Application $app) {
    $events->subscribe(Listeners\AddApiAttributes::class);
    $events->subscribe(Listeners\AddRelationships::class);
    $events->subscribe(Listeners\EventHandlers::class);
    $events->subscribe(Listeners\AddClientAssets::class);
    $events->subscribe(Listeners\SaveVotesToDatabase::class);
    $events->subscribe(Listeners\FilterDiscussionListByHotness::class);
};
