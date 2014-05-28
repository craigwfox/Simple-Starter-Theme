# Simple Starter Theme
**By:** Craig Fox @ craigwfox.com<br />
**URL:** https://github.com/craigwfox/Simple-Starter-Theme.git

This theme is meant to be a lightweight start for wordpress theme develoment.

#### Dependencies:
- Simple Starter Post Types (https://github.com/craigwfox/Simple-Starter-Post-Types.git)
- Gulp.js (http://gulpjs.com/)

#### Other Notes
Images(for the theme's design), scss, css, js, and fonts can be found in the assets-build folder of the theme. Any images relating to the sites content directly and not intended to be used globally should be placed in the sites wp-content/uploads directory. All css, js, and images are output from the assets-build to the assets folder by gulp. assets/css/screen.css is imported into the styles.css in the root so that small/temporary css changes can be made without recompiling all the stylesheets.