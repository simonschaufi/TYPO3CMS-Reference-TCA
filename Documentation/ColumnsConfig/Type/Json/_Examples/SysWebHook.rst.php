..  Generated by https://github.com/TYPO3-Documentation/t3docs-codesnippets
..  Extracted from EXT:webhooks/Configuration/TCA/sys_webhook.php

..  code-block:: php
    :caption: EXT:webhooks/Configuration/TCA/sys_webhook.php

    [
        'columns' => [
            'additional_headers' => [
                'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.additional_headers',
                'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.additional_headers.description',
                'config' => [
                    'type' => 'json',
                ],
            ],
        ],
    ]