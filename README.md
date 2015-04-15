# Simple Starter Theme
**By:** Craig Fox - | [craigwfox.com](http://craigwfox.com)<br />
**URL:** https://github.com/craigwfox/Simple-Starter-Theme.git

This theme is meant to be a lightweight start for wordpress theme develoment.

#### Dependencies:
- [Simple Starter Post Types](https://github.com/craigwfox/Simple-Starter-Post-Types.git)
- [Grunt](http://gruntjs.com/) *(To edit css and js files)*

#### Other Notes
Images(for the theme's design), scss, css, js, and fonts can be found in the assets-build folder of the theme. Any images relating to the sites content directly and not intended to be used globally should be placed in the sites wp-content/uploads directory. All css, js, and images are output from the assets-build to the assets folder by gulp. assets/css/screen.css is imported into the styles.css in the root so that small/temporary css changes can be made without recompiling all the stylesheets.


## Theme Features

**Misc Shortcodes**<br />
*Div with a class*
<table>
  <tr>
    <th>[div_class class_name=""]</th>
    <td>Wraps with a div with an option to add a class_name.</td>
  </tr>
</table>
        [div_class class_name="some_class_name"]
          Some content you don't want autop to affect.
        [/div_class]

*Raw remove Wordpress autop*
<table>
  <tr>
    <th>[raw]</th>
    <td>Wrap a chunk of text/code to prevent wordpress's autop.</td>
  </tr>
</table>
        [raw]
          <h2>Headline</h2>
          <p>Some content you don't want autop to affect.</p>
        [/raw]

*Make Inline Lists*
<table>
  <tr>
    <th>[inline_list]</th>
    <td>Use to wrap lists in a div with a class of inline-list. To make inline lists.</td>
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
<table>
  <tr>
    <th>[iframe_wrap]</th>
    <td>Wraps iframes with a div to make them responsice.</td>
  </tr>
</table>
        [iframe_wrap]
          <iframe src="" frameborder="0"></iframe>
        [/iframe_wrap]