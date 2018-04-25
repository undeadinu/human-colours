# Human readable colours

How do you describe a colour? Some colours are easy. It might be clear that something is red, blue or yellow. But what do you call something between green and yellow? When is it green? When is it yellow? And how about saturation? When would you call something gray, and when can we say it has a hue? The same with darkness and lightness: There is a point when a color is perceived as white or black. 

## Hue, saturation, lightness

Lucky for us humans, CSS understands the hsl() colour notation. It translates beautifully to human readable colours, as you can see [on this page](http://ghehehe.nl/random/100/). I created this repository with some simple functions that translate the values of the hsl() function to human words. For instance, a value for *hue* between 45° and 70° is translated to *lime*, a value for *saturation* between 10% and 30% is translated to *very unsaturated*, and a value for *lightness* higher than 94% is translated to *almost white*. With this, we can construct sentences like: You are *probably* looking at a browser window with a very unsaturated, almost white lime background. 

## Precision
It's very hard, and probably even impossible, to get all these terms right. For instance, I don't think there's an exact border between *very unsaturated* and *almost hueless*. Wars have been fought over the question if an object is yellow or lime, and they have never been won. I've used my own eyes and my own insight to create the definitions for saturation and lightness. If you have a better, more scientific solution, [please let me know](https://github.com/vasilisvg/human-colours/issues). I've used this [table of spectral or near-spectral colors](https://en.wikipedia.org/wiki/Spectral_color#Table_of_spectral_or_near-spectral_colors) and this [table of highly-saturated purple colors](https://en.wikipedia.org/wiki/Line_of_purples#Table_of_highly-saturated_purple_colors) to define the colours. Even with these tables, the exact boundary between blue and indigo, for instance, is still very vague. If you know a more accurate solution, please let me know.

### Tests
I've set up a few tests in order to get a better names for the different values. Please take a look at [this hue test](http://nerd.vasilis.nl/code/human-colours/tests/hue-en-gb.php), [this saturation test](http://nerd.vasilis.nl/code/human-colours/tests/saturation-en-gb.php), and [this lightness test](http://nerd.vasilis.nl/code/human-colours/tests/lightness-en-gb.php) and [let me know](https://github.com/vasilisvg/human-colours/issues) if things can be improved, or if any values are incorrect or debatable.

## Languages
It would be nice if these functions were translated to different computer languages. [Gustavo Ferreira](https://github.com/gferreira) already translated it to [Python](https://github.com/vasilisvg/human-colours/tree/master/py) and [Eduardo Lopes](https://github.com/EduardoLopes) translated it to [JavaScript](https://github.com/vasilisvg/human-colours/tree/master/js). I think it's probably pretty easy to translate this to even more languages. I guess translating it to different *human languages* might be a bit harder. For instance, I don't think *lime* really exists as a colour in Dutch. It's probably a cultural thing, and it might even be a very local regional thing. But nevertheless, do feel free to create or propose, or discuss any language, either for humans or for computers. So far I've created a [Dutch PHP version](http://nerd.vasilis.nl/code/human-colours/php/nl-nl-example.php) and an [English PHP version](http://nerd.vasilis.nl/code/human-colours/php/en-gb-example.php). [Andrés Cidoncha Carballo](https://github.com/AndresCidoncha) translated it to Spanish and [Julien Bidoret](https://github.com/jbidoret) translated it to French.

## Why?
There are many reasons why we'd want this. For instance, it could help a colourblind designer in describing the chosen colours to the client. The client might understand what the designer is talking about when they're looking at it on their black and white Kindle. And when (we get old and) we are blind we might enjoy the description of a colour, just like we enjoy the memory or description of a good meal without actually tasting it.

## Help?
There's a lot that can be done in this repository, and most if it is pretty easy. Creating a translation to a human language or a scripting language is probably done in a few minutes. Updating the exact boundaries between the different colours might be a bit trickier, but help is very much appreciated.

## Thanks
Thanks to everybody who contributed:

- [Gustavo Ferreira](https://github.com/gferreira)
- [Eduardo Lopes](https://github.com/EduardoLopes)
- [Lea Verou](https://github.com/LeaVerou/)
- [Jörg Bartels](https://github.com/nifl)
- [Andrés Cidoncha Carballo](https://github.com/AndresCidoncha)
- [Julien Bidoret](https://github.com/jbidoret)
