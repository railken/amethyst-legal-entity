<?php

namespace Railken\LaraOre\LegalEntityContact\Attributes\TaxonomyId\Exceptions;

use Railken\LaraOre\LegalEntityContact\Exceptions\LegalEntityContactAttributeException;

class LegalEntityContactTaxonomyIdNotUniqueException extends LegalEntityContactAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'taxonomy_id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'LEGAL_ENTITY_CONTACT_TAXONOMY_ID_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
