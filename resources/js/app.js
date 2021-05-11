import * as Turbo from '@hotwired/turbo';
import('./bootstrap');
import('./elements/turbo-echo-stream-tag');
import 'alpine-turbo-drive-adapter';
import 'alpinejs';

import { Application } from 'stimulus'
import { definitionsFromContext } from '@stimulus/webpack-helpers'

const application = Application.start()
const context = require.context("./controllers", true, /\.js$/)
application.load(definitionsFromContext(context))


Turbo.start();
