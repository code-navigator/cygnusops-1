'use strict';
// Import configuration
import config from './gulpfile.config.js'

// Import Gulp
import { dest, src } from 'gulp';

export const copy = () => {
  console.log('copy started');
  return src(config.srcCopyPath)
    .pipe(dest(config.destCopyPath));
}
