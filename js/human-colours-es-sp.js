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
  
  HumanColours.prototype = {
    getHSL: function() {
      return this.HSL;
    },
    
    getHue: function() {
      return this.values[0];
    },
    
    getSaturation: function() {
      return this.values[1].replace('%', '');
    },
    
    getLightness: function() {
      return this.values[2].replace('%', '');
    },
    
    hueName: function() {
      h = this.getHue();
  
      if ( h < 15 ) { hue = 'rojo'; }
      if ( h === 15 ) { hue = 'rojizo'; }
      if ( h > 15 ) { hue = 'naranja'; }
      if ( h > 45 ) { hue = 'amarillo'; }
      if ( h > 70 ) { hue = 'lima'; }
      if ( h > 79 ) { hue = 'verde'; }
      if ( h > 163 ) { hue = 'turquesa'; }
      if ( h > 193 ) { hue = 'azul'; }
      if ( h > 240 ) { hue = 'indigo'; }
      if ( h > 260 ) { hue = 'violeta'; }
      if ( h > 270 ) { hue = 'morado'; }
      if ( h > 291 ) { hue = 'magenta'; }
      if ( h > 327 ) { hue = 'rosa'; }
     if ( h > 344 ) { hue = 'rojo'; }
 
      return hue;
    },
    
    saturationName: function() {
      s = this.getSaturation();
      
      if( s < 4) { sat =  'gris'; }
      if( s > 3) { sat =  'casi gris'; }
      if( s > 10) { sat =  'muy insaturado'; }
      if( s > 30) { sat =  'insaturado'; }
      if( s > 46) { sat =  'algo insaturado'; }
      if( s > 60) { sat =  'saturado'; }
      if( s > 80) { sat =  'bastante saturado'; }
      if( s > 90) { sat =  'muy saturado'; }
      
      return sat;
    },
    
    lightnessName: function() {
      l = this.getLightness();
  
      if( l < 10 ) { light = 'casi negro'; }
      if( l > 9 ) { light = 'muy oscuro'; }
      if( l > 22 ) { light = 'oscuro'; }
      if( l > 30 ) { light = 'normal?'; }
      if( l > 60 ) { light = 'claro'; }
      if( l > 80 ) { light = 'muy claro'; }
      if( l > 94 ) { light = 'casi blanco'; }
  
      return light;
    }
