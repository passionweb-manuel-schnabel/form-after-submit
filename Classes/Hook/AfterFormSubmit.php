<?php

namespace Passionweb\FormAfterSubmit\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Validation\Error;
use TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface;
use TYPO3\CMS\Form\Domain\Runtime\FormRuntime;

class AfterFormSubmit
{
    // get the unallowed words from a database table or something else
    protected array $unallowedWords = [
        'inline styling is cool',
        'migrate to Wordpress',
        'delete without backup',
        // ...
    ];

    public function afterSubmit(
        FormRuntime $formRuntime,
        RenderableInterface $renderable,
        $elementValue,
        array $requestArguments = []
    ): string|null {
        if ($renderable->getIdentifier() === 'message') {
            $strippedMessage = str_replace($this->unallowedWords, '', $elementValue);
            if ($elementValue !== $strippedMessage) {
                $processingRule = $renderable->getRootForm()->getProcessingRule($renderable->getIdentifier());
                $processingRule->getProcessingMessages()->addError(
                    GeneralUtility::makeInstance(
                        Error::class,
                        'Your message contains unallowed words or phrases. Please check your message again.',
                        1704442017
                    )
                );
            }
        }
        return $elementValue;
    }
}
