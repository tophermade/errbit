# readme
my clean slate starting theme for wordpress. not a childtheme, no frameworks, 
just all the basic components for a wordpress theme & of course less because 
less is awesome and improves dev speed and conciseness without affecting 
quality.

## why
because I build a lot of wordpress themes and I always start from scratch,
and because wordpress theme development has in many cases become over complicated 
in the last few years. so many new developers are smashed in the face with a 
theme base that requires knowledge of 17 different frameworks, or has it's own 
complicated structure and extra-wordpress functionality that must be learned.

errbit is, except for the inclusion of less (the use of which is option) just plain
wordpress structure. i believe in basics first, only adding new layers of complexity 
if one has a good reason.

## overview

### /gears
contains `js/` and `less.php/`, which contain the theme's js and less compiler 
respectively. `dev.js` is the js version of less. i use it because it is, for 
me, faster than compiling with one of the various tools and reloading. as the 
less is compiled in the browser with it changes show up automatically to any 
device i happen to be testing on as well.

### /paint
theme styles go in here, `style.less` in the root is just the anchor. 
1. `base/` contains the reset (`reset.less`), mixins (`mixins.less`), and the 
general structural styles (`layout.less`).
1. `queries/` contains less files named for their respective media query ie 
`min-600.less` and so on. mobile first so there are no mobile targeted files 
by default.

### /parts
exactly what it sounds like, contains `parts` as fetched by `get_template_part()`.

### /static
depending on the project I sometimes markup and style a large number of templates 
in static before moving them into the theme. those static templates go here and 
link to the same style and js files as the theme. `front.html` is included as a 
base that matches the rest of the theme.

### /templates
custom page templates go here, ie `home-template.php` which are used for specific 
pages or page layouts.

### option less you say?
yeah. remove lines  3-11 in functions.php and be on your merry way.

## license
https://www.gnu.org/licenses/gpl-2.0.html
