<?php

/**
 * Application Insights Plugin
 *
 * @author Matthias Wenz <mat@bowstreet.de>
 * @version 1.0.0
 */

function application_insights($options = array()) {
    if (!c::get('applicationinsights.active', true) || !c::get('applicationinsights.instrumentationkey')) {
        return;
    }
    $options['instrumentationKey'] = c::get('applicationinsights.instrumentationkey');

    return tpl::load(__DIR__ . DS . 'template.php', $options);
}
?>