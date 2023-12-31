<?php
/**
 * Generic Messenger Class
 */
namespace OrderApp\Core\Messaging;
class Messenger
{
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';

    public function __construct(
        public string $message,
        public string $type
    ) {}
}
