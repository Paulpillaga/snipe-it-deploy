<?php

namespace Rollbar\Laravel;

/**
 * Adaptor for [rollbar-agent][1] in Laravel logging configuration.
 *
 * The configuration for logging in Laravel requires an instance of
 * [`Monolog\Handler\HandlerInterface`][2], but the Rollbar library requires
 * a string with value of "agent" to use the agent.
 *
 * This class carries the HandlerInterface requirement to satisfy the Laravel
 * logging configuration and is recognized in the ServiceProvider, which
 * converts it to the appropriate agent configuration just in time.
 *
 * This issue was raised by [Issue 85][3].
 *
 * [1]:https://github.com/rollbar/rollbar-agent
 * [2]:https://github.com/Seldaek/monolog/blob/main/src/Monolog/Handler/HandlerInterface.php
 * [3]:https://github.com/rollbar/rollbar-php-laravel/issues/85
 */
class AgentHandler extends MonologHandler
{
}
