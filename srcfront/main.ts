/*
 * Providers provided by Angular
 */

import 'jquery';
import 'tether';
import 'bootstrap';
import 'widgster';
import 'jquery-touchswipe/jquery.touchSwipe';
import 'jquery-slimscroll/jquery.slimscroll';
import 'pace';
import {provide, enableProdMode} from 'angular2/core';
import {bootstrap, ELEMENT_PROBE_PROVIDERS} from 'angular2/platform/browser';
import {ROUTER_PROVIDERS, LocationStrategy, HashLocationStrategy} from 'angular2/router';
import {HTTP_PROVIDERS} from 'angular2/http';

const ENV_PROVIDERS = [];

if ('production' === process.env.ENV) {
  enableProdMode();
} else {
  ENV_PROVIDERS.push(ELEMENT_PROBE_PROVIDERS);
}

import {App} from './app';
import {ConfigService} from './app/core/config';

document.addEventListener('DOMContentLoaded', function main(): void {
  bootstrap(App, [
    ConfigService,
    ...ENV_PROVIDERS,
    ...HTTP_PROVIDERS,
    ...ROUTER_PROVIDERS,
    provide(LocationStrategy, { useClass: HashLocationStrategy })
  ])
  .catch(err => console.error(err));
});
