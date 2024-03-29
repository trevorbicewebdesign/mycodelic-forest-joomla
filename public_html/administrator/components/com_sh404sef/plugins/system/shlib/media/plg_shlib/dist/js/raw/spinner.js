/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2020
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.711
 * @date         2020-06-26
 */

/*! Copyright Weeblr llc 2020 - Licence: http://www.gnu.org/copyleft/gpl.html GNU/GPL */

;
(function (_app, window, document, $) {
    "use strict;"

    var $spinners = {};

    function start(elementId, options) {
        try {
            var fullElementId = '#' + (elementId || 'wbl-spinner');
            if ($spinners[fullElementId] && $spinners[fullElementId]['count'] > 0) {
                // already a spinner running on this element
                // increase counter
                $spinners[fullElementId]['count'] += 1;
                // but don't create a new spinner
            }
            else if ($spinners[fullElementId] && $spinners[fullElementId]['count'] <= 0) {
                // re-launch a spinner
                $spinners[fullElementId]['element'].fadeIn();
            }
            else {
                //
                var $spinner = $(fullElementId);
                if ($spinner.length) {
                    $spinner.addClass('wbl-spinner-css');
                    if (options && options['class']) {
                        $spinner.addClass(options['class']);
                    }
                    $spinners[fullElementId] = {'element': $spinner, 'count': 1};

                    // launch a new spinner
                    $spinners[fullElementId]['element'].fadeIn();
                }
                else {
                    console.log('Shlib: requested to start a spinner for ' + fullElementId + ' but element not found');
                }
            }

        } catch (e) {
            console.log('wbLib: error starting svg spinner: ' + e.message);
        }
    }

    function stop(elementId, force) {
        try {
            var fullElementId = '#' + (elementId || 'wbl-spinner');
            // does this spinner exist?
            if (!$spinners[fullElementId]) {
                return;
            }
            if (force) {
                $spinners[fullElementId]['count'] = 0;
            }
            else {
                $spinners[fullElementId]['count'] -= 1;
            }

            // stop spinner is nobody uses it any longer
            if ($spinners[fullElementId] && $spinners[fullElementId]['count'] <= 0) {
                $spinners[fullElementId]['count'] = 0;
                $spinners[fullElementId]['element'].fadeOut();
            }

        } catch (e) {
            console.log('wbLib: error stopping svg spinner: ' + e.message);
        }
    }

    // interface
    _app.spinner = _app.spinner || {};
    _app.spinner.start = start;
    _app.spinner.stop = stop;

    return _app;
})
(window.weeblrApp = window.weeblrApp || {}, window, document, jQuery);
