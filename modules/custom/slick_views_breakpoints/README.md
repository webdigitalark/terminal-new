
# Slick Views Breakpoints

This adds two new display styles to views called:

* **Slick Carousel Breakpoints**

Similar to how you select **HTML List** or **Unformatted List** as display
styles.

This module doesn't require Views UI to be enabled but it is required if you
want to configure your Views display using Slick carousel through the web
interface. This ensures you can leave Views UI off once everything is setup.


## DEPENDENCIES
* Views (in core)
* [Slick 2.x above](http://dgo.to/slick)
* [Slick views](http://dgo.to/slick)

Be sure to install the [Slick example](http://dgo.to/slick_extras) to avoid
adventures in the first place.


## OPTIONSETS:
Arm yourself with proper optionsets. To create one, go to:

**/admin/config/media/slick**

Be sure to install the Slick UI module first, included in the main Slick module,
otherwise no such URL, and regular access denied error.


## USAGE:
Slick Views comes with two flavors: **Slick Carousel Breakpoints** .

Go to Views UI **/admin/structure/views**, add a new view, and a block.

### Usage #1
Displaying multiple (rendered) entities for the slides.

* Choose **Slick Carousel Breakpoints** under the Format.
* Choose available optionsets you have created at **/admin/config/media/slick**
* Choose **Rendered entity** or **Content** under **Format > Show**, and its
  View mode.

Themeing is related to their own entity display outside the Views UI.

**Example use case**:

* Blogs, teams, testimonials, case studies sliders, etc.

**Example use case**:

* similar as above.


## AUTHOR/MAINTAINER/CREDITS
* [Gaus Surahman](https://drupal.org/user/159062)
* [Contributors](https://www.drupal.org/node/2497045/committers)
* CHANGELOG.txt for helpful souls with their patches, suggestions and reports.


## READ MORE
See the project page at drupal.org:

[Slick Views](http://drupal.org/project/slick_views)

More info relevant to each option is available at their form display by hovering
over them, and click a dark question mark.

See the Slick docs at:

* [Slick website](http://kenwheeler.github.io/slick/)
* [Slick at Github](https://github.com/kenwheeler/slick/)
