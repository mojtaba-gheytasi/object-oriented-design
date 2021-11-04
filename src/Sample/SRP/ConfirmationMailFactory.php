<?php

namespace App\Sample\SRP;

class ConfirmationMailFactory
{
    private TranslatorInterface $translator;

    private TemplatingEngineInterface $templatingEngine;

    public function __construct(
        TranslatorInterface $translator,
        TemplatingEngineInterface $templatingEngine
    ) {
        $this->translator = $translator;
        $this->templatingEngine = $templatingEngine;
    }

    public function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate('Confirm your mail address');

        $body = $this->templatingEngine->render('confirmationMail', [
            'confirmationCode' => $user->getConfirmationCode(),
            'name' => $user->getName(),
        ]);

        return new Message($subject, $body, $user->getEmailAddress());
    }
}