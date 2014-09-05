require 'breakpoint'
require 'compass/import-once/activate'

# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
css_dir = '_resources/css'
sass_dir = '_resources/sass'
javascripts_dir = '_resources/js'
images_dir = 'images'
fonts_dir = '_resources/webfonts'

# Development
output_style = :expanded
environment = :development

# To enable relative paths to assets via compass helper functions
relative_assets = true
line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
