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
        $schema->create('pollvote', function (Blueprint $table) {
            $table->increments('pollvote_id')->unsigned();
            $table->integer('poll_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('votedate')->unsigned();
            $table->integer('voteoption')->unsigned();
            $table->integer('votetype')->unsigned();
            $table->foreign('poll_id')
                ->references('poll_id')
                ->on('polls')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    },
    'down' => function (Builder $schema) {
        $schema->drop('pollvote');
    },
];