var BG_COLOR;
var HEAD_TRANSPARENCY = 255;
var corvinus_skyline_font,huskystash;
var Y_gunspos,X_gunspos,X_npos,Y_npos,logoX,logoY;
var HEAD_SIZE = 300;
var lineW = 0;
var gnrLOGO;
var nothingindice = 0;
var gunNroses = "GUNS N'ROSES";
var move = 0;
var titleInAction = 0;
var DBtextcount = -50;

function setup(){
	logoX = -width/2, logoY = -height/2;
	X_npos = -10-width, Y_npos = 100 , X_gunspos = 0, Y_gunspos = 0;
	corvinus_skyline_font = loadFont("fonts/Corvinus Skyline ICG.ttf");
	huskystash = loadFont("fonts/husky stash.ttf");
	BG_COLOR = color(217,205,145);
	var header = createCanvas(windowWidth- windowWidth/4,windowHeight/5);
	header.parent('header');
	background(BG_COLOR);
}
function draw(){
	background(BG_COLOR);
	push();
		translate(0,height/2);
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+height/4+height/8+X_gunspos/5);
				textFont(corvinus_skyline_font);
				fill(217,159,108,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+height/4+X_gunspos);
				textFont(corvinus_skyline_font);
				fill(191,96,75,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+X_gunspos/10);
				textFont(corvinus_skyline_font)
				fill(166,60,60,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
		textAlign(RIGHT,CENTER);
		textSize(height);
		textFont(corvinus_skyline_font);
		fill(64,20,44);
		titleInAction = width/2+textWidth(gunNroses);
		text(gunNroses,X_gunspos,Y_gunspos);
		X_gunspos+=width/100 - X_gunspos/100;
		move+=6;
		if(DBtextcount>=1){
			fill(217,205,145,abs(move/3));
			textSize(height/2)				
			textFont(huskystash);
			textAlign(LEFT);
			text("D",textWidth(""),0);
			if (DBtextcount >=50) {
				text("a",textWidth("D"),0);
				if (DBtextcount >=100) {
					text("t",textWidth("Da"),0);
					if (DBtextcount >=150) {
						text("a",textWidth("Dat"),0);
						if (DBtextcount >=200) {
							text(" B",textWidth("Data"),0);
							if (DBtextcount >=250) {
								text("a",textWidth("Data B"),0);
								if (DBtextcount >=300) {
									text("s",textWidth("Data Ba"),0);
									if (DBtextcount >=350) {
										text("e",textWidth("Data Bas"),0);
									}
								}
							}
						}
					}
				}
			}
		}
	pop();
}
function windowResized(){
	resizeCanvas(windowWidth- windowWidth/4,windowHeight/5);
}
function mouseWheel(event){
	X_gunspos += event.delta/10;
}