(function(global) {

  var regex = /hsl\((.*)\)/, //Match hsl values
      h, //Hue
      s, //Saturation
      l, //Lightness
      hue,
      sat,
      light;

  function HumanColours(hsl){
    this.HSL = hsl;
    this.values = this.HSL.replace(regex, '$1').split(',');
  }

  HumanColours.prototype.getHSL = function() {
    return this.HSL;
  };

  HumanColours.prototype.getHue = function() {
    return this.values[0];
  };

  HumanColours.prototype.getSaturation = function() {
    return this.values[1].replace('%', '');
  };

  HumanColours.prototype.getLightness = function() {
    return this.values[2].replace('%', '');
  };

  HumanColours.prototype.hueName = function() {
    h = this.getHue();

    if ( h < 15 ) { hue = 'red'; }
    if ( h === 15 ) { hue = 'reddish'; }
    if ( h > 15 ) { hue = 'orange'; }
    if ( h > 45 ) { hue = 'yellow'; }
    if ( h > 70 ) { hue = 'lime'; }
    if ( h > 79 ) { hue = 'green'; }
    if ( h > 163 ) { hue = 'cyan'; }
    if ( h > 193 ) { hue = 'blue'; }
    if ( h > 240 ) { hue = 'indigo'; }
    if ( h > 260 ) { hue = 'violet'; }
    if ( h > 270 ) { hue = 'purple'; }
    if ( h > 291 ) { hue = 'magenta'; }
    if ( h > 327 ) { hue = 'rose'; }
    if ( h > 344 ) { hue = 'red'; }

    return hue;
  };

  HumanColours.prototype.saturationName = function() {
    s = this.getSaturation();

    if( s < 10 ) { sat =  'almost grey'; }
    if( s > 9 ) { sat =  ' very unsaturated'; }
    if( s > 30 ) { sat =  'unsaturated'; }
    if( s > 60 ) { sat =  'rather saturated'; }
    if( s > 80 ) { sat =  'highly saturated'; }

    return sat;
  };

  HumanColours.prototype.lightnessName = function() {
    l = this.getLightness();

    if( l < 10 ) { light = 'almost black'; }
    if( l > 9 ) { light = 'very dark'; }
    if( l > 22 ) { light = 'dark'; }
    if( l > 30 ) { light = 'normal?'; }
    if( l > 60 ) { light = 'light'; }
    if( l > 80 ) { light = 'very light'; }
    if( l > 94 ) { light = 'almost white'; }

    return light;
  };

  var humanColours = function( hsl ) {
    return new HumanColours( hsl );
  };

  global.HumanColours = humanColours;

}(this));