# Simple Starter Theme
**By:** Craig Fox - | [craigwfox.com](http://craigwfox.com)<br />
**URL:** https://github.com/craigwfox/Simple-Starter-Theme.git

This theme is meant to be a lightweight start for wordpress theme develoment.

#### Dependencies:
- Simple Starter Post Types (https://github.com/craigwfox/Simple-Starter-Post-Types.git)
- Gulp.js (http://gulpjs.com/)

#### Other Notes
Images(for the theme's design), scss, css, js, and fonts can be found in the assets-build folder of the theme. Any images relating to the sites content directly and not intended to be used globally should be placed in the sites wp-content/uploads directory. All css, js, and images are output from the assets-build to the assets folder by gulp. assets/css/screen.css is imported into the styles.css in the root so that small/temporary css changes can be made without recompiling all the stylesheets.


## Theme Features

### Shortcodes
**Grid Shortcodes**
<table>
  <tr>
    <th>[grid_row][/grid_row]</th>
    <td>Use to wrap all grid items.</td>
  </tr>
  <tr>
    <th>[grid_1_3][/grid_1_3]</th>
    <td>1/3 column</td>
  </tr>
  <tr>
    <th>[grid_2_3][/grid_2_3]</th>
    <td>2/3 column</td>
  </tr>
  <tr>
    <th>[grid_1_4][/grid_1_4]</th>
    <td>1/4 column</td>
  </tr>
  <tr>
    <th>[grid_1_2][/grid_1_2]</th>
    <td>1/2 column</td>
  </tr>
  <tr>
    <th>[grid_3_4][/grid_3_4]</th>
    <td>3/4 column</td>
  </tr>
</table>

```
[grid_row]
  [grid_1_3]
    Some Content
  [/grid_1_3]
  [grid_2_3]
    More Content
  [/grid_2_3]
[/grid_row]
```

**Misc Shortcodes**<br />
*Div with a class*
<table width="100%">
  <tr>
    <th colspan="1">[div_class class_name=""]</th>
    <td colspan="1">Wraps with a div with an option to add a class_name.</td>
  </tr>
</table>
        [div_class class_name="some_class_name"]
          Some content you don't want autop to affect.
        [/div_class]

*Raw remove Wordpress autop*
<table width="100%">
  <tr>
    <th colspan="1">[raw]</th>
    <td colspan="1">Wrap a chunk of text/code to prevent wordpress's autop.</td>
  </tr>
</table>
        [raw]
          <h2>Headline</h2>
          <p>Some content you don't want autop to affect.</p>
        [/raw]

*Make Inline Lists*
<table width="100%">
  <tr>
    <th colspan="1">[inline_list]</th>
    <td colspan="1">Use to wrap lists in a div with a class of inline-list. To make inline lists.</td>
  </tr>
</table>
        [inline_list]
        <ul>
          <li>List Item</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ul>
        [/inline_list]

*Responsive iframe Wrapper*
<table width="100%">
  <tr>
    <th colspan="1">[iframe_wrap]</th>
    <td colspan="1">Wraps iframes with a div to make them responsice.</td>
  </tr>
</table>
        [iframe_wrap]
          <iframe src="" frameborder="0"></iframe>
        [/iframe_wrap]