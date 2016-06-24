(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {}; 

// library properties:
lib.properties = {
	width: 600,
	height: 160,
	fps: 24,
	color: "#FFFFFF",
	webfonts: {},
	manifest: []
};



lib.webfontAvailable = function(family) { 
	lib.properties.webfonts[family] = true;
	var txtFilters = lib.webFontTxtFilters && lib.webFontTxtFilters[family] || [];
	for(var f = 0; f < txtFilters.length; ++f) {
		txtFilters[f].updateCache();
	}
};
// symbols:



(lib.bannerjpgcopy = function() {
	this.spriteSheet = ss["banner_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.Bitmap2 = function() {
	this.spriteSheet = ss["banner_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.text3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgoAnQgMgPAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOARAAAgIhKAAQAAAOAHAHQAHAIAJAAQAHAAAFgFQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgUgAgOgcQgGAHAAANIArAAQAAgOgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape.setTransform(49.3,2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgjA6IAAhwIAcAAIAAAQQAHgMADgDQAGgEAIAAQAKAAAKAGIgKAaQgHgFgHAAQgGAAgFAEQgDADgCAJQgCAJAAAcIAAAjg");
	this.shape_1.setTransform(38.9,1.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgoAnQgMgPAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOARAAAgIhKAAQAAAOAHAHQAHAIAJAAQAHAAAFgFQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgUgAgOgcQgGAHAAANIArAAQAAgOgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_2.setTransform(26.5,2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AAVBOIAAg8QAAgSgBgDQgCgFgFgCQgEgDgGAAQgGAAgFADQgHAEgCAGQgDAHAAAOIAAA5IgeAAIAAibIAeAAIAAA6QAOgRATAAQAKAAAIADQAJAEAFAGQAEAGABAIQABAHAAANIAABDg");
	this.shape_3.setTransform(12.8,-0.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AATA5IgThIIgSBIIgdAAIgkhxIAdAAIAVBJIAUhJIAbAAIATBJIAWhJIAeAAIglBxg");
	this.shape_4.setTransform(-3.5,2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgvBOIgDgYIANABQAKAAAFgGQAFgGADgJIgrhxIAgAAIAZBPIAbhPIAfAAIgoBsIgHAUQgEAKgEAFIgGAJQgFADgHACQgHACgIAAQgJAAgIgCg");
	this.shape_5.setTransform(-19.3,4.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AAVA6IAAg6QAAgRgCgFQgCgGgEgDQgEgDgHAAQgFAAgGAEQgHAFgCAHQgCAHAAARIAAA0IgfAAIAAhwIAcAAIAAAQQAPgTAVAAQAKAAAIAEQAJADAEAGQAEAFACAIQACAHAAANIAABFg");
	this.shape_6.setTransform(-33,1.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAsBOIgOgkIg9AAIgNAkIgiAAIA+ibIAgAAIA/CbgAgVAQIApAAIgUg4g");
	this.shape_7.setTransform(-48.8,-0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-58.7,-14.2,117.4,28.6);


(lib.text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgNAPIAAgcIAcAAIAAAcg");
	this.shape.setTransform(27.7,6.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgDBMQgHgDgDgFQgDgEgCgHIAAgWIAAgwIgOAAIAAgYIAOAAIAAgWIAcgSIAAAoIAVAAIAAAYIgVAAIAAAsIAAARQABAAAAABQAAAAAAABQABAAAAABQABAAABAAQABACADAAQAFAAAIgDIACAYQgKAEgOAAQgIAAgEgCg");
	this.shape_1.setTransform(12.8,0.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgiAxQgNgJgFgQIAfgEQACAIAGAFQAFAEAJABQAMgBAGgEQAEgDAAgFQAAgDgCgDQgDgCgIgCQgigIgKgGQgNgHAAgRQAAgPALgKQAMgKAYAAQAWAAALAIQAMAHAEAPIgcAFQgCgGgFgEQgFgEgJAAQgLAAgFAEQgDACAAAEQAAADADACQAEADAWAGQAYAFAKAIQAJAGAAAPQAAAQgNALQgNALgaAAQgVAAgOgKg");
	this.shape_2.setTransform(1.7,2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgqAxQgKgJAAgOQAAgKAFgIQAEgHAIgDQAIgDARgDQASgFAJgDIAAgDQAAgJgFgEQgEgDgKAAQgIAAgFADQgEAEgDAHIgbgEQAEgSAMgHQALgIAWAAQASAAAKAFQAKAFAFAHQADAHAAAUIAAAhQAAAPABAHQACAHAEAJIgeAAIgDgJIgBgEQgIAIgJAEQgGADgKAAQgSAAgKgKgAAAAGQgMADgEACQgGAFAAAGQAAAHAFAEQAFAFAHAAQAGAAAHgGQAGgDACgHIABgOIAAgGIgRAEg");
	this.shape_3.setTransform(-11.2,2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("Ag0BOIAAibIBqAAIAAAaIhLAAIAAAmIBBAAIAAAYIhBAAIAABDg");
	this.shape_4.setTransform(-24.8,-0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-33.8,-14.2,67.7,28.6);


(lib.text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgOAPIAAgcIAdAAIAAAcg");
	this.shape.setTransform(30.7,6.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgvBOIgDgYIANABQAKAAAFgGQAFgGADgJIgrhxIAgAAIAZBPIAbhPIAfAAIgoBsIgHAUQgEAKgEAFIgGAJQgFADgHACQgHACgIAAQgJAAgIgCg");
	this.shape_1.setTransform(13.3,4.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgiAxQgNgJgFgQIAfgEQACAIAGAFQAFAEAJABQAMgBAGgEQAEgDAAgFQAAgDgCgDQgDgCgIgCQgigIgKgGQgNgHAAgRQAAgPALgKQAMgKAYAAQAWAAALAIQAMAHAEAPIgcAFQgCgGgFgEQgFgEgJAAQgLAAgFAEQgDACAAAEQAAADADACQAEADAWAGQAYAFAKAIQAJAGAAAPQAAAQgNALQgNALgaAAQgVAAgOgKg");
	this.shape_2.setTransform(-0.2,2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgqAxQgKgJAAgOQAAgKAEgIQAFgHAIgDQAJgDAPgDQAUgFAHgDIAAgDQAAgJgDgEQgFgDgKAAQgIAAgEADQgFAEgCAHIgcgEQAFgSALgHQALgIAWAAQATAAAKAFQAJAFAEAHQAFAHAAAUIgBAhQAAAPACAHQABAHAEAJIgeAAIgDgJIgBgEQgIAIgIAEQgHADgKAAQgSAAgKgKgAAAAGQgMADgEACQgGAFAAAGQAAAHAFAEQAFAFAHAAQAGAAAHgGQAGgDABgHIABgOIAAgGIgQAEg");
	this.shape_3.setTransform(-13.1,2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("Ag7BOIAAibIBzAAIAAAaIhSAAIAAAjIBMAAIAAAZIhMAAIAAArIBVAAIAAAag");
	this.shape_4.setTransform(-27.3,-0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-36.9,-14.2,73.8,28.6);


(lib.slidebg = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#52B348").s().p("A4KCeIC+k7IGXgIMAnAAAAIAAFLg");
	this.shape.setTransform(8.2,2.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-146.6,-14.2,309.5,33.3);


(lib.logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Bitmap2();
	this.instance.setTransform(-57.1,-59.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-57.1,-59.1,114,118);


(lib.bRegistr = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(255,255,255,0.8)").s().p("AgOBOIAAgeIAcAAIAAAegAgHAmIgIhOIAAglIAfAAIAAAlIgIBOg");
	this.shape.setTransform(71.4,13.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("rgba(255,255,255,0.8)").s().p("AAVA6IAAg6QAAgRgCgFQgCgGgEgDQgEgDgHAAQgFAAgGAEQgHAFgCAHQgCAHAAARIAAA0IgfAAIAAhwIAcAAIAAAQQAPgTAVAAQAKAAAIAEQAJADAEAGQAEAFACAIQACAHAAANIAABFg");
	this.shape_1.setTransform(60.1,15.6);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("rgba(255,255,255,0.8)").s().p("AgcA0QgPgHgHgOQgHgOAAgRQAAgPAHgPQAHgOAOgGQAOgIAPAAQAZAAARARQAQAQAAAZQAAAZgQARQgRARgZAAQgOAAgOgHgAgSgYQgJAIAAAQQAAARAJAIQAIAJAKAAQALAAAIgJQAIgIAAgRQAAgQgIgIQgIgJgLAAQgKAAgIAJg");
	this.shape_2.setTransform(45.7,15.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("rgba(255,255,255,0.8)").s().p("AgOBOIAAhwIAcAAIAABwgAgOgxIAAgcIAcAAIAAAcg");
	this.shape_3.setTransform(34.9,13.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("rgba(255,255,255,0.8)").s().p("AgEBMQgGgDgDgFQgDgEgBgHQgCgGAAgQIAAgvIgNAAIAAgZIANAAIAAgWIAdgSIAAAoIAUAAIAAAZIgUAAIAAAsIABAQQAAAAAAABQAAAAAAABQABAAAAABQABAAAAAAQADACADAAQAEAAAHgDIADAYQgLAEgNAAQgIAAgFgCg");
	this.shape_4.setTransform(27.2,13.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("rgba(255,255,255,0.8)").s().p("AgqAxQgKgJAAgPQAAgJAEgIQAFgIAJgCQAHgDAQgEQAUgEAIgDIAAgDQgBgJgEgDQgEgEgKAAQgIAAgEADQgFADgDAIIgbgFQAEgQAMgIQALgIAWAAQASAAALAEQAKAGADAHQAFAHAAAUIgBAhQAAAPABAHQACAHAEAJIgeAAIgDgJIgBgEQgHAHgKAFQgGADgKAAQgSAAgKgKgAAAAGQgMADgEADQgGAEAAAGQAAAGAFAFQAEAFAIAAQAGAAAIgGQAFgEABgFIACgQIAAgFIgRAEg");
	this.shape_5.setTransform(16.4,15.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("rgba(255,255,255,0.8)").s().p("AgkA6IAAhwIAcAAIAAAQQAHgMAFgDQAFgEAHAAQALAAAKAGIgKAaQgIgFgGAAQgGAAgFAEQgCADgCAJQgDAJAAAcIAAAjg");
	this.shape_6.setTransform(5.8,15.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("rgba(255,255,255,0.8)").s().p("AgEBMQgGgDgDgFQgDgEgCgHIgBgWIAAgvIgNAAIAAgZIANAAIAAgWIAdgSIAAAoIAUAAIAAAZIgUAAIAAAsIABAQQAAAAAAABQAAAAABABQAAAAAAABQABAAAAAAQACACAEAAQADAAAIgDIADAYQgLAEgNAAQgIAAgFgCg");
	this.shape_7.setTransform(-4,13.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("rgba(255,255,255,0.8)").s().p("AgiAxQgNgJgFgQIAfgEQACAIAGAFQAFAFAJAAQAMAAAGgFQAEgDAAgFQAAgDgCgDQgDgCgIgCQgigIgKgGQgNgIAAgQQAAgPALgKQAMgKAYAAQAWAAALAIQAMAHAEAPIgcAGQgCgIgFgDQgFgDgJgBQgLABgFADQgDACAAAEQAAADADADQAEADAWAFQAYAGAKAHQAJAHAAAOQAAAPgNAMQgNALgaAAQgVAAgOgKg");
	this.shape_8.setTransform(-15.1,15.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("rgba(255,255,255,0.8)").s().p("AgOBOIAAhwIAcAAIAABwgAgOgxIAAgcIAcAAIAAAcg");
	this.shape_9.setTransform(-24.9,13.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("rgba(255,255,255,0.8)").s().p("AgmBHQgMgKAAgPIAAgEIAiAEQABAGADACQAFADAHAAQAMABAFgEQAEgCACgGQACgDAAgKIAAgRQgOATgSAAQgXAAgOgUQgKgPAAgVQAAgdAOgPQANgPAVAAQATAAAOATIAAgRIAcAAIAABlQAAAUgDAKQgEAKgGAGQgGAFgKAEQgKADgPAAQgbAAgMgKgAgQgxQgHAJAAARQAAATAHAFQAHAJAJAAQAKAAAIgJQAHgGAAgRQAAgSgHgJQgHgIgLAAQgJAAgHAIg");
	this.shape_10.setTransform(-36,17.9);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("rgba(255,255,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_11.setTransform(-49.7,15.7);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("rgba(255,255,255,0.8)").s().p("AAgBOIgXgiIgOgXQgFgFgFgCQgFgBgLAAIgGAAIAABBIggAAIAAibIBDAAQAXAAAMAEQALAEAHALQAHALAAAOQAAASgLALQgKAKgVADQAKAGAHAHQAHAHALATIATAegAglgLIAXAAQAVAAAGgCQAFgBAEgFQADgFAAgHQAAgIgEgFQgFgFgHgBIgWgBIgYAAg");
	this.shape_12.setTransform(-64,13.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("rgba(255,255,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_13.setTransform(19.8,-10.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("rgba(255,255,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_14.setTransform(6.5,-10.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("rgba(255,255,255,0.8)").s().p("AgjA6IAAhwIAcAAIAAAQQAHgMADgDQAGgEAIAAQAKAAAKAGIgKAaQgHgFgHAAQgGAAgFAEQgDADgCAJQgCAJAAAcIAAAjg");
	this.shape_15.setTransform(-3.9,-11);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("rgba(255,255,255,0.8)").s().p("Ag0BOIAAibIBqAAIAAAaIhLAAIAAAmIBBAAIAAAYIhBAAIAABDg");
	this.shape_16.setTransform(-16.5,-13);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("rgba(82,181,72,0.8)").ss(11.2,1,1).p("Avuk4IfdAAIAAJxI/dAAg");

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("rgba(82,181,72,0.8)").s().p("AvuE5IAApxIfdAAIAAJxg");

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("rgba(0,0,255,0.8)").s().p("AgOBOIAAgeIAcAAIAAAegAgHAmIgIhOIAAglIAfAAIAAAlIgIBOg");
	this.shape_19.setTransform(71.4,13.5);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("rgba(0,0,255,0.8)").s().p("AAVA6IAAg6QAAgRgCgFQgCgGgEgDQgEgDgHAAQgFAAgGAEQgHAFgCAHQgCAHAAARIAAA0IgfAAIAAhwIAcAAIAAAQQAPgTAVAAQAKAAAIAEQAJADAEAGQAEAFACAIQACAHAAANIAABFg");
	this.shape_20.setTransform(60.1,15.6);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("rgba(0,0,255,0.8)").s().p("AgcA0QgPgHgHgOQgHgOAAgRQAAgPAHgPQAHgOAOgGQAOgIAPAAQAZAAARARQAQAQAAAZQAAAZgQARQgRARgZAAQgOAAgOgHgAgSgYQgJAIAAAQQAAARAJAIQAIAJAKAAQALAAAIgJQAIgIAAgRQAAgQgIgIQgIgJgLAAQgKAAgIAJg");
	this.shape_21.setTransform(45.7,15.7);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("rgba(0,0,255,0.8)").s().p("AgOBOIAAhwIAcAAIAABwgAgOgxIAAgcIAcAAIAAAcg");
	this.shape_22.setTransform(34.9,13.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("rgba(0,0,255,0.8)").s().p("AgEBMQgGgDgDgFQgDgEgBgHQgCgGAAgQIAAgvIgNAAIAAgZIANAAIAAgWIAdgSIAAAoIAUAAIAAAZIgUAAIAAAsIABAQQAAAAAAABQAAAAAAABQABAAAAABQABAAAAAAQADACADAAQAEAAAHgDIADAYQgLAEgNAAQgIAAgFgCg");
	this.shape_23.setTransform(27.2,13.8);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("rgba(0,0,255,0.8)").s().p("AgqAxQgKgJAAgPQAAgJAEgIQAFgIAJgCQAHgDAQgEQAUgEAIgDIAAgDQgBgJgEgDQgEgEgKAAQgIAAgEADQgFADgDAIIgbgFQAEgQAMgIQALgIAWAAQASAAALAEQAKAGADAHQAFAHAAAUIgBAhQAAAPABAHQACAHAEAJIgeAAIgDgJIgBgEQgHAHgKAFQgGADgKAAQgSAAgKgKgAAAAGQgMADgEADQgGAEAAAGQAAAGAFAFQAEAFAIAAQAGAAAIgGQAFgEABgFIACgQIAAgFIgRAEg");
	this.shape_24.setTransform(16.4,15.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("rgba(0,0,255,0.8)").s().p("AgkA6IAAhwIAcAAIAAAQQAHgMAFgDQAFgEAHAAQALAAAKAGIgKAaQgIgFgGAAQgGAAgFAEQgCADgCAJQgDAJAAAcIAAAjg");
	this.shape_25.setTransform(5.8,15.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("rgba(0,0,255,0.8)").s().p("AgEBMQgGgDgDgFQgDgEgCgHIgBgWIAAgvIgNAAIAAgZIANAAIAAgWIAdgSIAAAoIAUAAIAAAZIgUAAIAAAsIABAQQAAAAAAABQAAAAABABQAAAAAAABQABAAAAAAQACACAEAAQADAAAIgDIADAYQgLAEgNAAQgIAAgFgCg");
	this.shape_26.setTransform(-4,13.8);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("rgba(0,0,255,0.8)").s().p("AgiAxQgNgJgFgQIAfgEQACAIAGAFQAFAFAJAAQAMAAAGgFQAEgDAAgFQAAgDgCgDQgDgCgIgCQgigIgKgGQgNgIAAgQQAAgPALgKQAMgKAYAAQAWAAALAIQAMAHAEAPIgcAGQgCgIgFgDQgFgDgJgBQgLABgFADQgDACAAAEQAAADADADQAEADAWAFQAYAGAKAHQAJAHAAAOQAAAPgNAMQgNALgaAAQgVAAgOgKg");
	this.shape_27.setTransform(-15.1,15.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("rgba(0,0,255,0.8)").s().p("AgOBOIAAhwIAcAAIAABwgAgOgxIAAgcIAcAAIAAAcg");
	this.shape_28.setTransform(-24.9,13.5);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("rgba(0,0,255,0.8)").s().p("AgmBHQgMgKAAgPIAAgEIAiAEQABAGADACQAFADAHAAQAMABAFgEQAEgCACgGQACgDAAgKIAAgRQgOATgSAAQgXAAgOgUQgKgPAAgVQAAgdAOgPQANgPAVAAQATAAAOATIAAgRIAcAAIAABlQAAAUgDAKQgEAKgGAGQgGAFgKAEQgKADgPAAQgbAAgMgKgAgQgxQgHAJAAARQAAATAHAFQAHAJAJAAQAKAAAIgJQAHgGAAgRQAAgSgHgJQgHgIgLAAQgJAAgHAIg");
	this.shape_29.setTransform(-36,17.9);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("rgba(0,0,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_30.setTransform(-49.7,15.7);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("rgba(0,0,255,0.8)").s().p("AAgBOIgXgiIgOgXQgFgFgFgCQgFgBgLAAIgGAAIAABBIggAAIAAibIBDAAQAXAAAMAEQALAEAHALQAHALAAAOQAAASgLALQgKAKgVADQAKAGAHAHQAHAHALATIATAegAglgLIAXAAQAVAAAGgCQAFgBAEgFQADgFAAgHQAAgIgEgFQgFgFgHgBIgWgBIgYAAg");
	this.shape_31.setTransform(-64,13.5);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("rgba(0,0,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_32.setTransform(19.8,-10.8);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("rgba(0,0,255,0.8)").s().p("AgoAoQgMgQAAgXQAAgbAPgQQAPgQAWAAQAYAAAPARQAOAQAAAhIhKAAQAAAOAHAHQAHAIAJAAQAHgBAFgEQAFgDACgJIAeAFQgGARgMAIQgNAJgSAAQgcAAgOgTgAgOgcQgGAHAAAMIArAAQAAgNgHgGQgGgHgKAAQgIAAgGAHg");
	this.shape_33.setTransform(6.5,-10.8);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("rgba(0,0,255,0.8)").s().p("AgjA6IAAhwIAcAAIAAAQQAHgMADgDQAGgEAIAAQAKAAAKAGIgKAaQgHgFgHAAQgGAAgFAEQgDADgCAJQgCAJAAAcIAAAjg");
	this.shape_34.setTransform(-3.9,-11);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("rgba(0,0,255,0.8)").s().p("Ag0BOIAAibIBqAAIAAAaIhLAAIAAAmIBBAAIAAAYIhBAAIAABDg");
	this.shape_35.setTransform(-16.5,-13);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_18},{t:this.shape_17},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19}]},1).to({state:[{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-106.2,-36.8,212.5,73.8);


(lib.bg = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bannerjpgcopy();
	this.instance.setTransform(-300,-80);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-300,-80,600,160);


// stage content:
(lib.banner = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.instance = new lib.bRegistr();
	this.instance.setTransform(442.2,-39.1);
	this.instance._off = true;
	new cjs.ButtonHelper(this.instance, 0, 1, 2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(89).to({_off:false},0).wait(1).to({y:-29.6},0).wait(1).to({y:-20.1},0).wait(1).to({y:-10.5},0).wait(1).to({y:-1},0).wait(1).to({y:8.6},0).wait(1).to({y:18.1},0).wait(1).to({y:27.7},0).wait(1).to({y:37.2},0).wait(1).to({y:46.8},0).wait(1).to({y:56.3},0).wait(1).to({y:65.9},0).wait(1).to({y:65.8},0).wait(3).to({y:65.7},0).wait(4).to({y:65.6},0).wait(4).to({y:65.5},0).wait(4).to({y:65.4},0).wait(4).to({y:65.3},0).wait(4).to({y:65.2},0).wait(4).to({y:65.1},0).wait(3).to({y:53.5},0).wait(1).to({y:41.9},0).wait(1).to({y:30.3},0).wait(1).to({y:18.8},0).wait(1).to({y:7.2},0).wait(1).to({y:-4.4},0).wait(1).to({y:-16},0).wait(1).to({y:-27.6},0).wait(1).to({y:-39.1},0).to({_off:true},1).wait(66));

	// text
	this.instance_1 = new lib.text1();
	this.instance_1.setTransform(361.7,180.6);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(44).to({_off:false},0).wait(1).to({regX:-0.5,regY:2.1,x:361.2,y:180.3},0).wait(1).to({y:178},0).wait(1).to({y:175.7},0).wait(1).to({y:173.3},0).wait(1).to({y:171},0).wait(1).to({y:168.7},0).wait(1).to({y:166.4},0).wait(1).to({y:164},0).wait(1).to({y:161.7},0).wait(1).to({y:159.4},0).wait(1).to({y:157.1},0).wait(1).to({y:154.7},0).wait(1).to({y:152.4},0).wait(1).to({y:150.1},0).wait(1).to({y:147.8},0).wait(81).to({y:149.5},0).wait(1).to({y:151.2},0).wait(1).to({y:152.9},0).wait(1).to({y:154.6},0).wait(1).to({y:156.3},0).wait(1).to({y:158},0).wait(1).to({y:159.7},0).wait(1).to({y:161.4},0).wait(1).to({y:163.1},0).wait(1).to({y:164.8},0).wait(1).to({y:166.5},0).wait(1).to({y:168.2},0).wait(1).to({y:169.9},0).wait(1).to({y:171.6},0).wait(1).to({y:173.3},0).wait(1).to({y:175},0).wait(1).to({y:176.7},0).wait(1).to({y:178.4},0).wait(1).to({y:180.1},0).wait(1).to({y:181.8},0).to({_off:true},1).wait(46));

	// text2
	this.instance_2 = new lib.text2();
	this.instance_2.setTransform(435.4,180.6);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(59).to({_off:false},0).wait(1).to({regX:-0.6,regY:-0.1,x:434.8,y:178.1},0).wait(1).to({y:175.8},0).wait(1).to({y:173.5},0).wait(1).to({y:171.2},0).wait(1).to({y:168.9},0).wait(1).to({y:166.5},0).wait(1).to({y:164.2},0).wait(1).to({y:161.9},0).wait(1).to({y:159.6},0).wait(1).to({y:157.3},0).wait(1).to({y:154.9},0).wait(1).to({y:152.6},0).wait(1).to({y:150.3},0).wait(1).to({y:148},0).wait(1).to({y:145.7},0).wait(66).to({y:147.4},0).wait(1).to({y:149.1},0).wait(1).to({y:150.8},0).wait(1).to({y:152.5},0).wait(1).to({y:154.2},0).wait(1).to({y:155.9},0).wait(1).to({y:157.6},0).wait(1).to({y:159.3},0).wait(1).to({y:161},0).wait(1).to({y:162.7},0).wait(1).to({y:164.4},0).wait(1).to({y:166.1},0).wait(1).to({y:167.8},0).wait(1).to({y:169.5},0).wait(1).to({y:171.2},0).wait(1).to({y:172.9},0).wait(1).to({y:174.6},0).wait(1).to({y:176.3},0).wait(1).to({y:178},0).wait(1).to({y:179.7},0).to({_off:true},1).wait(46));

	// text3
	this.instance_3 = new lib.text3();
	this.instance_3.setTransform(530,180.6);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(74).to({_off:false},0).wait(1).to({regX:-1,regY:2.1,x:529,y:180.3},0).wait(1).to({y:178},0).wait(1).to({y:175.7},0).wait(1).to({y:173.4},0).wait(1).to({y:171.1},0).wait(1).to({y:168.7},0).wait(1).to({y:166.4},0).wait(1).to({y:164.1},0).wait(1).to({y:161.8},0).wait(1).to({y:159.5},0).wait(1).to({y:157.1},0).wait(1).to({y:154.8},0).wait(1).to({y:152.5},0).wait(1).to({y:150.2},0).wait(1).to({y:147.9},0).wait(51).to({y:149.6},0).wait(1).to({y:151.3},0).wait(1).to({y:153},0).wait(1).to({y:154.7},0).wait(1).to({y:156.4},0).wait(1).to({y:158.1},0).wait(1).to({y:159.8},0).wait(1).to({y:161.5},0).wait(1).to({y:163.2},0).wait(1).to({y:164.9},0).wait(1).to({y:166.6},0).wait(1).to({y:168.3},0).wait(1).to({y:170},0).wait(1).to({y:171.7},0).wait(1).to({y:173.4},0).wait(1).to({y:175.1},0).wait(1).to({y:176.8},0).wait(1).to({y:178.5},0).wait(1).to({y:180.2},0).wait(1).to({y:181.9},0).to({_off:true},1).wait(46));

	// text bg
	this.instance_4 = new lib.slidebg();
	this.instance_4.setTransform(437.1,141.2);
	this.instance_4.alpha = 0.699;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(48).to({_off:false},0).wait(1).to({regX:8.2,regY:2.5,x:445.3,y:143.7,alpha:0.7},0).wait(110).to({_off:true},1).wait(46));

	// Logo
	this.instance_5 = new lib.logo();
	this.instance_5.setTransform(87.2,-87.4);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(24).to({_off:false},0).wait(1).to({regX:-0.1,regY:-0.1,x:87.1,y:-79.4},0).wait(1).to({y:-71.2},0).wait(1).to({y:-63.1},0).wait(1).to({y:-54.9},0).wait(1).to({y:-46.8},0).wait(1).to({y:-38.7},0).wait(1).to({y:-30.5},0).wait(1).to({y:-22.4},0).wait(1).to({y:-14.3},0).wait(1).to({y:-6.1},0).wait(1).to({y:2},0).wait(1).to({y:10.1},0).wait(1).to({y:18.2},0).wait(1).to({y:26.4},0).wait(1).to({y:34.5},0).wait(1).to({y:42.7},0).wait(1).to({y:50.8},0).wait(1).to({y:58.9},0).wait(1).to({y:67.1},0).wait(1).to({y:75.2},0).wait(1).to({y:83.4},0).wait(115).to({y:76.8},0).wait(1).to({y:70.3},0).wait(1).to({y:63.7},0).wait(1).to({y:57.2},0).wait(1).to({y:50.7},0).wait(1).to({y:44.1},0).wait(1).to({y:37.6},0).wait(1).to({y:31},0).wait(1).to({y:24.5},0).wait(1).to({y:18},0).wait(1).to({y:11.4},0).wait(1).to({y:4.9},0).wait(1).to({y:-1.6},0).wait(1).to({y:-8.1},0).wait(1).to({y:-14.7},0).wait(1).to({y:-21.2},0).wait(1).to({y:-27.8},0).wait(1).to({y:-34.3},0).wait(1).to({y:-40.8},0).wait(1).to({y:-47.4},0).wait(1).to({y:-53.9},0).wait(1).to({y:-60.4},0).wait(1).to({y:-67},0).wait(1).to({y:-73.5},0).wait(1).to({y:-80.1},0).wait(1).to({y:-86.6},0).to({_off:true},1).wait(20));

	// bg
	this.instance_6 = new lib.bg();
	this.instance_6.setTransform(900,80.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1).to({x:886.4,y:80.3},0).wait(1).to({x:872.7},0).wait(1).to({x:859.1},0).wait(1).to({x:845.5},0).wait(1).to({x:831.8},0).wait(1).to({x:818.2},0).wait(1).to({x:804.6},0).wait(1).to({x:790.9},0).wait(1).to({x:777.3},0).wait(1).to({x:763.6},0).wait(1).to({x:750},0).wait(1).to({x:736.4},0).wait(1).to({x:722.7,y:80.2},0).wait(1).to({x:709.1},0).wait(1).to({x:695.5},0).wait(1).to({x:681.8},0).wait(1).to({x:668.2},0).wait(1).to({x:654.5},0).wait(1).to({x:640.9},0).wait(1).to({x:627.3},0).wait(1).to({x:613.6},0).wait(1).to({x:600},0).wait(1).to({x:586.4},0).wait(1).to({x:572.7},0).wait(1).to({x:559.1},0).wait(1).to({x:545.5,y:80.1},0).wait(1).to({x:531.8},0).wait(1).to({x:518.2},0).wait(1).to({x:504.5},0).wait(1).to({x:490.9},0).wait(1).to({x:477.3},0).wait(1).to({x:463.6},0).wait(1).to({x:450},0).wait(1).to({x:436.4},0).wait(1).to({x:422.7},0).wait(1).to({x:409.1},0).wait(1).to({x:395.5},0).wait(1).to({x:381.8,y:80},0).wait(1).to({x:368.2},0).wait(1).to({x:354.5},0).wait(1).to({x:340.9},0).wait(1).to({x:327.3},0).wait(1).to({x:313.6},0).wait(1).to({x:300},0).wait(116).to({x:313},0).wait(1).to({x:326.1},0).wait(1).to({x:339.1},0).wait(1).to({x:352.2},0).wait(1).to({x:365.2},0).wait(1).to({x:378.3},0).wait(1).to({x:391.3},0).wait(1).to({x:404.3},0).wait(1).to({x:417.4},0).wait(1).to({x:430.4},0).wait(1).to({x:443.5},0).wait(1).to({x:456.5},0).wait(1).to({x:469.6},0).wait(1).to({x:482.6},0).wait(1).to({x:495.7},0).wait(1).to({x:508.7},0).wait(1).to({x:521.7},0).wait(1).to({x:534.8},0).wait(1).to({x:547.8},0).wait(1).to({x:560.9},0).wait(1).to({x:573.9},0).wait(1).to({x:587},0).wait(1).to({x:600},0).wait(1).to({x:613},0).wait(1).to({x:626.1},0).wait(1).to({x:639.1},0).wait(1).to({x:652.2},0).wait(1).to({x:665.2},0).wait(1).to({x:678.3},0).wait(1).to({x:691.3},0).wait(1).to({x:704.3},0).wait(1).to({x:717.4},0).wait(1).to({x:730.4},0).wait(1).to({x:743.5},0).wait(1).to({x:756.5},0).wait(1).to({x:769.6},0).wait(1).to({x:782.6},0).wait(1).to({x:795.7},0).wait(1).to({x:808.7},0).wait(1).to({x:821.7},0).wait(1).to({x:834.8},0).wait(1).to({x:847.8},0).wait(1).to({x:860.9},0).wait(1).to({x:873.9},0).wait(1).to({x:887},0).wait(1).to({x:900},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(900,80.4,600,160);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;