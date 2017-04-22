<?php
/**
 *
 *  This file is part of reflar/polls.
 *
 *  Copyright (c) ReFlar.
 *
 *  http://reflar.io
 *
 *  For the full copyright and license information, please view the license.md
 *  file that was distributed with this source code.
 *
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
return [
    'up' => function (Builder $schema) {
        $schema->create('polls', function (Blueprint $table) {
            $table->increments('poll_id')->unsigned();
            $table->string('question');
            $table->integer('dateline')->unsigned();
            $table->text('options');
            $table->text('votes');
            $table->smallInteger('active');
            $table->smallInteger('numberoptioms')->unsigned();
            $table->smallInteger('timeout')->unsigned();
            $table->smallInteger('multiple')->unsigned();
            $table->smallInteger('voters')->unsigned();
            $table->smallInteger('public');
            $table->smallInteger('lastvote')->unsigned();
        });
    },
    'down' => function (Builder $schema) {
        $schema->drop('polls');
    },
];