// TO DO : mettre en variable les parametres et éviter les répétitions
// if possible remettre en JS et pas en JQuery

$(function(){
    //LOADING.....
    $("#parent").addClass("load");


    //FUNCTION HOME
    $("#pierre").mouseenter(function(){
      $("#ensemble").animate({
        opacity: 0
      },0, function() {
        // Callback
        $("#light1").animate({
          opacity: 1
        }, 0)
      });
    });

    $("#pierre").mouseleave(function(){
      $("#ensemble").animate({
        opacity: 1
      },0, function() {
        // Callback
        $("#light1").animate({
          opacity: 0
        }, 0)
      });
    });


    //FUNCTION HISTOIRE
    $("#catalogue").mouseenter(function(){
      $("#ensemble").animate({
        opacity: 0
      },0, function() {
        // Callback
        $("#light2").animate({
          opacity: 1
        }, 0)
      });
    });

    $("#catalogue").mouseleave(function(){
      $("#ensemble").animate({
        opacity: 1
      },0, function() {
        // Callback
        $("#light2").animate({
          opacity: 0
        }, 0)
      });
    });


    ///FUNCTION ADDRESS
    $("#boutiques").mouseenter(function(){
      $("#ensemble").animate({
        opacity: 0
      },0, function() {
        // Callback
        $("#light3").animate({
          opacity: 1
        }, 0)
      });
    });

    $("#boutiques").mouseleave(function(){
      $("#ensemble").animate({
        opacity: 1
      },0, function() {
        // Callback
        $("#light3").animate({
          opacity: 0
        }, 0)
      });
    });


    /// function philosph
    $("#philo").mouseenter(function(){
      $("#ensemble").animate({
        opacity: 0
      },0, function() {
        // Callback
        $("#light2").animate({
          opacity: 1
        }, 0)
      });
    });

    $("#philo").mouseleave(function(){
      $("#ensemble").animate({
        opacity: 1
      },0, function() {
        // Callback
        $("#light2").animate({
          opacity: 0
        }, 0)
      });
    });


    ///FUNCTION CONTACT
    $("#contact").mouseenter(function(){
      $("#ensemble").animate({
        opacity: 0
      },0, function() {
        // Callback
        $("#light4").animate({
          opacity: 1
        }, 0)
      });
    });

    $("#contact").mouseleave(function(){
      $("#ensemble").animate({
        opacity: 1
      },0, function() {
        // Callback
        $("#light4").animate({
          opacity: 0
        }, 0)
      });
    });
  /// END




 /// ANIMATION DES CADRES

    $("#pierre").mouseenter(function(){
      $("#pierrephoto").addClass("wobble");
      $("#pierretext").animate({
        opacity: 1
      });
    });
      
    $("#pierre").mouseleave(function(){
      $("#pierrephoto").removeClass("wobble");
      $("#pierretext").animate({
        opacity:0
      });        
    });


    $("#contact").mouseenter(function(){
      $("#telephone").addClass("phonecall");
      $("#contacttext").animate({
        opacity:1
      }); 
    });

    $("#contact").mouseleave(function(){
      $("#telephone").removeClass("phonecall");
      $("#contacttext").animate({
        opacity:0
      });  
    });


    $("#catalogue").mouseenter(function(){
      $("#label").addClass("wobble");
        $("#prodtext").animate({
          opacity:1
        }); 
      });

    $("#catalogue").mouseleave(function(){
      $("#label").removeClass("wobble");
      $("#prodtext").animate({
        opacity:0
      });  
    });


    $("#philo").mouseenter(function(){
      $("#savoirfaire").addClass("wobble");
      $("#philostext").animate({
        opacity:1
      }); 
    });

    $("#philo").mouseleave(function(){
      $("#savoirfaire").removeClass("wobble");
      $("#philostext").animate({
        opacity:0
      });  
    });


    $("#boutiques").mouseenter(function(){
      $("#adress-boutiques").addClass("wobble");
      $("#boutitext").animate({
        opacity:1
      }); 
    });

    $("#boutiques").mouseleave(function(){
      $("#adress-boutiques").removeClass("wobble");
      $("#boutitext").animate({
        opacity:0
      });  
    });


    $("#actu").mouseenter(function(){
      $(".clock").addClass("wobble");
      $("#actutext").animate({
        opacity:1
      }); 
    });

    $("#actu").mouseleave(function(){
      $(".clock").removeClass("wobble");
      $("#actutext").animate({
        opacity:0
      });  
    });

// clock

(function(){
	var canvas = document.getElementById('clock');

	var Clock = function(canvas, radius) {
		this.canvas = canvas;
		this.ctx = this.canvas.getContext('2d');

		this.secondHandOptions = {
			color: '#cd151c',
			thicknessRatio: 0.0075,
			forwardRadiusRatio: 0.75,
			backwardRadiusRatio: 0.25,
			tipRadiusRatio: 0.075
		}

		this.minuteHandOptions = {
			color: '#000',
			thicknessRatio: 0.06,
			forwardRadiusRatio: 0.875,
			backwardRadiusRatio: 0.25
		}

		this.hourHandOptions = {
			color: '#000',
			thicknessRatio: 0.08,
			forwardRadiusRatio: 0.6,
			backwardRadiusRatio: 0.25
		}

		this.markerOptions = {
			color: '#000',
			edgeDistanceRatio: 0.05,
			thicknessRatio: 0.01,
			lengthRatio: 0.1,
			keyMarkers: 5,
			keyMarkerThicknessRatio: 0.075,
			keyMarkerLengthRatio: 0.2
		}

		this.radius = radius;

		this.update();
	};

	Clock.prototype.update = function() {
    this.center = {
      x: this.canvas.width * 0.5,
      y: this.canvas.height * 0.5
    }

		this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
		this.drawFace();
		this.drawMinuteMarkers();
		this.drawHourHand();
		this.drawMinuteHand();
		this.drawSecondHand();
		this.drawPin();
	};

	Clock.prototype.drawFace = function() {
		var faceGradient = this.ctx.createRadialGradient(this.center.x, this.center.y, 0, this.center.x, this.center.y, this.radius);
		faceGradient.addColorStop(0, "rgba(255, 231, 180, 0)");
		faceGradient.addColorStop(1, "rgba(182, 157, 100, 0.3)");
		this.ctx.fillStyle=faceGradient;

		this.ctx.beginPath();
		this.ctx.arc(this.center.x, this.center.y, this.radius, 0, 2 * Math.PI);

		this.ctx.fillStyle='#fff';
		this.ctx.fill();
		this.ctx.fillStyle=faceGradient;
		this.ctx.fill();

		var edgeGradient = this.ctx.createLinearGradient(0, this.center.y - this.radius, 0, this.center.y + this.radius);
		edgeGradient.addColorStop(0, "#999");
		edgeGradient.addColorStop(0.5, "#fff");
		edgeGradient.addColorStop(1, "#999");
		this.ctx.fillStyle=edgeGradient;

		this.ctx.beginPath();
		this.ctx.arc(this.center.x, this.center.y, this.radius, 0, 2 * Math.PI);
		
		this.ctx.closePath();
		this.ctx.arc(this.center.x, this.center.y, this.radius + (this.radius * 0.075), 0, 2 * Math.PI, true);

		this.ctx.shadowColor = 'rgba(0,0,0,0.7)';
		this.ctx.shadowBlur = this.radius * 0.3;
		this.ctx.shadowOffsetY = 1;
		this.ctx.fill();
		this.ctx.shadowBlur = 0;
		this.ctx.shadowOffsetY = 0;
	};

	Clock.prototype.drawPin = function() {
		this.ctx.fillStyle='#999';
		this.ctx.beginPath();
		this.ctx.arc(this.center.x, this.center.y, 4, 0, 2 * Math.PI);
		this.ctx.fill();
	};

	Clock.prototype.drawMinuteMarkers = function() {
		var i = 1;
		while (i <= 60) {
			var angle = (Math.PI * 2) * (-i / 60);

			var startX = (Math.sin(angle) * (this.radius - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.x;
			var startY = (Math.cos(angle) * (this.radius - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.y;

			if (i % this.markerOptions.keyMarkers) {
				var endX = (Math.sin(angle) * (this.radius - (this.radius * this.markerOptions.lengthRatio) - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.x;
				var endY = (Math.cos(angle) * (this.radius - (this.radius * this.markerOptions.lengthRatio) - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.y;
				this.ctx.lineWidth = this.markerOptions.thicknessRatio * this.radius;
			} else {
				var endX = (Math.sin(angle) * (this.radius - (this.markerOptions.keyMarkerLengthRatio * this.radius) - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.x;
				var endY = (Math.cos(angle) * (this.radius - (this.markerOptions.keyMarkerLengthRatio * this.radius) - (this.radius * this.markerOptions.edgeDistanceRatio))) + this.center.y;
				this.ctx.lineWidth = this.markerOptions.keyMarkerThicknessRatio * this.radius;
			}

			this.ctx.strokeStyle = this.markerOptions.color;

			this.ctx.beginPath();
			this.ctx.moveTo(startX, startY);
			this.ctx.lineTo(endX, endY);
			this.ctx.stroke();

			i++;
		}
	};

	Clock.prototype.drawSecondHand = function() {
		var milliseconds = (Date.now() / 1000) % 60;
		var handAngle = Math.max(-Math.PI * 2, (Math.PI * 2) * (-milliseconds / 58.5));

		this.drawHand(handAngle, this.secondHandOptions);
	};

	Clock.prototype.drawMinuteHand = function() {
		var minutes = Math.floor((Date.now() / 60000) % 60);
		var handAngle = (Math.PI * 2) * (-minutes / 60);

		this.drawHand(handAngle, this.minuteHandOptions);
	};

	Clock.prototype.drawHourHand = function() {
		var hours = (Date.now() / 3600000) % 12;
		var handAngle = (Math.PI * 2) * (-hours / 12);

		this.drawHand(handAngle, this.hourHandOptions);
	};

	Clock.prototype.drawHand = function(angle, handOptions) {
		var startX = (Math.sin(angle) * (this.radius * handOptions.backwardRadiusRatio)) + this.center.x;
		var startY = (Math.cos(angle) * (this.radius * handOptions.backwardRadiusRatio)) + this.center.y;

		var endX = (Math.sin(angle - Math.PI) * (this.radius * handOptions.forwardRadiusRatio)) + this.center.x;
		var endY = (Math.cos(angle - Math.PI) * (this.radius * handOptions.forwardRadiusRatio)) + this.center.y;

		this.ctx.shadowColor = 'rgba(0,0,0,0.8)';
		this.ctx.shadowBlur = this.radius * 0.075;
		this.ctx.shadowOffsetY = 1;

		this.ctx.strokeStyle = handOptions.color;
		this.ctx.lineWidth = handOptions.thicknessRatio * this.radius;

		this.ctx.beginPath();
		this.ctx.moveTo(startX, startY);
		this.ctx.lineTo(endX, endY);
		this.ctx.stroke();

		if (handOptions.tipRadiusRatio) {
			this.ctx.fillStyle = handOptions.color;
			this.ctx.beginPath();
			this.ctx.arc(endX, endY, handOptions.tipRadiusRatio * this.radius, 0, 2 * Math.PI);
			this.ctx.fill();
		}

		this.ctx.shadowBlur = 0;
		this.ctx.shadowOffsetY = 0;

		if (handOptions.tipRadiusRatio) {
			this.ctx.beginPath();
			this.ctx.moveTo(startX, startY);
			this.ctx.lineTo(endX, endY);
			this.ctx.stroke();
		}
	};

	sizeCanvas();

	var clock = new Clock(canvas, clockRadius());

	function clockRadius() {
		return Math.min(window.innerWidth, window.innerHeight) * 0.75;
	}

	function sizeCanvas() {
		canvas.width = window.innerWidth * 2;
		canvas.height = window.innerHeight * 2;
	}

	function render() {
		clock.update();
		requestAnimationFrame(render);
	}

	render();

	var lastWidth = window.innerWidth;

	window.addEventListener('resize', function(e){
		if (window.innerWidth != lastWidth) {
			clock.radius = clockRadius();
			lastWidth = window.innerWidth;
			sizeCanvas();
		}
	});
})();

//fin clock



});

// BURGER MENU

		$(function($){
    	     $( '.menu-btn' ).click(function(){
    	     $('.responsive-menu').toggleClass('expand')
    	     })
        });