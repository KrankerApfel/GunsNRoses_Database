var BG_COLOR = 255;
var HEAD_TRANSPARENCY = 255;
var edition_font;
var corvinus_skyline_font;
var Y_gunspos,X_gunspos,X_npos,Y_npos,logoX,logoY;
var HEAD_SIZE = 300;
var lineW = 0;
var gnrLOGO;
var nothingindice = 0;

function preload(){
	edition_font = loadFont("fonts/edition.ttf");
	corvinus_skyline_font = loadFont("fonts/Corvinus Skyline ICG.ttf")
	gnrLOGO = loadImage("img/GunsNRoses-Logo.png");
	X_npos = -10-width, Y_npos = 100 , X_gunspos =- width, Y_gunspos = 100;
	logoX = -width/2, logoY = -height/2;
}

function setup() {
	var header = createCanvas(windowWidth,windowHeight/2);
	header.parent('header');
	background(BG_COLOR);
}

function draw(){
		push();
			//GUNS  ROSES
			background(BG_COLOR);
			translate(-width/2,height/2);
			stroke(51);
			strokeWeight(lineW);
			line(0,0,width*2,0);
		pop();
			if (X_npos > width && X_gunspos > width) {
				textSize(500);
				textFont(corvinus_skyline_font);
				textAlign(CENTER);
				text("Data Base",X_npos-width/2,Y_npos+2*height/3);
				if(nothingindice % 80 > 10){
					fill(0,0,0);
				}
				else{
					fill(0,0,0);
				}
				nothingindice++;noLoop();

			}
			else{
				lineW+=2;
				X_gunspos+=10;
				X_npos+=10;
			}
		push();
			translate(-width/2,height/2);
			textSize(HEAD_SIZE);
			textFont(corvinus_skyline_font);
			textAlign(CENTER);
			fill( 192, 57, 43 ,HEAD_TRANSPARENCY);
			noStroke();
			text("GUNS   ROSES",X_gunspos,Y_gunspos);
			//	 N
			textSize(HEAD_SIZE);
			textFont(corvinus_skyline_font);
			textAlign(CENTER);
			fill( 241, 196, 15 ,HEAD_TRANSPARENCY);
			noStroke();
			text("N'",X_npos,Y_npos);
		pop();
}