# Validate entered data with the hook "afterSubmit" of EXT:form in TYPO3

Shows the usage of the hook 'afterSubmit' of EXT:form, for example to validate entered form data.

## What does it do?

Adds an example form which uses the afterSubmit hook to validate the entered message and strip unallowed phrases.

## Installation

Add via composer:

    composer require "passionweb/form-after-submit"

* Install the extension via composer
* Flush TYPO3 and PHP Cache

## Requirements

This example uses no 3rd party libraries.

## Extension settings

There are no extension settings available.

## Extension configuration (TypoScript)

All necessary configurations are read in using the [ext\_typoscript\_setup.typoscript](./ext_typoscript_setup.typoscript) file.

```

plugin.tx_form.settings.yamlConfigurations {
    1704442017 = EXT:form_after_submit/Configuration/Yaml/BaseSetup.yaml
}

module.tx_form.settings.yamlConfigurations {
    1704442017 = EXT:form_after_submit/Configuration/Yaml/BaseSetup.yaml
}

```

## Troubleshooting and logging

If something does not work as expected take a look at the log file.
Every problem is logged to the TYPO3 log (normally found in `var/log/typo3_*.log`)

## Achieving more together or Feedback, Feedback, Feedback

I'm grateful for any feedback! Be it suggestions for improvement, requests or just a (constructive) feedback on how good or crappy this snippet/repo is.

Feel free to send me your feedback to [service@passionweb.de](mailto:service@passionweb.de "Send Feedback") or [contact me on Slack](https://typo3.slack.com/team/U02FG49J4TG "Contact me on Slack")
