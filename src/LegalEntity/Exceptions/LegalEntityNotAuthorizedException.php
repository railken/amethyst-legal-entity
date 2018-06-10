<?php

namespace Railken\LaraOre\LegalEntity\Exceptions;

class LegalEntityNotAuthorizedException extends LegalEntityException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'LEGAL_ENTITY_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
