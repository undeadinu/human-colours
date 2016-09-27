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
  
      if ( h < 15 ) { hue = 'rouge'; }
      if ( h === 15 ) { hue = 'rouge-orange'; }
      if ( h > 15 ) { hue = 'orange'; }
      if ( h > 45 ) { hue = 'jaune'; }
      if ( h > 70 ) { hue = 'anis'; }
      if ( h > 79 ) { hue = 'vert'; }
      if ( h > 163 ) { hue = 'turquoise'; }
      if ( h > 193 ) { hue = 'bleu'; }
      if ( h > 240 ) { hue = 'indigo'; }
      if ( h > 260 ) { hue = 'violet'; }
      if ( h > 270 ) { hue = 'pourpre'; }
      if ( h > 291 ) { hue = 'magenta'; }
      if ( h > 327 ) { hue = 'rose'; }
     if ( h > 344 ) { hue = 'rouge'; }
 
      return hue;
    },
    
    saturationName: function() {
      s = this.getSaturation();
      
      if( s < 4) { sat =  'gris'; }
      if( s > 3) { sat =  'presque gris'; }
      if( s > 10) { sat =  'très désaturé'; }
      if( s > 30) { sat =  'désaturé'; }
      if( s > 46) { sat =  'assez désaturé'; }
      if( s > 60) { sat =  'saturé'; }
      if( s > 80) { sat =  'assez saturé'; }
      if( s > 90) { sat =  'très saturé'; }
      
      return sat;
    },
    
    lightnessName: function() {
      l = this.getLightness();
  
      if( l < 10 ) { light = 'presque noir'; }
      if( l > 9 ) { light = 'très sombre'; }
      if( l > 22 ) { light = 'sombre'; }
      if( l > 30 ) { light = 'normal ?'; }
      if( l > 60 ) { light = 'clair'; }
      if( l > 80 ) { light = 'très clair'; }
      if( l > 94 ) { light = 'presque blanc'; }
  
      return light;
    }
