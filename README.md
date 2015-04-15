# Simple Starter Theme
**By:** Craig Fox - | [craigwfox.com](http://craigwfox.com)
**URL:** https://github.com/craigwfox/Simple-Starter-Theme
This theme is meant to be a lightweight start for wordpress theme develoment.

#### Dependencies:
- [Simple Starter Post Types](https://github.com/craigwfox/Simple-Starter-Post-Types)
- [Simple Starter Columns](https://github.com/craigwfox/Simple-Starter-Columns)
- [Simple Starter Accordion](https://github.com/craigwfox/Simple-Starter-Accordion)
- [Simple Starter Tabs](https://github.com/craigwfox/Simple-Starter-Tabs)
- [Grunt](http://gruntjs.com/) *(To edit css and js files)*

#### Other Notes
Images(for the theme's design), scss, css, js, and fonts can be found in the src folder of the theme. Any images relating to the sites content directly and not intended to be used globally should be placed in the sites wp-content/uploads directory. All css, js, and images are output from the assets-build to the assets folder by gulp. assets/css/screen.css is imported into the styles.css in the root so that small/temporary css changes can be made without recompiling all the stylesheets.


## Theme Features

### Shortcodes

#### Misc Shortcodes

##### Div with a class
| Shortcode                 | Description                                          |
| ------------------------- |:----------------------------------------------------:|
| [div_class class_name=""] | Wraps with a div with an option to add a class_name. |

##### Usage Example
```
[div_class class_name="some_class_name"]
  Some content you don't want autop to affect.
[/div_class]
```
___

#### Raw remove Wordpress autop*
| Shortcode                 | Description                                             |
| ------------------------- |:-------------------------------------------------------:|
| [raw]                     | Wrap a chunk of text/code to prevent wordpress's autop. |

##### Usage Example
```
[raw]
  <h2>Headline</h2>
  <p>Some content you don't want autop to affect.</p>
[/raw]
```
____

#### Make Inline Lists
| Shortcode                 | Description                                                                   |
| ------------------------- |:-----------------------------------------------------------------------------:|
| [inline_list]             | Use to wrap lists in a div with a class of inline-list. To make inline lists. |

##### Usage Example
```
[inline_list]
<ul>
  <li>List Item</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
</ul>
[/inline_list]
```
____

#### Responsive iframe Wrapper
| Shortcode                 | Description                                       |
| ------------------------- |:-------------------------------------------------:|
| [iframe_wrap]             | Wraps iframes with a div to make them responsive. |

##### Usage Example
```
[iframe_wrap]
  <iframe src="" frameborder="0"></iframe>
[/iframe_wrap]
```